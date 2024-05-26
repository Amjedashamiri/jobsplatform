<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Session; 
class CompanyController extends Controller
{
    public function index()
{
    $companies = Company::all(); // You can also use pagination if you expect a lot of records
    return view('companies', compact('companies'));
}
    public function go()
    { 
        if (auth()->check() && auth()->user()) {return view('RegisterCompany');}
        Session::flash('error', 'You must create an account and register as a company type first.');
  
 }
     
    
    public function show()
    { 
        return view('RegisterCompany');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'company_industry' => 'required|string|max:255',
            'company_location' => 'required|string|max:255',
            'company_website' => 'required|string|max:255',
            'company_email' => 'required|email|unique:companies',
            'company_phone' => 'required|string|max:255',
            'company_description' => 'required|string',
            'company_commerical' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);
        
        // Create a new instance of the Company model and set the attributes
        try{
        $company = new Company;
        $company->user_id = auth()->user()->id;
        $company->Company_Name = $validatedData['company_name'];
        $company->Company_Type = $validatedData['company_type'];
        $company->Company_Industry = $validatedData['company_industry'];
        $company->Company_Location = $validatedData['company_location'];
        $company->Company_Website = $validatedData['company_website'];
        $company->Company_Email = $validatedData['company_email'];
        $company->Company_Phone = $validatedData['company_phone'];
        $company->Company_Description = $validatedData['company_description'];
        if ($request->hasFile('company_commerical')) {
            $comPath = $request->file('company_commerical')->store('public/commerical_registers');
            $validatedData['company_commerical'] =  $comPath;
        }
        // Save the company details to the database
        $company->save();
      return  redirect()->route('companies.index')->with(['success' => 'The data has been added successfully']);;
    } catch (\Exception $ex) {
        return redirect()->back()
        ->with(['error' => 'Sorry, something went wrong'. $ex->getMessage()])
                ->withInput();
        }

        // Redirect to a success page or perform any additional actions
    }

    

}

