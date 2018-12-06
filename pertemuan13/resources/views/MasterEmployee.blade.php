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
            <th scope="col">Identitycard</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phoneno</th>
            <th scope="col">Birthdate</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($masteremployee as $masteremployee)
            <tr>
                <td>{{$masteremployee->identitycard}}</td>
                <td>{{$masteremployee->name}}</td>
                <td>{{$masteremployee->address}}</td>
                <td>{{$masteremployee->phoneno}}</td>
                <td>{{$masteremployee->birthdate}}</td>
                <td><a href="{{route('master.employee.edit',['id'=>$masteremployee->id])}}">Edit</a></td>
                <td><a href="{{route('master.employee.delete',['id'=>$masteremployee->id])}}">Delete</a></td>
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