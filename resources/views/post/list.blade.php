<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Post ---</h3>
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tr>
                <td>1</td>
                <td>Adim</td>
                <td>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEzy37KsQmCvQvjDeap4heO6hXR46cbpVfPw&usqp=CAU" width="100px" height="100px">
                </td>
                <td>Adim</td>
                <td>
                    <a href="{{ route('admin.post.show', ['id'=>1]) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ route('admin.post.edit', ['id'=>1]) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.post.delete', ['id'=>1]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>