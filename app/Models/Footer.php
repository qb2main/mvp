<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    protected $fillable = [
        'text',
        'text_size',
        'text_color',
        'background_color'
    ];

}
