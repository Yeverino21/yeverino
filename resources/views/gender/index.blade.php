<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genders Table</title>
</head>
<body>
        <h1>Genders Table</h1>

        <hr>

        <a href="{{ route('gender.create') }}"> Add a new Gender</a>

        <hr>

        <br>

        <table>
            <thead>
                <tr>
                    <th>Id</th>

                    <th>Name</th>

                </tr>

                <thead>

            <tbody>

            @foreach($gender as $item)

                <tr>

                <td>{{ $item -> id}} </td>

                <td>{{ $item -> name}}</td>

                <td>

                <a href = "{{route ('gender.show',$item->id)}}">Show</a>

                <a href = "{{route ('gender.edit',$item->id)}}">Edit</a>

                <form action="{{ route('gender.destroy', $item->id) }}" method="post">

                        @csrf

                        @method('delete')

                        <input type="submit" value="Delete" onclick="return confirm('Are you really sure? There is no way back')">
          </form>
            </td>

                </tr>

            @endforeach

            </tbody>

        </table>
        <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'Genders')

@section('content')
    <h1>Genders</h1>
    <a href="{{ route('genders.create') }}">Create Gender</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('genders.show', $item->id) }}">Show</a>
                        <a href="{{ route('genders.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('genders.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this gender?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection