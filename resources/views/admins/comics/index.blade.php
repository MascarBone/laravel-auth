@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3">
        <a href="{{route('admins.comics.create')}}" class="btn btn-secondary">Add New Comic</a>
    </div>

    <div class="row">

        @forelse ($comics as $comic)
            <div class="card col-4">
                <a href="{{ route('admins.comics.show', ['comic' => $comic->id]) }}">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->type}}</p>
                    </div>
                </a>
                
            </div>
        @empty
            <h3>No comics available</h3>
            
        @endforelse
        
    </div>
</div>
@endsection