<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    protected $table = 'schemas';
    protected $fillable = [
        'name',
        'active',
    ];

    public function header() {
        return $this->hasOne(Header::class, 'schema_id');
    }

    public function content() {
        return $this->hasOne(Content::class, 'schema_id');
    }

    public function footer() {
        return $this->hasOne(Footer::class, 'schema_id');
    }

    public function seoProperty() {
        return $this->hasOne(SeoProperty::class, 'schema_id');
    }

}
