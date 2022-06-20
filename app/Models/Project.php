<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','case_study','location','gallery','thumbnail_image','category_id','project_type_id','seo_title','seo_description','seo_keywords'];
    public static $cast = [
        'title' => 'required',
        'description' => 'required',
        'location' => 'required',
        'gallery' => 'required|array',
        'thumbnail_image' => 'required',
        'category_id' => 'required',
        'project_type_id' => 'required',
    ];
}
