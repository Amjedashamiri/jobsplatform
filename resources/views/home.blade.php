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
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <!-- Main content -->
  <div class="container-fluid">
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card border-5">
            <!-- /.card-header -->
            <div class="card-body p-0 ">
              <div class="d-md-flex">   
                <section id="hero">
                  <div class="hero-container ">
                    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                      <div class="carousel-inner" role="listbox">
                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(assets/img/slide-9.avif);">
                          <div class="carousel-container">
                            <div class="carousel-content">
                              <h2 class="animate__animated animate__fadeInDown"><span>Wazifati</span> Huna</h2>
                              <p class="animate__animated animate__fadeInUp"><span>Find your dream job in the modern world</span><br> <br> 
                                Wazifati Huna is your ultimate job search platform. It connects you with thousands of employers, helps you showcase your skills, and gives you feedback and guidance. With Wazifati Huna, you can take control of your career and explore the possibilities. </p>
                              <div>
                                <a href="{{ route('JobRequest') }}" class="btn-menu animate__animated animate__fadeInUp scrollto">Request Job</a>
                                <a href="{{ route('company1') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Register Company </a>
                                <a href="{{ route('JobReview') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Jobs </a>
                                <a href="{{ route('showimprove') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Improve CV </a>
                               
                              </div>
                            </div>
                          </div>
                        </div>   </div>
                  </div>
                </section>
                <!-- /.card-pane-right -->
              </div><!-- /.d-md-flex -->
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-4"> 
          <div class="card h-90 ">
            <div class="card-header ">
              <h3 class="card-title text-bold float-none">Our Objectives</h3>
            </div>
            <!-- /.card-header -->
            <div class="col-12 col-sm-8 col-md-12  ">
              <div class="info-box mb-4 mt-3 p-3  elevation-2">
                <span class="info-box-icon bg-white elevation-2  "><i class="bi bi-check text-success fs-1 "></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-wrap text-bold  text-success  fs-6">We help job seekers improve their CVs with personalized feedback and suggestions.</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box mb-4 mt-3 p-3 elevation-2">
              <span class="info-box-icon bg-white elevation-2  "><i class="bi bi-check text-success fs-1 "></i></span>
              <div class="info-box-content">
                <span class="info-box-text text-wrap text-bold  text-success  fs-6">We connect beginners with short-term jobs in Saudi Arabia, such as events during the Riyadh Season.</span>
              </div>
              <!-- /.info-box-content -->
          </div>
          <div class="info-box mb-4 p-3 elevation-2">
            <span class="info-box-icon bg-white elevation-2  "><i class="bi bi-check text-success fs-1 "></i></span>

            <div class="info-box-content">
              <span class="info-box-text text-wrap  text-bold text-success  fs-6">We evaluate and add missing qualifications to make CVs more appealing to employers.</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <div class="info-box mb-4 p-3 elevation-2">
          <span class="info-box-icon bg-white elevation-2  "><i class="bi bi-check text-success fs-1 "></i></span>

          <div class="info-box-content">
            <span class="info-box-text text-wrap  text-bold text-success  fs-6">We offer training programs and courses to job seekers who need to learn new skills or gain more experience.</span>
          </div>
          <!-- /.info-box-content -->
      </div>
      <div class="info-box mb-6 p-3 elevation-2">
        <span class="info-box-icon bg-white elevation-2  "><i class="bi bi-check text-success fs-1 "></i></span>

        <div class="info-box-content ">
          <span class="info-box-text text-wrap text-bold text-success  fs-6  small">We communicate with companies and match them with suitable candidates from our pool of job seekers.</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <div class="card-footer clearfix mb-2 pt-3 text-center text-white ">
       <a href="{{ route('contact') }}" class="btn-menu animate__animated animate__fadeInUp scrollto text-decoration-underline"><h7>Contact US</h7></a>
    </div>
              <!-- /.info-box -->
            </div>
              <!-- /.info-box -->
            </div>
      </div>
        <!-- /.col -->
      </div>
        <!-- /.row -->
        <!-- contact -->
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content --> 
</div>
@endsection
