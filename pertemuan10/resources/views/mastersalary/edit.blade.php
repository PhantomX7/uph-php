@extends('layouts.dashboard')
@section('page_heading','Master Salary')
@section('section')
  <form action='{{route('mastersalary.update', ['id' => $master_salary->id])}}' method="POST">
    {{ csrf_field() }}
    <input hidden name="_method" value="put">
    <div class="form-group">
      <label>Category</label>
      <input class="form-control" type="string" name="category" value="{{$master_salary->category}}">
    </div>
    <div class="form-group">
      <label>Maximum Salary</label>
      <input class="form-control" type="string" name="maximum_salary" value="{{$master_salary->maximum_salary}}">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input class="form-control" type="string" name="description" value="{{$master_salary->description}}">
    </div>
    <input type="submit" class="btn btn-success">
  </form>



@stop
