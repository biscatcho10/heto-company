<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'subject', 'message'];
    public static $cast = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];
}
