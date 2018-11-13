@extends('layouts.dashboard')
@section('page_heading','MasterSalary')
@section('section')
  <a href="/mastersalary/create" class="btn btn-primary">Create</a>
  <br>
  <table class="table ">
  	<thead>
  		<tr>
  			<th>Id</th>
        <th>Category</th>
        <th>Max Salary</th>
        <th>Description</th>
  		</tr>
  	</thead>
  	<tbody>
      @foreach($mastersalary as $salary)
        <tr>
          <td>{{$salary->id}}</td>
          <td>{{$salary->category}}</td>
          <td>{{$salary->maximum_salary}}</td>
          <td>{{$salary->description}}</td>
          <td>
            <a href="/mastersalary/{{$salary->id}}/edit" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <form action="{{route('mastersalary.destroy', ['id' => $salary->id])}}" method="post">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
  	</tbody>
  </table>



@stop
