<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas - kenichi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/"><i class="fa"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/showmasterproduct"><i class="fa"></i> Show Master Product</a>
                        </li>
                        <li>
                            <a href="/showmastertransaction"><i class="fa"></i> Show Master Transaction</a>
                        </li>
                        <li>
                            <a href="/showtransactiondetails"><i class="fa"></i> Show Transaction Detail</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tugas Pertemuan 11</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Transaksi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="/#MT" data-toggle="tab">Add Master Transaction</a>
                                </li>
                                <li ><a href="/#DT" data-toggle="tab">Add Detail Transaction</a>
                                </li>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="MT">
                                    <form action="updatemastertransaction" method="get">
                                        <div class="form-group" style="margin-top:10px">
                                            <p>Nomor Invoice</p>
                                            <input type="text" class="form-control" id="invoice" placeholder="No Invoice" name="invoice">
                                            <p>Deskripsi</p>
                                            <input type="textarea" class="form-control" id="desc" placeholder="Description" name="desc">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Data</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="DT">
                                <form action="updatedetailtransaksi" method="get">
                                        <div class="form-group" style="margin-top:10px">
                                            <p>ID Transaksi</p>
                                            <input type="text" class="form-control" id="invoice" placeholder="id transaksi" name="id">
                                            <p>Product ID</p>
                                            <select class="form-control" name="produk">
                                                @foreach ($data as $data)
                                                <option value="{{$data->name}}">{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                            <p>Price</p>
                                            <input type="text" class="form-control" id="price" placeholder="Insert price here" name="price">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Master Product
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="updatemasterproduk" method="get">
                                <div class="form-group">
                                    <p>Product Name</p>
                                    <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name">
                                    <p>Description</p>
                                    <input type="text" class="form-control" id="desc" placeholder="Description" name="desc">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
