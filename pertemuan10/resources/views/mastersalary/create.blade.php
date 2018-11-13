@extends('layouts.dashboard')
@section('page_heading','MasterSalary')
@section('section')
  <form action='{{ action('MasterSalaryController@store') }}' method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Category</label>
      <input class="form-control" type="string" name="category">
    </div>
    <div class="form-group">
      <label>Maximum Salary</label>
      <input class="form-control" type="string" name="maximum_salary">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input class="form-control" type="string" name="description">
    </div>
    <input type="submit" class="btn btn-success">
  </form>



@stop
