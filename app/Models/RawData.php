<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawData extends Model
{
    protected $table = 'rawdata';
    protected $guarded = [];
    protected $casts = [
        'data' => 'array'
    ];
}
