@extends('layout')

@section('body')
<style>
    .bin {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        width: 500px;
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 20px;
    }
    .square {
        width: 50px;
        height: 50px;
        background-color: crimson;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form{
        margin-top: 20px;
    }
</style>

@if ($count !== '')
<h1>Now is: {{$count}} Squares</h1>
@endif

<form action="{{route('do-squares')}}" method="post">
    <input type="text" name="count">
    <button type="submit">Create Squares</button>
    @csrf
</form>

<form action="{{route('add-squares')}}" method="post">
    <input type="text" name="count">
    <button type="submit">Add Squares</button>
    @method('PUT')
    @csrf
</form>

<form action="{{route('do-squares')}}" method="post">
     <button type="submit">Reset Squares</button>
     @csrf
</form>

<div class="bin"> 
    {{-- @foreach ($squares as $square){
        <div class="square">{{square}}</div>
        @endforeach
    } --}}

    @forelse ($squares as $square)
        <div class="square">{{$square}}</div>
    @empty
        <h2>No Squares</h2>
    @endforelse
        
    
</div>

@endsection

@section('title', 'Magic Squares')