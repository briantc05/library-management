<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto d-grip gap-2">
                <form action="{{   url('books', $books->isbn) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $books->title ) }}"/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Author</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $books->author ) }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description', $books->description ) }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Published Year</label>
                    <input type="date" name="published_year" class="form-control" value="{{ old('published_year', $books->published_year ) }}">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary">Update Book Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
