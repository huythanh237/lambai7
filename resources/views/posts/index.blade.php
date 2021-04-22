<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Bài Post</title>
</head>
<body>
<div>
    <button><a href="{{'posts/create'}}">Thêm Bài Post</a></button>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Content</th>
        <th>Categories</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{$post->slug}}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{$post->name}}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <button type="button" class="btn btn-danger delete-post" data-id="{{ $post->id }}">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
