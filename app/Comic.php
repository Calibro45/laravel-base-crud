<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // aggiungi comic

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
