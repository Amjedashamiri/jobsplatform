<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;
class CVController extends Controller
{
    public function showimprove()
    {if (auth()->check()) {
        if (auth()->check() && auth()->user()) {return view('improveCV');} }
        Session::flash('error', 'You must log in first.');
  
        // Show the Improve CV pag  
      
    }
    public function improve(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'experiences' => 'required',
        'skills' => 'required',
        'resume_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Store file
    $filePath = $request->file('resume_file')->store('resumes');

    // Create CV entry
    CV::create([
        'user_id' => auth()->id(),
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'experiences' => $validatedData['experiences'],
        'skills' => $validatedData['skills'],
        'resume_file_path' => $filePath,
    ]);

    return back()->with('success', 'Your request has been submitted successfully. The improved CV will come to you via email.');
}
public function listCVRequests()
{
    $cvRequests = CV::all();
    return view('showimprove', compact('cvRequests'));
}
}
