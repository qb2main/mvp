<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoProperty extends Model
{
    protected $table = 'seo_properties';
    protected $fillable = [
        'schema_id',
        'title',
        'keywords',
        'description',
    ];

    public function schema() {
        return $this->belongsTo(Schema::class, 'schema_id');
    }
}
