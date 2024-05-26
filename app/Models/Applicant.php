<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'user_id', 'Employment_type', 'Consultant_Id', 'Availability', 'Desired_job',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function consultant()
    {
        return $this->belongsTo(ManpowerConsultant::class, 'Consultant_Id');
    }
}

