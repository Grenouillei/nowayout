<?php

namespace App\Models;

use App\Models\Traits\UrlAliasTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory,UrlAliasTrait;

    protected $fillable  = [
        'title',
        'text',
    ];
}
