<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorturl extends Model
{
    protected $table = 'shorturl';
    protected $fillable = [
        'url', 'shorten_url'
    ];
}
