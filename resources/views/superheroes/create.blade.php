<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Superhero</title>
</head>
<body>
    <h1>Create Superhero</h1>

    <form action = "{{ route('superheroes.store')}}" method = "POST">
    @csrf
        <label for = "gender">Gender </label>
        <select name = "gender_id" id ="gender">
            @foreach($genders as $gender)
            <option value = "{{ $gender->id }}">{{$gender->name}}</option>
            @endforeach
        </select>

        <label for="universe">Universe</label>
        <select name="universe_id" id = "universe">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{$universe->name}}</option>
            @endforeach   
        </select>

        <br><br>

        <label for="real_name">Real Name</label>
        <input type="text" name="real_name">
        
        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name">
        
        <br><br>

        <label for="">Picture</label>
        <input type="text" name="picture">
        
        <br><br>

        <input type = "submit" value = "Create">
    </form>

    <br>

    <a href="{{ route('superheroes.index') }}">Back to List</a>

</body>
</html>

@extends('layouts.main')

@section('title', 'Create SuperHero')

@section('content')
    <h1>Create SuperHero</h1>

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" required>

        <label for="gender_id">Gender:</label>
        <select name="gender_id" id="gender_id" required>
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>

        <label for="universe_id">Universe:</label>
        <select name="universe_id" id="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>

        <label for="picture">Picture URL:</label>
        <input type="text" name="picture" id="picture">

        <br><br>

        <button type="submit">Create</button>
    </form>
@endsection