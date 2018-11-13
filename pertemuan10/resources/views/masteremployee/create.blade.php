@extends('layouts.dashboard')
@section('page_heading','Master Employee')
@section('section')
  <form action='{{ action('MasterEmployeeController@store') }}' method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Identity Card</label>
      <input class="form-control" type="string" name="identity">
    </div>
    <div class="form-group">
      <label>Name</label>
      <input class="form-control" type="string" name="name">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input class="form-control" type="string" name="address">
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input class="form-control" type="string" name="phone">
    </div>
    <div class="form-group">
      <label>Date</label>
      <input class="form-control" type="date" name="birth_date">
    </div>
    <input type="submit" class="btn btn-success">
  </form>

  

@stop
