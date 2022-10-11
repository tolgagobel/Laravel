<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Branch Name</th>
      <th scope="col">Branch fee</th>
    </tr>
  </thead>
  <tbody>
    @foreach($treatments as $key=>$treatments)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$treatments->branch_name}}</td>
      <td>{{$treatments->branch_fee}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>