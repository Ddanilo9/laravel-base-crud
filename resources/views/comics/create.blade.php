@extends('layouts.app')

@section('content')
    <h1>aggiungi un nuovo comic!</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <p>
            <label for="">Title</label>
            <input type="text" name="title" id="title" placeholder="nome comic"> 
        </p>
        <p>
            <label for="">Description</label>
            <input type="text" name="description" id="description" placeholder="descrizione comic"> 
        </p>
        <p>
            <label for="">Thumb</label>
            <input type="url" name="thumb" id="thumb" placeholder="locandina comic"> 
        </p>
        <p>
            <label for="">Price</label>
            <input type="number" name="price" id="price" placeholder="prezzo"> 
        </p>
        <p>
            <label for="">Series</label>
            <input type="text" name="series" id="series" placeholder="series"> 
        </p>
        <p>
            <label for="">Sale date</label>
            <input type="date" name="sale_date" id="sale-date"> 
        </p>
        <p>
            <label for="">Type</label>
            <input type="text" type="type" id="type"> 
        </p>
        <p>
            <input type="submit" value="salva">
        </p>
    </form>
@endsection