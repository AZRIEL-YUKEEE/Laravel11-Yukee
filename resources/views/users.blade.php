<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cars CRUD</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Cars CRUD
                <a href="/add/user/" class="btn btn-success btn-sm float-end" >Add New Data</a>
            </div>
            @if (Session::has('success'))
            <span class="alert alert-success p-2" >{{Session::get('success')}}</span>
            @endif
            <div class="card-body">
                <table class="table table-sm table-stripped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Password</th>
                        <th>Brand</th>
                        <th>Car Model</th>
                        <th>Year</th>
                        <th>Inserted at</th>
                        <th>Last Updated</th>
                    </thead>
                    <tbody>
                    @if (count($all_users)>0)
                        @foreach ($all_users as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->password}}</td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->car_model}}</td>
                            <td>{{$item->year}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>


                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No Data Found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html> 