<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPortfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client_industry',
        'component_type',
        'material_used',
        'batch_volume',
        'tolerance_achieved',
        'completion_year',
        'challenge_summary',
        'solution_summary',
        'image_url',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
