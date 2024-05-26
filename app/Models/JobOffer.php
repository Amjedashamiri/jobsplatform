<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $fillable = [
        'Offered_Salary', 'Date', 'Applicant_Id',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'Applicant_Id');
    }
}

