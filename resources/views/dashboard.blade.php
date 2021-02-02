@extends('layouts.app')

@section('content')
   @if(session('msg'))
        <div class="text-center p-3 mb-2 bg-success text-white">
            {{ session('msg') }}
        </div>
    @endif
   <div class="container">
      <h1 style="text-align: center;"> Todo List</h1>
      <div class="page-header clearfix">
         <a class="btn btn-primary " href="{{ route('create') }}">Create Todo</a>
      </div>
      @if($posts->count())
         
            <div class="row">
               <div class="col-md">
                  <table class="table table-bordered table-striped table-hover table-responsive">
                     <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($posts as $post)
                        <tr>
                           <th scope="row">{{ $post->id}}</th>
                           <td>{{ $post->name}}</td>
                           <td>{{ $post->description}}</td>
                           <td><a class="btn btn-secondary" href="{{ route('edit', $post->id) }}">Edit</a></td>
                           <td>
                              <form action="{{ route('delete', $post->id) }}" method="post">
                                 @csrf
                                 <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                           </td>
                        </tr>
                     @endforeach
                  </table>
               </div>
            </div>
      @else
         <p>There are no Todos</p>
      @endif
      
   </div>

</div>
        
    </div>
   </div>
   

@endsection