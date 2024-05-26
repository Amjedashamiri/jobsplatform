<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'Submission_Date', 'Skills', 'Experience', 'Education', 'Applicant_Id',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'Applicant_Id');
    }
}

