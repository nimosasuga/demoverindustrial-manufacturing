<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Machine;
use App\Models\ManufacturingProduct;
use App\Models\ProjectPortfolio;
use App\Models\RfqInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndustrialController extends Controller
{
    public function home()
    {
        $featuredProducts = ManufacturingProduct::where('is_featured', true)
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $machines = Machine::orderBy('sort_order')->take(6)->get();

        $featuredPortfolios = ProjectPortfolio::where('is_featured', true)
            ->latest()
            ->take(4)
            ->get();

        $categories = ManufacturingProduct::select('category')
            ->distinct()
            ->pluck('category');

        return view('pages.home', compact(
            'featuredProducts',
            'machines',
            'featuredPortfolios',
            'categories'
        ));
    }

    public function products(Request $request)
    {
        $selectedCategory = $request->query('kategori');
        $search = $request->query('q');

        $query = ManufacturingProduct::query()->orderBy('sort_order');

        if ($selectedCategory && $selectedCategory !== 'Semua') {
            $query->where('category', $selectedCategory);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('sku_code', 'like', "%{$search}%")
                    ->orWhere('material_grade', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $products = $query->get();
        $categories = ManufacturingProduct::select('category')
            ->distinct()
            ->pluck('category');

        return view('pages.products', compact('products', 'categories', 'selectedCategory', 'search'));
    }

    public function productDetail(string $slug)
    {
        $product = ManufacturingProduct::where('slug', $slug)->firstOrFail();

        $relatedProducts = ManufacturingProduct::where('id', '!=', $product->id)
            ->where('category', $product->category)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        if ($relatedProducts->count() < 3) {
            $relatedProducts = ManufacturingProduct::where('id', '!=', $product->id)
                ->orderBy('sort_order')
                ->take(3)
                ->get();
        }

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }

    public function facilities()
    {
        $machines = Machine::orderBy('sort_order')->get();
        $machineCategories = Machine::select('category')->distinct()->pluck('category');

        return view('pages.facilities', compact('machines', 'machineCategories'));
    }

    public function workflow()
    {
        $machines = Machine::orderBy('sort_order')->take(4)->get();

        return view('pages.workflow', compact('machines'));
    }

    public function portfolio(Request $request)
    {
        $selectedIndustry = $request->query('industri');

        $query = ProjectPortfolio::query()->latest();
        if ($selectedIndustry && $selectedIndustry !== 'Semua') {
            $query->where('client_industry', $selectedIndustry);
        }

        $portfolios = $query->get();
        $industries = ProjectPortfolio::select('client_industry')->distinct()->pluck('client_industry');

        return view('pages.portfolio', compact('portfolios', 'industries', 'selectedIndustry'));
    }

    public function about()
    {
        $machineCount = Machine::sum('quantity_units');
        $productCount = ManufacturingProduct::count();
        $portfolioCount = ProjectPortfolio::count();

        return view('pages.about', compact('machineCount', 'productCount', 'portfolioCount'));
    }

    public function rfq(Request $request)
    {
        $products = ManufacturingProduct::orderBy('sort_order')->get();
        $selectedProduct = $request->query('produk', '');
        $selectedMaterial = $request->query('material', '');

        return view('pages.rfq', compact('products', 'selectedProduct', 'selectedMaterial'));
    }

    public function storeRfq(Request $request)
    {
        // Honeypot spam protection
        if ($request->filled('industrial_hp_check')) {
            return redirect()->route('rfq')->with('status', 'Permintaan telah diproses.');
        }

        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:150'],
            'contact_name' => ['required', 'string', 'max:120'],
            'job_title' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'whatsapp' => ['required', 'string', 'min:8', 'max:30'],
            'product_service' => ['required', 'string', 'max:180'],
            'material_grade' => ['required', 'string', 'max:120'],
            'estimated_quantity' => ['required', 'string', 'max:100'],
            'tolerance_requirement' => ['nullable', 'string', 'max:100'],
            'target_deadline' => ['nullable', 'string', 'max:100'],
            'delivery_location' => ['required', 'string', 'max:180'],
            'drawing_link_or_notes' => ['nullable', 'string', 'max:2000'],
            'nda_requested' => ['nullable', 'boolean'],
        ]);

        $validated['reference_number'] = 'RFQ-' . now()->format('Ymd') . '-' . strtoupper(Str::random(4));
        $validated['nda_requested'] = $request->boolean('nda_requested');
        $validated['status'] = 'submitted';

        $rfq = RfqInquiry::create($validated);

        return redirect()->route('rfq.success', $rfq->id);
    }

    public function rfqSuccess(int $id)
    {
        $rfq = RfqInquiry::findOrFail($id);

        return view('pages.rfq-success', compact('rfq'));
    }

    public function catalogDownload()
    {
        $products = ManufacturingProduct::orderBy('sort_order')->get();
        $machines = Machine::orderBy('sort_order')->get();

        return view('pages.catalog-download', compact('products', 'machines'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function storeContact(Request $request)
    {
        if ($request->filled('industrial_hp_check')) {
            return redirect()->route('contact')->with('success', 'Pesan Anda telah kami terima.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'company' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'whatsapp' => ['required', 'string', 'min:8', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact')->with('success', 'Pesan teknis Anda telah tercatat. Tim Sales Engineering kami akan menghubungi Anda maksimal dalam 1×4 jam kerja.');
    }

    public function sitemap()
    {
        $products = ManufacturingProduct::orderBy('sort_order')->get();

        return response()
            ->view('pages.sitemap', compact('products'))
            ->header('Content-Type', 'application/xml');
    }

    public function robots()
    {
        $content = "User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml') . "\n";

        return response($content, 200)->header('Content-Type', 'text/plain');
    }
}
