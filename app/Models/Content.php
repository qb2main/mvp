<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    protected $fillable = [
        'wrapper_title',
        'wrapper_text',
        'wrapper_byline_text',
        'welcome_title',
        'welcome_text',
        'welcome_byline_text',
        'contact_title',
        'contact_text',
        'contact_byline_text',
    ];
}
