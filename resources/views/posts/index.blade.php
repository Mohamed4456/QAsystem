@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
          <h1 class="display-4">All posts  </h1>
      <a class="btn btn-primary" href="{{route('post.create')}}"> create post</a>
     
         </div>
    </div>
  </div>

  <div  class="container" >
    
    @if ($message =Session::get('success'))
            <div class="alert alert-danger" role="alert">
      {{$message}}
    </div>
  </div>
    @endif 
    

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User id  </th>
                <th scope="col">title</th>
                <th scope="col">Actions</th>


                
              </tr>
              <tbody>
                @php
                    $i=1;
                @endphp

              @foreach ($post as $item)
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                  

                    <td>
                      <div class="row" >
                      <div class="col-sm"><a class="btn btn-success" href="{{ route('post.show',$item->id) }}"  role="button"> Show</a></div>
                      <div class="col-sm"><a class="btn btn-danger" href="{{ route('post.hdelete',$item->id) }}"  role="button"> Delete</a></div>

                
                        
                    </td>
                  </tr>
              
              @endforeach
                
                
              </tbody>
            </thead>
            
          </table>

         

</div>
       
@endsection