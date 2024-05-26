<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class JobRequest extends Model
{
    protected $fillable = [
        'name', 'email', 'desired_job_id', 'employment_type', 'experiences', 'skills', 'resume_file'
    ];
    public function job()
{
    return $this->belongsTo(Job::class, 'desired_job_id');
}
}
