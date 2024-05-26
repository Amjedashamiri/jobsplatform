<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManpowerConsultant extends Model
{
    protected $fillable = [
        'user_id', 'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'Consultant_Id');
    }
}

