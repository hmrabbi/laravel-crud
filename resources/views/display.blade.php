<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1><a class="btn btn-success" href="/student">add Student</a></h1>
                    </div>
                    <div class="card-body">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Depertment</th>
                        <th scope="col">FatherName</th>
                        <th scope="col">MotherName</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Operation</th>
                        <th scope="col">Operation2</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->depertment}}</td>
                      <td>{{$data->fathername}}</td>
                      <td>{{$data->mothername}}</td>
                      <td>{{$data->address}}</td>
                      <td>{{$data->email}}</td>
                      <td><img width="100px;" height="100px;" src="/studentimage/{{$data->image}}"></td>
                      <td><a class="btn btn-danger" href="{{url('/delete',$data->id)}}">Delete</a></td>
                      <td><a class="btn btn-success" href="{{url('/update',$data->id)}}">Update</a></td> 
                    </tr>
                    @endforeach
                    </tbody>
                   </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>