<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">--- DASHBOARD ---</h2>
        <h4>USER</h4>
        <ul>
            <li><a href="{{ route('admin.users.index') }}" class="btn btn-primary">LIST USER</a></li>
            <li><a href="{{ route('admin.users.create') }}" class="btn btn-primary">ADD USER</a></li>
        </ul>
        <h4>CATEGORY</h4>
        <ul>
            <li><a href="{{ route('admin.category.index') }}" class="btn btn-success">LIST CATEGORY</a></li>
            <li><a href="{{ route('admin.category.create') }}" class="btn btn-success">ADD CATEGORY</a></li>
        </ul>
        <h4>POST</h4>
        <ul>
            <li><a href="{{ route('admin.post.index') }}" class="btn btn-danger">LIST POST</a></li>
            <li><a href="{{ route('admin.post.create') }}" class="btn btn-danger">ADD POST</a></li>
        </ul>
    </div>
</body>
</html>