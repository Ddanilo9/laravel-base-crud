@extends('layouts.app')

@section('content')
    
<table>
<thead>
    <tr>
        <th>Id</th>
        <th>title</th>
        <th>thumb</th>
        <th>price</th>
        <th>series</th>
        <th>sale date</th>
        <th>type</th>
    </tr>
</thead>
<tbody>
    @foreach ($comics as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>
                <a href="{{route('comics.show', $c)}}">
                    {{$c->title}}</td>
                </a>
            <td>{{$c->description}}</td>
            <td>{{$c->thumb}}</td>
            <td>{{$c->price}}</td>
            <td>{{$c->series}}</td>
            <td>{{$c->type}}</td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection