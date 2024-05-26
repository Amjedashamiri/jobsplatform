<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'Applicant_Id', 'Job_id', 'Interview_Date', 'Interview_Details', 'Interview_Location', 'Company_Id',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'Applicant_Id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'Job_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'Company_Id');
    }
}

