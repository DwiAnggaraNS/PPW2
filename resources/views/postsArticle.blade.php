<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" content="ie=edge">
    <title>@yield('title', 'Posts')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    <form>
      <div class="mb-3">
        <label for="exampleTitle" class="form-label">Article Title</label>
        <input type="text" class="form-control" id="exampleTitle">
      </div>
      <div class="mb-3">
        <label for="exampleInputPostDesc" class="form-label">Content</label>
        <input type="text" class="form-control" id="exampleInputPostDesc">
      </div>
      <button type="submit" class="btn btn-primary">Post</button>
    </form>
@endsection
<script src="js/script.js"></script>
</body>
</html>