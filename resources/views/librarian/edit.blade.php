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
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                    <form action="{{   url('students', $books->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ $students->fname }}"/>
                        </div>
                        <div class="form-group mb-3">
                            <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ $students->lname }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $students->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{ $students->phone }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $students->address }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{ $students->city }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Province</label>
                        <input type="text" name="province" class="form-control" value="{{ $students->province }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Zip Code</label>
                        <input type="text" name="zip" class="form-control" value="{{ $students->zip }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Birthdate</label>
                        <input type="date" name="birthdate" class="form-control" value="{{ $students->birthdate }}">
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
