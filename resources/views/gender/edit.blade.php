<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gender</title>
</head>
<body>
    <h1>Edit Gender</h1>

    <form action="{{ route('gender.update', $gender->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $gender->name }}">

        <br><br>

        <input type="submit" value="Update">
    </form>
    <a href="{{ route('gender.index') }}">Back to List</a>
</body>
</html>

@extends('layouts.main')

@section('title', 'Edit Gender')

@section('content')
    <h1>Edit Gender</h1>

    <form action="{{ route('genders.update', $gender->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $gender->name }}" required>

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection