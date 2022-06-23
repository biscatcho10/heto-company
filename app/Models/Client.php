<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    public function getImageAttribute($value)
    {
        return asset($value);
    }
    
}
