@extends('layout')
@section('content')
<div class="contaier mt-5 col-lg-6">
        <form method="post" action="{{ route('doctorkayit-sonuc')}}">
          @csrf
            <div class="form-group">
                <label>Doktor Ad Soyad</label>
                <input type="text" class="form-control" name="doctor_name">
              </div>   
              <select name="branch_id">
              @foreach($branches as $item)
                <option value="{{$item->id}}">{{$item->branch_name}}</option>
                @endforeach
              </select>
            <button type="submit" class="btn btn-primary">Doktor Kayıt</button>
          </form>
    </div>
  @endsection