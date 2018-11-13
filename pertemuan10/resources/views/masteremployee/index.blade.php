@extends('layouts.dashboard')
@section('page_heading','Master Employee')
@section('section')
  <a href="/masteremployee/create" class="btn btn-primary">Create</a>
  <br>
  <table class="table ">
  	<thead>
  		<tr>
  			<th>Id</th>
  			<th>Identity</th>
        <th>Name</th>
        <th>Address</th>
        <th>Birth Date</th>
        <th>Phone</th>
        <th>Edit</th>
  			<th>Delete</th>
  		</tr>
  	</thead>
  	<tbody>
      @foreach($masteremployee as $employee)
        <tr>
          <td>{{$employee->id}}</td>
          <td>{{$employee->identity}}</td>
          <td>{{$employee->name}}</td>
          <td>{{$employee->address}}</td>
          <td>{{$employee->birth_date}}</td>
          <td>{{$employee->phone}}</td>
          <td>
            <a href="/masteremployee/{{$employee->id}}/edit" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <form action="{{route('masteremployee.destroy', ['id' => $employee->id])}}" method="post">
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
