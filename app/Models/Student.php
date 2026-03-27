<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Ye line CRUD ke liye bohot zaroori hai
    protected $fillable = ['name', 'email', 'phone'];
}