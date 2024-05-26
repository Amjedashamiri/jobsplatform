<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $table = 'cvs'; // Correct table name as per your database

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'experiences',
        'skills',
        'resume_file_path',
    ];

    // Rest of your model...
}
