
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
                <li class="breadcrumb-item active">Messages</li>
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
                        <h2><span>  Contact Messages</h2>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Received At</th>
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
                                  @foreach($messages as $message)
                                  <tr>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
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
