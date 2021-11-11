@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-4">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            </div>
            <div class="col-8">
                <div class="card-body">
                    
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                    <p class="card-text">{{$comic->artists}}</p>
                    <p class="card-text">{{$comic->writers}}</p>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text text-right text-muted">{{$comic->sale_date}}</p>

                </div>
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 text-right">
            <form action="{{ route('admins.comics.edit', ['comic'=>$comic->id]) }}" method="GET">
                <button class="btn btn-secondary" type="submit" >Edit Comic</button>
            </form>
            {{-- <form action="POST"> 
                @csfr               
                <button class="btn btn-secondary" type="submit" >Delete Comic</button>
            </form> --}}
        </div>
    </div>

</div>
@endsection