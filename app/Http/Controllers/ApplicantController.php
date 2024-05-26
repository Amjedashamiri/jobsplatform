<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ManpowerConsultant;
use App\Models\Applicant;
class ApplicantController extends Controller
{
    public function show()
    {
        $consultants = ManpowerConsultant::all(); // Retrieve all consultants from the database
        return view('RegisterApplicant', compact('consultants'));
    }
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'employment_type' => 'required|string',
        'availability' => 'required|string',
        'desired_job' => 'required|string',
        'consultant_id' => 'nullable|exists:manpower_consultants,id',
    ]);

    Applicant::create([
        'user_id' => auth()->id(),
        'employment_type' => $validatedData['employment_type'],
        'availability' => $validatedData['availability'],
        'desired_job' => $validatedData['desired_job'],
        'consultant_id' => $validatedData['consultant_id'],
    ]);

    return redirect()->route('home')->with('success', 'Registration completed successfully.');
}

}
