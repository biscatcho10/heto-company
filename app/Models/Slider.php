<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'image', 'seo_title', 'seo_description', 'seo_keywords'];

    public static $cast = [
        'title' => 'required',
        'subtitle' => 'required',
        'image' => 'required',
    ];



    public function getImageAttribute($value)
    {
        return asset('sliders/' . $value);
    }


    // get created_at attribute
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }


}
