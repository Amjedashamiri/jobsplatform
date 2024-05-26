@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-decoration-underline"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">CV Improvement Requests</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div><!-- Left empty column for spacing -->
                <div class="col-md-10">
                    <div class="card ml-8">
                        <div class="card-body">
                            <div class="container">
                                <div class="section-title">
                                    <h2>Review and Download CVs</h2>
                                    <p>Below is the list of candidates seeking CV improvement.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <thead class="bg-success text-white text-center">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Submitted</th>
                                                    <th>CV</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                @foreach($cvRequests as $cvRequest)
                                                    <tr>
                                                        <td>{{ $cvRequest->name }}</td>
                                                        <td>{{ $cvRequest->email }}</td>
                                                        <td><span class="badge badge-info">{{ $cvRequest->created_at->diffForHumans() }}</span></td>
                                                        <td>
                                                            @if ($cvRequest->resume_file_path)
                                                                <a href="{{ Storage::url($cvRequest->resume_file_path) }}" style="color: green; text-decoration: underline;">Download CV</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ./card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col -->
                <div class="col-md-1"></div><!-- Right empty column for spacing -->
            </div><!-- /.row -->
        </div>
    </section>
</div>
@endsection
