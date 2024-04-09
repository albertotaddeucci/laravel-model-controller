
@extends('layouts/app')


@section('content')

<div class="container">

    <h1 class="py-3 text-center">My favourite films</h1>
    <hr>

    <div class="row gap-2 justify-content-center pt-5">
    
        @foreach ($movies as $movie)
    
            <div class="card my_card_color border border-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center my_title ">{{$movie->original_title}}</h5>
                    <div class="pt-3 text-end">
                        <h6>{{$movie->nationality}}</h6>
                        <small>{{$movie->vote}}/10</small>

                    </div>
                </div>
            </div>
        
        @endforeach
        
    </div>

</div>



@endsection