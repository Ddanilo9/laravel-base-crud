@extends('layouts.app')

@section('content')
    <h1>aggiungi un nuovo comic!</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <p>
            <label for="title">Title</label>
            <input type="text" style="@error('title') border-color:red @enderror" name="title" id="title" value="{{old('title')}}" placeholder="nome comic"> 
        </p>
        <p>
            <label for="">Description</label>
            <input type="text"  name="description" id="description" value="{{old('description')}}" placeholder="descrizione comic"> 
        </p>
        <p>
            <label for="">Thumb</label>
            <input type="url"  name="thumb" id="thumb" value="{{old('thumb')}}" placeholder="locandina comic"> 
        </p>
        <p>
            <label for="">Price</label>
            <input type="number" style="@error('price') border-color:red @enderror" name="price" id="price" value="{{old('price')}}" placeholder="prezzo"> 
        </p>
        <p>
            <label for="">Series</label>
            <input type="text" style="@error('series') border-color:red @enderror" name="series" id="series" value="{{old('series')}}" placeholder="series"> 
        </p>
        <p>
            <label for="">Sale date</label>
            <input type="date" style="@error('sale_date') border-color:red @enderror" name="sale_date" id="sale-date" value="{{old('sale_date')}}"> 
        </p>
        <p>
            <label for="">Type</label>
            <input type="text" style="@error('type') border-color:red @enderror" name="type" value="{{old('type')}}" id="type"> 
        </p>
        <p>
            <input type="submit" value="salva">
        </p>
    </form>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif
@endsection