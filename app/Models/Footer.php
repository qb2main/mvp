<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footers';
    protected $fillable = [
        'schema_id',
        'text',
        'text_size',
        'text_color',
        'background_color'
    ];

}
