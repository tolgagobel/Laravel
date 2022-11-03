@extends('layout')
@section('content')
<div class="container">
        <div class="row col-lg-6">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Doctor Branch</th>
                  <th scope="col">Detail</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($doctors as $doctor)
                <tr>
                  <td>{{$doctor->doctor_name}}</td>
                  <td>{{$doctor->branch->branch_name}}</td>
                  <th>
                    <a href="{{ route('treatments',$doctor->id) }}" class="btn btn-sm btn-info">Detail</a>
                  </th>
                  <th>
                    <a href="{{ route('delete',$doctor->id) }}" class="btn btn-sm btn-danger">Delete</a>
                  </th>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <div class="class log-lg-6">
          <a href="{{route('doctorkayit')}}" class="btn btn-sm btn-info">Doktor Kayıt Butonu</a>
          <a href="{{route('treatmentkayit')}}" class="btn btn-sm btn-info">Tedavi Kayıt Butonu</a>
        </div>
    </div>
    @endsection