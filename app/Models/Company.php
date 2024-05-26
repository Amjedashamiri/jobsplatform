<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id','Company_Email','Company_Name', 'Company_Type', 'Company_Phone', 'Company_Industry', 'Company_Location', 'Company_Website', 'Company_Commercial', 'Company_Description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

