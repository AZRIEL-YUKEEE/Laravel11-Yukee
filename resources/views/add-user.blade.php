<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add new Data</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header"> Add New Data</div>
            @if (Session::has('fail'))
            <span class="alert alert-danger p-2" >{{Session::get('fail')}}</span>
            @endif
            <card class="body">
        <form action="{{route('AddUser')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full name</label>
                <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full name">
                @error('full_name')
                <span class="text-danger" >{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Email</label>
                 <input type="email" name="email" value="{{old('email')}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                 @error('email')
                <span class="text-danger" >{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                 <input type="number" name="phone_number" value="{{old('phone_number')}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                 @error('phone_number')
                <span class="text-danger" >{{$message}}</span>
                @enderror
                </div>

            <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Password</label>
                 <input type="password" name="password" value="{{old('password')}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password">
                 @error('password')
                <span class="text-danger" >{{$message}}</span>
                @enderror
                </div>

            <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                 <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                 @error('password_confirmation')
                <span class="text-danger" >{{$message}}</span>
                @enderror
                </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Brand</label>
                <input type="text" name="brand" value="{{old('brand')}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Brand">
                @error('brand')
                <span class="text-danger" >{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Car Model</label>
                <input type="text" name="car_model" value="{{old('car_model')}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Car Model">
                @error('car_model')
                <span class="text-danger" >{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Year</label>
                <input type="text" name="year" value="{{old('year')}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Year">
                @error('year')
                <span class="text-danger" >{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
            

            </card>
        </div>
    </div>
</body>
</html>