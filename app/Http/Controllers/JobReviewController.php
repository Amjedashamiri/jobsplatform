<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
class JobReviewController extends Controller
{
  
public function JobReview()
{
    
        $jobs = Job::with('company')->get(); 
        return view('JobReview', compact('jobs'));
    }
}
   

