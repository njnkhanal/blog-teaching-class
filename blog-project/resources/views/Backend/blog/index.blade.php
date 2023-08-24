@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Basic Table</h2>
        <a class="btn-success" href="{{ route('blog.create') }}">Add Blog</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category_id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->image }}</td>
                        <td>{{ $data->content }}</td>
                        <td>{{ $data->category_id }}</td>
                    </tr>
                @endforeach
            @endsection
