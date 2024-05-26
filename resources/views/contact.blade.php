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
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-decoration-underline"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="card ml-4">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <section id="contact" class="contact">
                                <div class="container">
                                    <div class="section-title">
                                        <h2>Contact Us</h2>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <div class="info-wrap">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 info">
                                                <i class="bi bi-geo-alt"></i>
                                                <h4>Location:</h4>
                                                <p>Riyadh</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                                                <i class="bi bi-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>huna@gmail.com</p>
                                                <p>contact@gmail.com</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                                                <i class="bi bi-phone"></i>
                                                <h4>Call:</h4>
                                                <p>+966456644333<br>+9660011244333</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
