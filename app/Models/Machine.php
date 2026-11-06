<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'name',
        'code',
        'category',
        'brand_origin',
        'work_envelope',
        'positioning_accuracy',
        'spindle_speed',
        'quantity_units',
        'status_note',
        'image_url',
        'sort_order',
    ];

    protected $casts = [
        'quantity_units' => 'integer',
        'sort_order' => 'integer',
    ];
}
