@extends('layouts.app1')
@section('content')
@if (session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-message">
        {{ session('alert') }}
        <button type="button" class="btn-close" onclick="closeAlert()" aria-label="Close"></button>
    </div>
    
    <script>
        function closeAlert() {
            var alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                alertMessage.style.display = 'none';
            }
        }

        // Wait for the DOM to be loaded before running the script
        document.addEventListener('DOMContentLoaded', function () {
            // Set a timeout to hide the alert after 30 seconds (30000 milliseconds)
            setTimeout(function() {
                closeAlert();
            }, 10000);
        });
    </script>
@endif

<div class="container" id="container">
   
    <div class="form-container sign-up">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Create Account</h2>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
            @error('name')
              <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
                  </span>
                    @enderror
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
             <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
               </span>
                @enderror
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required autocomplete="new-password" placeholder=" Confirm Password">
                                <select id="user_type" name="user_type" class="form-select" aria-label="Default select example" >
                                    <option value=""> Select The Type</option>
                                    <option  @if(old('type')==1) selected="selected"  @endif value="1" >Company</option>
                                    <option @if(old('type')==2) selected="selected"  @endif value="2">Applicant</option>
                                    <option @if(old('type')==3) selected="selected"  @endif value="3">manpower consultant </option>
                                   
                                   
                                  </select> 
                                  @error('user_type')
                                  <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror                         
                        
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email password</span>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>WAZIFATI HUNA</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>WAZIFATI HUNA</h1>
                <p>Register now and discover perfect job opportunities and hire exceptional employees through our innovative job finder website, designed for both job seekers and companies!
                </p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>
@endsection
  