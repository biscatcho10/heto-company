<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'image',
        'file',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    public function getImageAttribute($value)
    {
        return asset('heto/products' . $value);
    }

    public function getFileAttribute($value)
    {
        return asset('heto/products' . $value);
    }


}
