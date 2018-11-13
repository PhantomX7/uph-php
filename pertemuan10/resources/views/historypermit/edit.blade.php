@extends('layouts.dashboard')
@section('page_heading','History Permit')
@section('section')
  <form action='{{route('historypermit.update', ['id' => $historypermit->id])}}' method="POST">
    {{ csrf_field() }}
    <input hidden name="_method" value="put">
    <div class="form-group">
      <label>MasterEmployee ID</label>
      <input class="form-control" type="string" name="master_employee_id" value="{{$historypermit->master_employee_id}}">
    </div>
    <div class="form-group">
      <label>Permit date</label>
      <input class="form-control" type="date" name="permit_date" value="{{$historypermit->permit_date}}">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input class="form-control" type="string" name="description" value="{{$historypermit->description}}">
    </div>
    <input type="submit" class="btn btn-success">
  </form>



@stop
