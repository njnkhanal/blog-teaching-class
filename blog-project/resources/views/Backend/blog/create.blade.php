@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Blog</h1>
    <form method="post" action="{{ route('blog.store') }}">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title"> <br>

        <label for="">slug</label>
        <input type="text" name="slug"> <br>

        <label for="">image</label>
        <input type="text" name="image"> <br>

        <label for="">content</label>
        <input type="text" name="content"> <br>

        <label for="">category_id</label>
        <input type="text" name="category_id"> <br>
        <button type="Submit">Create</button>
    @endsection
