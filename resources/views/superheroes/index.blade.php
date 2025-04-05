<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes table</title>
</head>
<body>
    <h1>Superheroes</h1>

    <hr> 
        <a href="{{ route('superheroes.create') }}">Create Superheroes</a>
        <a href="{{ route('gender.create') }}" class="btn btn-primary">Create gender</a>
        <a href="{{ route('gender.index') }}" class="btn btn-primary">Edit gender</a>
        <a href="{{ route('universes.index') }}" class="btn btn-primary">Edit universes</a>

    <hr> 

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>universe_id</th>
                <th>gender_id</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>picture</th>
            </tr>
        </thead>

        <tbody>
            @foreach($superheroes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->universe_id}}</td>
                <td>{{$item->gender_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->real_name}}</td>
                <td><img src="{{$item->picture}}" alt="{{$item->name}}" width="100"></td>
                <td>
                    <a href="{{ route('gender.edit', $item->gender_id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('gender.show', $item->gender_id) }}" class="btn btn-info">Show</a>
                    <br>
                    <form action="{{ route('superheroes.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you pretty sure? There is no way back')">
                    <form>
                </td>

            </tr>

            @endforeach
            
        </tbody>
    </table>

</body>
</html>

@extends('layouts.main')

@section('title', 'SuperHeroes')

@section('content')
    <h1>SuperHeroes</h1>
    <a href="{{ route('superheroes.create') }}">Create SuperHero</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Gender</th>
                <th>Real Name</th>
                <th>Name</th>
                <th>Universe</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->gender->name ?? 'N/A' }}</td>
                    <td>{{ $item->real_name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->universe->name ?? 'N/A' }}</td>
                    <td>
                        @if(filter_var($item->picture, FILTER_VALIDATE_URL))
                            <img src="{{ $item->picture }}" alt="{{ $item->name }}" width="100">
                        @else
                            {{ $item->picture }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('superheroes.show', $item->id) }}">Show</a>
                        <a href="{{ route('superheroes.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('superheroes.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this superhero?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection