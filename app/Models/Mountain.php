<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Mountain extends Model
{
    use HasFactory;
    use Sushi;

    protected $rows = [
        [
            'name' => 'Matterhorn',
            'height' => '4478'
        ],
        [
            'name' => 'Dufourspitze',
            'height' => '4634'
        ],
        [
            'name' => 'Randen',
            'height' => '930'
        ],
        [
            'name' => 'Rigi',
            'height' => '1798'
        ],
    ];
}
