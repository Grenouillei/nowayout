<?php

namespace App\Models;

use App\Models\Traits\UrlAliasTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,UrlAliasTrait,SoftDeletes;

    protected $fillable  = [
        'title',
        'text',
    ];
}
