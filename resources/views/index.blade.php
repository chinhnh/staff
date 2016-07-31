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
                               <a  href="#"> Nguyễn Hữu Chinh </a>
                
                            
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
 <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                      
                       <div class="row">
                     <div class="col-md-12" >
                             <div style=" overflow: auto;">
                                <div class="panel panel-primary">
                        <div class="panel-heading">
                         <i class="fa fa-group fa-fw"></i> Danh sách nhân sự
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                       <!---------------------->      
                            <div class="pull-right" style="margin-bottom: 20px; float:right;">                                                
                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  />          
                                    <input type="submit" class="btn btn-success" name="click" value="Tìm"/>
                                </form>
                            </div><br />


                            <!------------------> 
                         


                                <table class="table table-striped table-responsive">

                                    <tr >
                                        <th ></th>
                                        <th >MÃ NV</th>
                                        <th >HỌ VÀ TÊN</th>
                                        <th >GIỚI TÍNH</th>
                                        <th >NGÀY SINH</th>
                                        <th >ĐIỆN THOẠI</th>
                                        <th >QUÊ QUÁN</th>
                                        <th >EMAIL</th> 
                                  
                                       
                                    </tr>
                                
                                    <tbody>
                                        <?php
                                        

                                        foreach ($dataNhansu as $key => $value) {
                                            ?>

                                            <tr>
                                                <td><img style="width:50px; height:50px;" src="{{ asset('resources/upload')}}/{{ $value->images }}"></td>
                                                
                                                <td>{{ $value->ma_nhan_vien}}</td>
                                                <td>{{ $value->ho_ten}}</td>
                                                <?php $gt = $value->gioi_tinh; ?>
                                                @if($gt==1)
                                                <td>Nam</td>
                                                @else
                                                <td>Nữ</td>
                                                @endif


                                                <td>{{ $value->ngay_sinh}}</td>
                                                <td>{{ $value->dien_thoai}}</td>
                                                <td>{{ $value->dia_chi}}</td>
                                                <td>{{ $value->email}}</td>                                           
                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>
                          <?php $dataNhansu->setPath('./theme') ?>
                          <div class="" align="center">  {!! $dataNhansu->render() !!}</div>
                            </div> </div>

                            </div> </div>
                        </div>

                      <!-------->
                    <div class="row">
                     <div class="col-md-6" >
                            
                                <div class="panel panel-danger">
                        <div class="panel-heading">
                           <i class="fa fa-home fa-fw"></i> Danh sách phòng ban
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                          
            <table class="table table-striped table-responsive">
            
                    <tr>
                        <th >Ký hiệu phòng</th>         
                        <th >Tên Phòng</th> 
                    </tr>
                <?php foreach ($dataPhongban as $row) { ?>
                   
                        <tr>
                            <td >{{ $row->phong_ban_id }}</td>
                            <td >{{ $row->ten_phong_ban }}</td>

                 </tr>
                <?php } ?>
            </table>
                         </div>
                        </div>
                        </div>            
                        

                    <!-------->                  
                     <div class="col-md-6" >
                            
                                <div class="panel panel-warning">
                        <div class="panel-heading">
                           <i class="fa fa-user fa-x"></i> Thông tin chức vụ
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

           <table class="table table-striped table-bordered table-responsive">
                <tr>
                    <th width="">Ký hiệu chức vụ</th>         
                    <th width="">Tên Chức vụ</th> 
                </tr>
                <?php foreach ($dataChucvu as $row) { ?>
                    <tr>
                        <td class="row1">{{ $row->chuc_vu_id }}</td>
                        <td class="row1" align="center">{{ $row->ten_chuc_vu }}</td>      
                         </tr>
                <?php } ?>
            </table>

                        </div>
                        </div>
                        </div>

    <!-------->                  
                     <div class="col-md-6" >
                            
                                <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-cogs fa-fw"></i> Thông tin công việc
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

           <table class="table table-striped table-bordered table-responsive">
                <tr>
                    <th width="">Ký hiệu </th>         
                    <th width="">Tên</th> 
                </tr>
                <?php foreach ($dataCongviec as $row) { ?>
                    <tr>
                        <td class="row1">{{ $row->cong_viec_id }}</td>
                        <td class="row1" align="center">{{ $row->ten_cong_viec }}</td>      
                         </tr>
                <?php } ?>
            </table>

                        </div>
                        </div>
                        </div>

    <!-------->                  
                     <div class="col-md-6" >
                            
                                <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-book fa-fw"></i> Thông tin bằng cấp
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

           <table class="table table-striped  table-responsive">
                <tr>
                    <th width="">Ký hiệu </th>         
                    <th width="">Tên</th> 
                </tr>
                <?php foreach ($dataBangcap as $row) { ?>
                    <tr>
                        <td class="row1">{{ $row->bang_cap_id }}</td>
                        <td class="row1" align="center">{{ $row->ten_bang_cap }}</td>      
                         </tr>
                <?php } ?>
            </table>

                        </div>
                        </div>
                        </div>



                        </div>

  

 </div>
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
    color: black;
}


</style>