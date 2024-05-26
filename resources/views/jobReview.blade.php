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
                <li class="breadcrumb-item active">Jobs</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-md-10">
            <div class="card ml-8">
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
                        <h2><span> Jobs</h2>
                        <p></p>
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-white p-2"></h2>
                            <table class="table table-bordered">
                                <thead class="bg-success text-white text-center">
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Job Email</th>
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>JobType</th>
                                        <th>Salary</th>
                                        <th>Advertisement Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($jobs as $job)
                                <tr>
                                    <td>{{ $job->Job_Title ?? 'N/A' }}</td>
                                    <td>{{ $job->Email ?? 'N/A' }}</td>
                                    <td>{{ $job->company->Company_Name ?? 'N/A' }}</td> 
                                    <td>{{ $job->company->Company_Location ?? 'N/A' }}</td>
                                    <td>{{ $job->JobType ?? 'N/A' }}</td> 
                                    <td>{{ $job->Salary ?? 'N/A' }}</td> 
                                    <td>{{ $job->Adv_Date  }}</td> 
                                    <td>
                                      <a href="{{ route('JobRequest', ['job' => $job]) }}" class="btn btn-success"> Request</a>
                                    </td>
                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
              </section></div>
              <!-- ./card-body -->

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
         </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
