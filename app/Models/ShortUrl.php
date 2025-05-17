<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    // Specify which attributes can be mass-assigned
    protected $fillable = ['original_url', 'short_code'];
}
