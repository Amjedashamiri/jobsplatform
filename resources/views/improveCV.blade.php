@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Improve CV</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left empty column for spacing -->
                <div class="col-md-3"></div>
                <!-- Main form column -->
                <div class="col-md-6">
                    <div class="card ml-4">
                        <div class="card-body">
                            <div class="container">
                                <div class="section-title">
                                    <h2>Let's Enhance Your Resume</h2>
                                    <p>Fill in the details below to get started.</p>
                                </div>
                                <form action="{{ route('cv.improve') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data" onsubmit="alert('Your request has been submitted successfully. The improved CV will come to you via email.');">
                                  @csrf
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="experiences">Experiences</label>
                                        <textarea class="form-control" name="experiences" id="experiences" rows="3" placeholder="Describe your experiences" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="skills">Skills</label>
                                        <textarea class="form-control" name="skills" id="skills" rows="3" placeholder="List your skills" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="resume_file">Upload CV</label>
                                        <input id="resume_file" type="file" class="form-control" name="resume_file" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="improvement-button">Submit for Improvement</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right empty column for spacing -->
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
</div>
@endsection
