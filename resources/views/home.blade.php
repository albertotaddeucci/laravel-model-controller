
@extends('layouts/app')


@section('content')

<div class="container">
    <div class="row gap-2 justify-content-center ">
    
        @foreach ($movies as $movie)
    
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6>{{$movie->original_title}}</h6>
                    <small>{{$movie->vote}}</small>
                </div>
            </div>
        
        @endforeach
        
    </div>

</div>



@endsection