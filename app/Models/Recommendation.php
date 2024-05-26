<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $fillable = [
        'Course_Name', 'Course_Description', 'Job_Id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'Job_Id');
    }
}
