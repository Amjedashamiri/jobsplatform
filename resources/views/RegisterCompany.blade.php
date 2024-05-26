@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right ">
                <li class="breadcrumb-item  text-decoration-underline "><a href="{{ route('home') }}"> Home</a></li>
                <li class="breadcrumb-item active">Register Company</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="card ml-4">
              <!-- /.card-header -->
              <div class="card-body">  <section id="contact" class="contact">
                <div class="container">
          
                  <div class="section-title">
                    <h2><span></h2>
                    <p></p>
                  </div>
                </div>
                <div class="container mt-3">
                  <div class="info-wrap">
                    <div class="section-title">
                        <h2><span>Register Company</h2>
                        <p></p>
                      </div>
                  </div>
                <form action="{{route('company.store')}}" method="post"  enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label> Company Name </label>
                      <input type="text" name="company_name" class="form-control" id="company_name" placeholder="please Enter your company name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Email  </label>
                      <input type="email" class="form-control" name="company_email" id="company_email" placeholder="please Enter your Company Email" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Phone </label>
                      <input type="number" class="form-control" name="company_phone" id="company_phone" placeholder="please Enter your Company Phone" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Type</label>
                  <select class="form-select" name="company_type" >
                    <option value="Technology">Technology</option>
                    <option value="Finance">Finance</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Retail">Retail</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Education">Education</option>
                    <option value="Hospitality">Hospitality</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Consulting">Consulting</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Media">Media</option>
                    <option value="Non-profit">Non-profit</option>
                  </select>
               </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Industry  </label>
                      <input type="text" class="form-control" name="company_industry" id="company_industry" placeholder="please Enter your Company Industry" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Location  </label>
                      <input type="text" class="form-control" name="company_location" id="company_location" placeholder="please Enter your Company Location" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label>Company Website </label>
                      <input type="text" class="form-control" name="company_website" id="email" placeholder="please Enter your Company Website" required>
                    </div>
                     <!-- Company Logo -->
                     <div class="col-md-12 form-group mt-3 mt-md-0">
                      <label for="company_commerical">Company Commerical Register</label>
                      <div class="col-md-12">
                          <input id="company_commerical" type="file" class="form-control @error('company_commerical') is-invalid @enderror" name="company_commerical">
                          @error('company_commerical')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  
                  </div>
                    <div class="col-md-12 form-group mt-3 mt-md-0">
                      <label>Company Description </label>
                      <textarea class="form-control" name="company_description" rows="5" placeholder="please Enter your Company Description" required></textarea>
                    </div>
                   
                    <div class="text-center"><button type="submit">Register</button></div>
                  </form>
          
                </div>
              </section></div>
              <!-- ./card-body -->

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-2">
          </div> </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
