@extends('layouts.app')

@section('content')
<img src="{{$comic->thumb}}" alt="">
<h1>{{$comic->title}}</h1>
<h4>serie: <span>{{$comic->series}}</span></h4>
<a href="{{route('comics.edit', $comic)}}">edit</a>

<form action="{{route('comics.destroy', $comic)}}" method="POST">
    @csrf
    @method('DELETE')

    <input type="submit" value="Delete">
</form>
@endsection