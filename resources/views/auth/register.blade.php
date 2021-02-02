@extends('layouts.app')

@section('content')

<div class="container col-6">
    <h1 class ="text-center">User Registration</h1>
    <br>
    <form action="{{ route('register') }}" method="post"> 
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control  @error('name') border border-danger @enderror" id="name" name="name" placeholder="Your name" 
                value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control  @error('email') border border-danger @enderror" id="email" name="email"  placeholder="Your email" 
                value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control  @error('username') border border-danger @enderror" id="username" name="username"  placeholder="Your username" 
                value="{{ old('username') }}">
                @error('username')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') border border-danger @enderror" id="password" name="password">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation"> Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">I accept the <a href="">terms of use</a> & <a href="">privacy policy</a></label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Register Now</button>
            </div>       
        </fieldset>
    </form>
</div>

    
<div>  
</div> 
@endsection