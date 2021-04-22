<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Bài Post</title>
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Create post</h1>

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group has-error">
                        <label for="slug">Slug <span class="require">*</span></label>
                        <input type="text" class="form-control" name="slug">

                    </div>

                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="description">Content</label>
                        <textarea rows="5" class="form-control" name="content"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Categories</label>
                        <select name="categories">
                            <option value="0">The Thao</option>
                            <option value="1">Du Lich</option>
                            <option value="2">Van Hoa</option>
                            <option value="3" selected="selected">Nghe Thuat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                </form>
            </div>

        </div>
    </div>

</body>
</html>
