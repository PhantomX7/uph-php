@extends('layouts.dashboard')
@section('page_heading','History Permit')
@section('section')
  <form action='{{ action('HistoryPermitController@store') }}' method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>MasterEmployee ID</label>
      <input class="form-control" type="string" name="master_employee_id">
    </div>
    <div class="form-group">
      <label>Permit date</label>
      <input class="form-control" type="date" name="permit_date">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input class="form-control" type="string" name="description">
    </div>
    <input type="submit" class="btn btn-success">
  </form>



@stop
