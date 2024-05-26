<?php
namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\JobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobRequestController extends Controller
{
    public function showRequestForm()
    {
        $jobs = Job::all(); // Assuming you have a Job model to get job listings
        return view('JobRequest', compact('jobs'));
    }
    public function submit(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'desired_job' => 'required|exists:jobs,id',
        'employment_type' => 'required|string|max:255',
        'experiences' => 'required|string',
        'skills' => 'required|string',
        'Resume_File' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('Resume_File')) {
        $resumePath = $request->file('Resume_File')->store('public/resumes');
        $validatedData['resume_file'] = $resumePath;
    }

    // Ensure 'desired_job_id' is set in the validated data
    $validatedData['desired_job_id'] = $validatedData['desired_job'];
    unset($validatedData['desired_job']); // Remove 'desired_job' as it's not a column in the table

    // Create a new job request record
    $jobRequest = JobRequest::create($validatedData);

    // Redirect with success message
    return redirect()->route('home')->with('success', 'Job request submitted successfully.');
}
public function index()
    {
        $jobRequests = JobRequest::all();
        return view('requests', compact('jobRequests'));
    }
    public function showCv($id)
    {
        $jobRequest = JobRequest::findOrFail($id);

        if ($jobRequest->resume_file) {
            $path = Storage::path($jobRequest->resume_file);
            return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($path) . '"'
            ]);
        }

        abort(404, 'CV not found.');
    }
}
    

