<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'title2',
        'description2',
        'name',
        'date',
        'case_study',
        'location',
        'gallery',
        'thumbnail_image',
        'category_id',
        'project_type_id',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
    public static $cast = [
        'title' => 'required',
        'description' => 'required',
        'location' => 'required',
        'gallery' => 'required|array',
        'thumbnail_image' => 'required',
        'category_id' => 'required',
        'project_type_id' => 'required',
    ];


    public function project_type()
    {
        return $this->belongsTo(ProjectType::class);
    }


    // get date attribute
    public function getDateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }


    // get created_at attribute
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

}
