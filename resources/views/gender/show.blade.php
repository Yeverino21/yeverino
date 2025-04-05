<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
<h1>Genders <Table></Table></h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$gender->id}}</td>
                <td>{{$gender->name}}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <a href="{{ route('gender.index') }}">Back to List</a>

</body>
</html>

@extends('layouts.main')

@section('title', 'Gender Details')

@section('content')
    <h1>Gender Details</h1>

    <p><strong>ID:</strong> {{ $gender->id }}</p>
    <p><strong>Name:</strong> {{ $gender->name }}</p>

    <a href="{{ route('genders.index') }}">Back to List</a>
@endsection