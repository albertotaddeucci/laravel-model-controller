
@extends('layouts/app')


@section('content')

<div class="container">

    
    <div class="row gap-4 justify-content-center pt-5">
    
        @foreach ($movies as $movie)
    
            <div class="card my_card_color my_shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center my_title ">{{$movie->original_title}}</h5>
                    <div class="text-center pt-2">{{$movie->stars}} 
                    </div>
                    <h6 class="text-center pt-2">{{$movie->nationality}}</h6>
                    
                    <div class="pt-3 text-end">
                        <span class="small" >Vote: {{$movie->vote}}/10</span>


                    </div>
                </div>
            </div>
        
        @endforeach
        
    </div>

</div>



@endsection