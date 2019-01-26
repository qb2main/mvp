<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'header';
    protected $fillable = [
        'logo_text',
        'text',
        'byline_text',
        'text_color',
        'text_size',
        'byline_text_color',
        'byline_text_size',
        'logo_text_color',
        'logo_text_size',
        'menu_text_color',
        'menu_text_size',
    ];
}
