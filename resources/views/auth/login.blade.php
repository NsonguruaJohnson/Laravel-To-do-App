@extends('layouts.app')

@section('content')
<div class="container col-6">
    <h1 class ="text-center">Login</h1>
    @if(session('msg'))
        <div class="text-center p-3 mb-2 bg-danger text-white">
            {{ session('msg') }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control  @error('username') border border-danger @enderror" id="username" name="username" placeholder="Your username"
             value="{{ old('username') }}">
            @error('username')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input type="password" class="form-control  @error('password') border border-danger @enderror" id="password" name="password"  placeholder="Your Password" 
            value="">
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>   
        </div>
    </form>
    

@endsection

