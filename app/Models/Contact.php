<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'message'];
    public static $cast = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];


    // get created at in diffrent format
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
