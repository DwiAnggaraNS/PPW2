<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" content="ie=edge">
    <title>@yield('title', 'About')</title>
</head>
<body>
@extends('layouts.master')

@section('content')
    <h1>Halaman About</h1>
    <h1><?= $name;?></h1>
    <h1><?= $email;?></h1>
@endsection
<script src="js/script.js"></script>
</body>
</html>