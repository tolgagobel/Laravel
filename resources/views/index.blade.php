<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Doctor Branch</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($doctor as $key=>$doctor)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$doctor->doctor_name}}</td>
      <td>{{$doctor->doctor_branch}}</td>
      <th>
         <a href="{{ route('treatments',$doctor->id) }}" class="btn btn-sm btn-info">Detail</a>
      </th>
      <th>
         <a href="{{ route('delete',$doctor->id) }}" class="btn btn-sm btn-danger">Delete</a>
      </th>
      <th>
         <a href="{{ route('update',$doctor->id) }}" class="btn btn-sm btn-danger">update</a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>