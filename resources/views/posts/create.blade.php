@extends('layouts.app')

@section('content')

<div class="container">

    @if ($message=Session::get('success'))
    <div class="alert alert-primary" role="alert">
    {{$message}}
    </div>
    @endif


<div class="container" >
    <div class="jumbotron">
        <h1 class="">Create Post</h1>

      <a class="btn btn-primary" href="{{route('post.index')}}"> All post</a>

      </div>


<div>
    <form  action="{{ route('post.store') }}"  method="POST" >
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text"  name="title" class="form-control" >
        </div>
  

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea name="description" class="form-control" ></textarea>
        </div>

      

            <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
</div>



</div>





@endsection

