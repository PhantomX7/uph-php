@extends('layouts.master')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Forms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form action="{{ route('master.employee.update',['id'=>$masteremployee->id])}}" method="post">
        @csrf
        <div class="form-group">
          <label>Identitycard</label>
          <input type="text" class="form-control" name="identitycard" value="{{$masteremployee->identitycard}}">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$masteremployee->name}}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{$masteremployee->address}}">
        </div>
        <div class="form-group">
            <label>Phone No</label>
            <input type="text" class="form-control" name="phoneno" value="{{$masteremployee->phoneno}}">
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="birthdate" value="{{$masteremployee->birthdate}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
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