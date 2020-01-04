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
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                @if($message = session()->pull('message'))
                <div class="alert alert-success">{{ $message }}</div>
                @endif
                <a style="margin-bottom: 25px;" class="btn btn-primary" href="/">Show Category</a>
                <h2>Update Category</h2>

                <form method="POST" action="/updateCategory">
                    {{ csrf_field() }}

                    <input type="hidden" class="form-control" id="id" name="id" value="{{$category->id}}" placeholder="Enter Product Name">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Product Description">{{$category->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="Update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>