<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Card</title>
</head>
<body>
    <h1>Superhero Card</h1>

    <p>Name: {{ $superhero->name }}</p>
        
        <p>Real Name: {{ $superhero->real_name }}</p>
        
        <p>Gender: {{ $superhero->gender_id }},  {{ $superhero->gender->name }}</p>

        <p>Universe: {{ $superhero->universe_id }},  {{ $superhero->universe->name}}</p>

        <p>Picture: {{ $superhero->picture }}</p>

                 <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'SuperHero Details')

@section('content')
    <h1>SuperHero Details</h1>

    <p><strong>ID:</strong> {{ $superhero->id }}</p>
    <p><strong>Name:</strong> {{ $superhero->name }}</p>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender->name ?? 'N/A' }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->name ?? 'N/A' }}</p>
    <p><strong>Picture:</strong></p>
    @if(filter_var($superhero->picture, FILTER_VALIDATE_URL))
        <img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="200">
    @else
        {{ $superhero->picture }}
    @endif

    <a href="{{ route('superheroes.index') }}">Back to List</a>
@endsection