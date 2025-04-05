<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit superhero</title>
</head>
<body>
    <h1>Edit a Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('patch')
        
        <label for="gender">Gender</label>
        <select name="gender_id" id="gender">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" 
                    @if ($gender->id == $superhero->gender_id)
                        selected
                    @endif    
                >{{ $gender->name }}</option>
            @endforeach
        </select>

        <label for="universe">Universe</label>
        <select name="universe_id" id="universe">
            @foreach($universes as $universe) 
                <option value="{{ $universe->id }}" 
                    @if ($universe->id == $superhero->universe_id)
                        selected
                    @endif    
                >{{ $universe->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="real_name">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}">

        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $superhero->name }}">

        <br><br>

        <label for="picture">Picture</label>
        <input type="text" name="picture" value="{{ $superhero->picture }}">

        <br><br>

        <input type="submit" value="Edit">
    </form>

    <br>
    <a href="{{ route('gender.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'Edit SuperHero')

@section('content')
    <h1>Edit SuperHero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $superhero->name }}" required>

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" value="{{ $superhero->real_name }}" required>

        <label for="gender_id">Gender:</label>
        <select name="gender_id" id="gender_id" required>
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" {{ $superhero->gender_id == $gender->id ? 'selected' : '' }}>
                    {{ $gender->name }}
                </option>
            @endforeach
        </select>

        <label for="universe_id">Universe:</label>
        <select name="universe_id" id="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                    {{ $universe->name }}
                </option>
            @endforeach
        </select>

        <label for="picture">Picture URL:</label>
        <input type="text" name="picture" id="picture" value="{{ $superhero->picture }}">

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection