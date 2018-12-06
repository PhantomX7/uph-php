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
    <form action="{{ route('master.salary.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label>Category</label>
          <input type="text" class="form-control" name="category">
        </div>
        <div class="form-group">
            <label>Maximum Salary</label>
            <input type="text" class="form-control" name="maximumsalary">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
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