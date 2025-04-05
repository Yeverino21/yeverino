<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universes</title>
</head>

<body>

<h1>Universes Table</h1>

<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$universe->id}}</td>
                
                <td>{{$universe->name}}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <a href="{{ route('universes.index') }}">Back to List</a>


</body>

</html>

@extends('layouts.main')

@section('title', 'Universe Details')

@section('content')
    <h1>Universe Details</h1>

    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Name:</strong> {{ $universe->name }}</p>

    <a href="{{ route('universes.index') }}">Back to List</a>
@endsection