@extends('layouts.app')

@section('content')
    
<section>
    <div style="margin: 50px 0px; text-align:center">
        <a href="{{route('comics.create')}}">AGGIUNGI COMIC</a>
    </div>
</section>
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
            <td>{{$c->sale_date}}</td>
            <td>{{$c->type}}</td>
            <td><a href="{{route('comics.edit', $c)}}">edit</a></td>
            <td>
                <form action="{{route('comics.destroy', $c)}}" method="POST">
                    @csrf
                    @method('DELETE')
                
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection