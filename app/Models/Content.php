<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = [
        'schema_id',
        'wrapper_title',
        'wrapper_title_size',
        'wrapper_title_color',
        'wrapper_text',
        'wrapper_text_size',
        'wrapper_text_color',
        'wrapper_byline_text',
        'wrapper_byline_text_size',
        'wrapper_byline_text_color',
        'wrapper_background_color',
        'welcome_title',
        'welcome_title_size',
        'welcome_title_color',
        'welcome_text',
        'welcome_text_size',
        'welcome_text_color',
        'welcome_byline_text',
        'welcome_byline_text_size',
        'welcome_byline_text_color',
        'welcome_background_color',
        'contact_title',
        'contact_title_size',
        'contact_title_color',
        'contact_text',
        'contact_text_size',
        'contact_text_color',
        'contact_byline_text',
        'contact_byline_text_size',
        'contact_byline_text_color',
        'contact_background_color'
    ];

    public function schema() {
        return $this->belongsTo(Schema::class, 'schema_id');
    }
}
