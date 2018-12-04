<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

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

    <style>  
        /* The switch - the box around the slider */
       .switch {
       position: relative;
       display: inline-block;
       width: 60px;
       height: 34px;
       }
       
       /* Hide default HTML checkbox */
       .switch input {display:none;}
       
       /* The slider */
       .slider {
       position: absolute;
       cursor: pointer;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       background-color: #ccc;
       -webkit-transition: .4s;
       transition: .4s;
       }
       
       .slider:before {
       position: absolute;
       content: "";
       height: 26px;
       width: 26px;
       left: 4px;
       bottom: 4px;
       background-color: white;
       -webkit-transition: .4s;
       transition: .4s;
       }
       
       input:checked + .slider {
       background-color: #2196F3;
       }
       
       input:focus + .slider {
       box-shadow: 0 0 1px #2196F3;
       }
       
       input:checked + .slider:before {
       -webkit-transform: translateX(26px);
       -ms-transform: translateX(26px);
       transform: translateX(26px);
       }
       
       /* Rounded sliders */
       .slider.round {
       border-radius: 34px;
       }
       
       .slider.round:before {
       border-radius: 50%;
       }
       </style>
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
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{route('admin')}}"><i class="fa"></i> Admin Panel</a>
                        </li>
                        <li>
                            <a href="{{route('masterproduct')}}"><i class="fa"></i> Show Master Product</a>
                        </li>
                        <li>
                            <a href="{{route('mastertransaction')}}"><i class="fa"></i> Show Master Transaction</a>
                        </li>
                        <li>
                            <a href="{{route('transactiondetail')}}"><i class="fa"></i> Show Transaction Detail</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa"></i> Logout</a>
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
                    <h3 class="page-header">Master Product Data</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <table class="table">
                    <tr>
                        <td>Full Name</td>
                        <td>Admin Panel</td>
                        <td>Master Product</td>
                        <td>Master Transaction</td>
                        <td>Transaction Detail</td>
                    </tr>  
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->full_name}}</td>
                            <td>
                                @if ($user->admin)
                                    <label class="switch">
                                        <a href="{{route('not.admin',['id'=>$user->id])}}">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @else
                                    <label class="switch">
                                        <a href="{{route('make.admin',['id'=>$user->id])}}">
                                            <input type="checkbox" >
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @endif
                            </td>
                            <td>
                                @if ($user->masterproduct)
                                    <label class="switch">
                                        <a href="{{route('not.mp',['id'=>$user->id])}}">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @else
                                    <label class="switch">
                                        <a href="{{route('make.mp',['id'=>$user->id])}}">
                                            <input type="checkbox" >
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @endif
                            </td>
                            <td>
                                @if ($user->mastertransaction)
                                    <label class="switch">
                                        <a href="{{route('not.mt',['id'=>$user->id])}}">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @else
                                    <label class="switch">
                                        <a href="{{route('make.mt',['id'=>$user->id])}}">
                                            <input type="checkbox" >
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @endif
                            </td>
                            <td>
                                @if ($user->transactiondetail)
                                    <label class="switch">
                                        <a href="{{route('not.td',['id'=>$user->id])}}">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @else
                                    <label class="switch">
                                        <a href="{{route('make.td',['id'=>$user->id])}}">
                                            <input type="checkbox" >
                                            <span class="slider round"></span>
                                        </a>
                                    </label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div class="row">

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
