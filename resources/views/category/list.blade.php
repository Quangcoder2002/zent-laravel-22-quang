<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add New Category</a>
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
                <td>Bóng đá</td>
                <td>
                    <img src="https://image.thanhnien.vn/660/uploaded/quangtuyen/2019_03_05/u23tuanlinh_fpjh.jpg" width="100px" height="100px">
                </td>
                <td>Tin về bóng đá</td>
                <td>
                    <a href="{{ route('admin.category.show', ['id'=>1]) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ route('admin.category.edit', ['id'=>'1']) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.category.delete', ['id'=>'1']) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>