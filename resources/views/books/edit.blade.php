<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                    <form action="{{   url('books', $book->isbn) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Title</label>
                        <input type="text" name="fname" class="form-control" value="{{ $books->title }}"/>
                        </div>
                        <div class="form-group mb-3">
                            <label>Author</label>
                        <input type="text" name="lname" class="form-control" value="{{ $books->author }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description</label>
                        <input type="text" name="email" class="form-control" value="{{ $books->description }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Published Year</label>
                        <input type="text" name="address" class="form-control" value="{{ $books->published_year }}">
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary">Update Book Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
