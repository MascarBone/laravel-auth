@extends('layouts.app')

@section('content')

<div class="container">
    
    <form action="{{ $comic ? route('admins.comics.update',['comic'=>$comic->id]) : route('admins.comics.store')}}" method="POST">
        <div class="card">
            @csrf
            @isset($comic)
                @method('PATCH')
            @endisset
            <div class="row">
                @isset($comic)
                    <div class="col-4">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    </div>
                @endisset
                <div class="{{$comic ? 'col-8' : 'col-12'}}">
                    <div class="card-body row">
                        <div class="col-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$comic ? $comic->title : ''}}">
                            <div id="title" class="form-text">
                                Title of your Comic
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" id="series" name="series" class="form-control" value="{{$comic ? $comic->series : ''}}">
                            <div id="series" class="form-text">
                                Series of your Comic
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" id="type" name="type" class="form-control" value="{{$comic ? $comic->type : ''}}">
                            <div id="type" class="form-text">
                                Type of your Comic
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="thumb" class="form-label">Thumb</label>
                            <input type="text" id="thumb" name="thumb" class="form-control" value="{{$comic ? $comic->thumb : ''}}">
                            <div id="thumb" class="form-text">
                                Description of your Comic
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control">{{$comic ? $comic->description : ''}}
                            </textarea> 
                            <div id="description" class="form-text">
                                Description of your Comic
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" id="artists" name="artists" class="form-control" value="{{$comic ? $comic->artists : ''}}">
                            <div id="artists" class="form-text">
                                Artists of your Comic
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" id="writers" name="writers" class="form-control" value="{{$comic ? $comic->writers : ''}}">
                            <div id="writers" class="form-text">
                                Writers of your Comic
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" id="price" name="price" class="form-control" value="{{$comic ? $comic->price : ''}}">
                            <div id="price" class="form-text">
                                Price of your Comic
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="sale_date" class="form-label">Release Date</label>
                            <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{$comic ? $comic->sale_date : ''}}">
                            <div id="sale_date" class="form-text">
                                Release Date of your Comic
                            </div>
                        </div>
                        <div class="col-4 align-self-end text-right">
                            <button class="btn btn-primary" type="submit">{{$comic ? "EDIT" : "New Comic"}}</button>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>    
    </form>
</div>
@endsection