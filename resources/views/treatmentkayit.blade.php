@extends('layout')
@section('content')
<div class="contaier mt-5 col-lg-6">
        <form method="post" action="{{ route ('tedavi-detay') }}">
          @csrf
            <div class="form-group">
                <label>Branş İsmi</label>
                <input type="text" class="form-control" name="treatment_name">
            </div>   
            <div class="form-group">
                <label>Branş ücret</label>
                <input type="text" class="form-control" name="treatment_fee">
            </div>
              <select name="doctor_id">
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                @endforeach
              </select>
              <select name="branch_id">
                @foreach($branches as $branch)
                <option value="{{$branch->id}}">{{$branch->branch_name}}</option>
                @endforeach
              </select>
          <button type="submit" class="btn btn-primary">Doktor Kayıt</button>
          </form>
</div>
@endsection