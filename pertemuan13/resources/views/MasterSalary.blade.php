@extends('layouts.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Forms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Category</th>
            <th scope="col">Maximum Salary</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mastersalary as $mastersalary)
            <tr>
                <td>{{$mastersalary->category}}</td>
                <td>{{$mastersalary->maximumsalary}}</td>
                <td>{{$mastersalary->description}}</td>
                <td><a href="{{route('master.salary.edit',['id'=>$mastersalary->id])}}">Edit</a></td>
                <td><a href="{{route('master.salary.delete',['id'=>$mastersalary->id])}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
@endsection