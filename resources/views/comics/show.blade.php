@extends('layouts.app')

@section('content')
<img src="{{$comic->thumb}}" alt="">
<h1>{{$comic->title}}</h1>
<h4>serie: <span>{{$comic->series}}</span></h4>

<form action="{{route}}">


</form>
@endsection