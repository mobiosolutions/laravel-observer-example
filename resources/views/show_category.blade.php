<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Observer</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <hr class="dl-horizontal">
    <a style="margin-left:130px;" class="btn btn-primary" href="/createCategory">Add Category</a>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2>Show Categories</h2>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a class="btn btn-primary" href="/editCategory/{{ $category->id }}">Edit</td>
                        @if($category->deleted_at == null)
                        <td><a class="btn btn-danger" href="/deleteCategory/{{ $category->id }}">Delete</td>
                        @else
                        <td><a class="btn btn-primary" href="/restoreCategory/{{ $category->id }}">Restore</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>