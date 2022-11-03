@extends('layout')
@section('content')
<div class="container col-lg-6">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Branch Name</th>
      <th scope="col">Branch fee</th>
      <th scope="col">Doctor</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach($treatments as $treatment)
    <tr>
      <td>{{$treatment->treatment_name}}</td>
      <td>{{$treatment->treatment_fee}}</td>
      <td>{{$treatment->doctor->doctor_name}}</td> 
      <th>
        <a href="{{ route('tedavi',$treatment->id) }}" class="btn btn-sm btn-warning">Update</a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection