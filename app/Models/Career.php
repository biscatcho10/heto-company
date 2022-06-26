<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'job_id',
        'phone',
        'upload_id'
    ];
    public static $cast = [
        'email' => 'required',
    ];

    // get created_at
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
