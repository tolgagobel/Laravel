@extends('layout')
@section('content')
<div class="contaier mt-5 col-lg-6">
        <form method="POST" action="{{ route('tedaviupdate',$treatment->id)}}">
          @csrf
            <div class="form-group">
                <label>Branş İsmi</label>
                <input type="text" class="form-control" name="branch_name" value="{{$treatment->branch_name}}">
            </div>   
            <div class="form-group">
                <label>Branş ücret</label>
                <input type="text" class="form-control" name="branch_fee" value="{{$treatment->branch_fee}}">
            </div>
            <select name="doctor_id">
            @foreach($doctors as $doctor)
              <option value="{{$doctor->id}}" {{ $doctor->id == $treatment->doctor_id ? 'selected' : ''}}>{{$doctor->doctor_name}}</option>
            @endforeach
            </select>
          <button type="submit" class="btn btn-primary">Update</button>
          </form>
</div>
@endsection