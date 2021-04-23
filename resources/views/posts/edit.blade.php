<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit user</h1>

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group has-error">
                    <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                    <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                    <span class="help-block">Field not entered!</span>
                </div>

                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Content</label>
                    <textarea rows="5" class="form-control" name="content">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <label>Choose category:</label>
                    <select name="$categories" id="$categories" multiple>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </form>
        </div>

    </div>
</div>

</body>
</html>
