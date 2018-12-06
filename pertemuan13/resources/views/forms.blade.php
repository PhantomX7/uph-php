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
    <form action="/menu" method="post">
        @csrf
        <div class="form-group">
          <label>Menu Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Menu Link</label>
            <input type="text" class="form-control" name="link">
        </div>
        <div class="form-group">
            <label>Icon Name</label>
            <input type="text" class="form-control" name="icon">
        </div>
        <div class="form-group">
            <label>Position</label>
            <input type="text" class="form-control" name="position">
        </div>
        <div class="form-group">
                <label>Visible</label>
                <input type="text" class="form-control" name="visible">
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