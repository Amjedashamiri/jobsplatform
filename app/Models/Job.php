<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'Job_Title', 'JobDescription', 'Company_Id', 'Adv_Date', 'Email', 'Job_Link', 'JobType', 'Salary',
    ];

    public function company()
{
    return $this->belongsTo('App\Models\Company', 'Company_Id');
}
public function jobRequests()
{
    return $this->hasMany(JobRequest::class);
}

}
