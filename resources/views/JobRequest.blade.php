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
                <li class="breadcrumb-item active">Request Job</li>
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
                        <h2><span>Job Request</h2>
                        <p></p>
                      </div>
                  </div>
                  <form action="{{ route('job-request.submit') }}" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
                    @csrf
                  
               <div class="row">
                    <div class="col-md-6 form-group">
                      <label> Name  </label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="please Enter your Full name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label> Email  </label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="please Enter your  Email" required>
                    </div>
                    
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label>Desired Job</label>
                        <select name="desired_job" class="form-select" required>
                            <option value="">Choose the desired job</option>
                            @foreach($jobs as $job)
                                <option value="{{ $job->id }}">{{ $job->Job_Title }}</option>
                            @endforeach
                        </select>
                    </div>
              
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label>Type Of Employment</label>
                        <select name="employment_type" class="form-select" required>
                        <option>Full Time</option>
                        <option>Part Time</option>
                    </select>
                 </div>
                 <div class="form-group mt-3">
                  <label> Experiences  </label>
                  <textarea class="form-control" name="experiences" rows="3" placeholder="Enter your Experiences" required></textarea>
                </div>
                <div class="form-group mt-3">
                  <label> Skills </label>
                  <textarea class="form-control" name="skills" rows="3" placeholder="Enter your Skills " required></textarea>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <label for="Resume_File"> Upload CV </label>
                  <div class="col-md-12 ">
                      <input id="Resume_File" type="file" class="form-control @error('Resume_File') is-invalid @enderror" name="Resume_File" required>
                      @error('Resume_File')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
                    <div class="text-center"><button type="submit">Send Request</button></div>
                  </form>
                </div>
              </section></div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-2">
          </div> 
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
