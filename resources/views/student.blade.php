<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="card-header">
                        <h1><a class="btn btn-primary" href="/display"> Student Lists</a></h1>
                    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Student Crud</h1>
                    </div>
                    <div class="card-body">
                    <form action="{{url('/std')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                             <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label>Department</label>
                             <input type="text" class="form-control" name="depertment" placeholder="Enter Your Dept">
                        </div>
                        <div class="mb-3">
                            <label>Father Name</label>
                             <input type="text" class="form-control" name="fathername" placeholder="Enter Your Father Name">
                        </div>
                        <div class="mb-3">
                            <label>Mother Name</label>
                             <input type="text" class="form-control" name="mothername" placeholder="Enter Your Mother name">
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                             <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                             <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                       <div class="mb-3">
                            <label>Image</label>
                             <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>