<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phần mềm quản lý nhân sự</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/assets2/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('public/assets2/css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('public/assets2/css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('public/assets2/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('public/assets2/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="{{ asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" />
       <script src="{{ asset('public/assets/js/jquery-1.11.1.js')}}"></script>
         <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script type="text/javascript">
   $(function(){
    $('#bt_thongtin').click(function(){
        $('#thong_tin').toggle(10);
    });
});

 $(function(){
    $('#bt_congviec').click(function(){
        $('#cong_viec').toggle(10);
    });
});



     </script>



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top navbar-theme" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:white;">Quản lý nhân sự</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">      
                            </a>
                        </li>                      
                  
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                            </a>
                        </li>                   
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="col-md-12 input-group custom-search-form">
                                  <span class="label label-info pull-right">Admin</span><br>
                               <div class="">

                                <img src="{{ asset('public/assets/img/user.jpg') }}" class="img-circle" width="60px" style="margin-right:10px; border:1px solid red;" />
                               <a  href="#"> {{ Auth::user()->name }}</a>
                
                            
                                <div class="col-md-12 " style="margin-top:20px" >
                                <a class="pull-left" href="#">Profie <span class="badge" style="background-color:green;">+</span> </a>
                    
                                <a class="pull-right" href="#">Inbox <span class="badge" style="background-color:red;">1993</span></a>
                           </div>
                       </div>
                            </div>
                            <!-- /input-group -->
                        </li>
                         <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a class="active" href="index.html">
                            <i class="fa fa-dashboard fa-fw"></i> Bảng điều khiển <span class="badge pull-right" style="background-color:blue;">></span></a>
                        </li>
                        <li><a href="{{ asset('nhansu')}}">
                            <i class="fa fa-group fa-fw"></i> Danh sách nhân viên <span class="label label-info pull-right">></span></a>
                        </li>               
                        <li><a href="{{ asset('createNhansu')}}">
                            <i class="fa fa-user-plus fa-fw"></i> Thêm nhân viên <span class="badge pull-right" style="background-color:green;">+</span></a>
                        </li>
                        <li><a href="{{ asset('phongban')}}">
                            <i class="fa fa-home fa-fw"></i> Phòng ban <span class="label label-danger pull-right">></span></a>
                        </li>
                        <li><a href="{{ asset('chucvu')}}">
                            <i class="fa fa-user fa-fw"></i> Chức vụ <span class="label label-warning pull-right">></span></a>
                        </li>                                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>  

            <!-- /. SIDEBAR MENU (navbar-side) -->
  <div id="page-wrapper">{!! $content !!} </div> 


  </div>
    <!-- /#wrapper -->
 <script src="{{ asset('public/assets/js/jquery-1.11.1.js')}}"></script>
                <!-- BOOTSTRAP SCRIPTS -->
   <script src="{{ asset('public/assets/js/bootstrap.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/assets2/js/plugins/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('public/assets2/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{ asset('public/assets2/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('public/assets2/js/plugins/morris/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/assets2/js/sb-admin-2.js')}}"></script>

</body>
</html>
<style>
td,th{text-align: center;}
th{
    /*background-color: #CDCDCD;*/
    color: white;
}
  #thong_tin{
    display: none;
  }
  #cong_viec{
   display: none;
  }

</style>