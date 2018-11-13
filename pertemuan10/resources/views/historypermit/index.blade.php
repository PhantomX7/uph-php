@extends('layouts.dashboard')
@section('page_heading','History Permit')
@section('section')
  <a href="/historypermit/create" class="btn btn-primary">Create</a>
  <br>
  <table class="table ">
  	<thead>
  		<tr>
  			<th>Id</th>
        <th>Master Employee id</th>
        <th>Permit Date</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
  		</tr>
  	</thead>
  	<tbody>
      @foreach($historypermit as $history)
        <tr>
          <td>{{$history->id}}</td>
          <td>{{$history->master_employee_id}}</td>
          <td>{{$history->permit_date}}</td>
          <td>{{$history->description}}</td>
          <td>
            <a href="/historypermit/{{$history->id}}/edit" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <form action="{{route('historypermit.destroy', ['id' => $history->id])}}" method="post">
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
