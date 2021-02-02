@extends('layouts.app')

@section('content')
<div>   
    <h1 style="text-align: center;">Edit Todo List</h1>
        
        <a class="btn btn-primary" href="{{ route('dashboard') }}">Go to Dashboard</a>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('update', $post->id) }}" Method="POST">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') border border-danger @enderror" 
                         value="{{$post->name}}" name="name" placeholder="Name">
                         @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('description') border border-danger @enderror"  
                        value="{{$post->description}}" name="description" placeholder="Description">
                        @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            
        </div>

</div>
@endsection