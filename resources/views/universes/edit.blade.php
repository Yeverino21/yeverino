<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}">

        <br><br>

        <input type="submit" value="Update">
    </form>

    <br>
    <a href="{{ route('gender.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'Edit Universe')

@section('content')
    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $universe->name }}" required>

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection