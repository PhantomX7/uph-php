@extends('layouts.dashboard')
@section('page_heading','Master Employee')
@section('section')
  <form action='{{route('masteremployee.update', ['id' => $masteremployee->id])}}' method="POST">
    {{ csrf_field() }}
    <input hidden name="_method" value="put">
    <div class="form-group">
      <label>Identity Card</label>
      <input class="form-control" type="string" name="identity" value="{{$masteremployee->identity}}">
    </div>
    <div class="form-group">
      <label>Name</label>
      <input class="form-control" type="string" name="name" value="{{$masteremployee->name}}">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input class="form-control" type="string" name="address" value="{{$masteremployee->address}}">
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input class="form-control" type="string" name="phone" value="{{$masteremployee->phone}}">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input class="form-control" type="date" name="birth_date" value="{{$masteremployee->birth_date}}">
    </div>
    <input type="submit" class="btn btn-success">
  </form>



@stop
