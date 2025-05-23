<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Table</title>
</head>
<body>
        <h1>Universe</h1>

        <hr>

        <a href="{{ route('universes.create') }}">Create a new Universe</a>

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

            @foreach($universes as $item)

                <tr>

                <td>{{ $item -> id}} </td>

                <td>{{ $item -> name}}</td>

                <td>

                <a href = "{{route ('universes.show',$item->id)}}">Show</a>

                <a href = "{{route ('universes.edit',$item->id)}}">Edit</a>

                <form action="{{ route('universes.destroy', $item->id) }}" method="post">

                        @csrf

                        @method('delete')

                        <input type="submit" value="Delete" onclick="return confirm('Are you really sure? There is no way back')">
          </form>
            </td>

                </tr>

            @endforeach

            </tbody>

        </table>
        <a href="{{ route('gender.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'Universes')

@section('content')
    <h1>Universes</h1>
    <a href="{{ route('universes.create') }}">Create Universe</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('universes.show', $item->id) }}">Show</a>
                        <a href="{{ route('universes.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('universes.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this universe?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection