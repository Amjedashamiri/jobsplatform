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
                        <h2><span>Complete Your Registration</h2>
                        <p></p>
                      </div>
                  </div>
                            <form action="{{ route('applicant.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="employment_type">Employment Type</label>
                                    <select name="employment_type" id="employment_type" class="form-control" required>
                                        <option value="">Select Employment Type</option>
                                        <option value="full_time">Full Time</option>
                                        <option value="part_time">Part Time</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="availability">Availability</label>
                                    <input type="text" name="availability" id="availability" class="form-control" placeholder="e.g., Immediate, 2 Weeks Notice" required>
                                </div>
                                <div class="form-group">
                                    <label for="desired_job">Desired Job</label>
                                    <input type="text" name="desired_job" id="desired_job" class="form-control" placeholder="Enter the job title you are looking for" required>
                                </div>
                                <div class="form-group">
                                    <label for="consultant_id">Consultant</label>
                                    <select name="consultant_id" id="consultant_id" class="form-control">
                                        <option value="">Select Consultant (Optional)</option>
                                        @foreach($consultants as $consultant)
                                            <option value="{{ $consultant->id }}">{{ $consultant->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Complete Registration</button>
                                </div>
                            </form>
                        < </div>
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
        
