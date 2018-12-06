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
    <form action="{{ route('history.update',['id'=>$history->id])}}" method="post">
        @csrf
        <div class="form-group">
          <label>Master Employee Id</label>
          <input type="text" class="form-control" name="masteremployeeid" value="{{$history->masteremployeeid}}">
        </div>
        <div class="form-group">
            <label>Permit Date</label>
            <input type="date" class="form-control" name="permitdate" value="{{$history->permitdate}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{$history->description}}">
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