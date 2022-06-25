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
        'url',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];


    // get created_at attribute
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    // get image attribute
    public function getImageAttribute($value)
    {
        return asset('heto/clients/' . $value);
    }

}
