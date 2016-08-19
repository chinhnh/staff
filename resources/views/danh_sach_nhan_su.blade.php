<?php
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

?>

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

<body ng-app="Myapp">

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
                <a class="navbar-brand" href="index.html">Quản lý nhân sự</a>
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
                        <li><a href="{{url('auth/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li>
                            <a class="active" href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
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
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách nhân sự
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                       <!---------------------->      
                            <div class="col-md-6 pull-right" style="margin-bottom: 20px; float:right;">                                                
                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  />          
                                    <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                                </form>
                            </div><br />


                            <!------------------> 
                         


                                <table class="table table-striped table-bordered table-responsive">

                                    <tr >
                                        <th rowspan="2"></th>
                                        <th rowspan="2">MÃ NV</th>
                                        <th rowspan="2">HỌ VÀ TÊN</th>
                                        <th rowspan="2">GIỚI TÍNH</th>
                                        <th rowspan="2">NGÀY SINH</th>
                                        <th rowspan="2">ĐIỆN THOẠI</th>
                                        <th rowspan="2">QUÊ QUÁN</th>
                                        <th rowspan="2">EMAIL</th> 
                                        <th rowspan="2"></th>
                                        <th colspan="2" > THÔNG TIN</th> 
                                    </tr>
                                    <tr >
                                        <th >Nhân viên</th>
                                        <th >Công việc</th>    
                                    </tr>
                                    <tbody>
                                        <?php
                                        $data = DB::table('tbl_nhanvien')->where('nghi_viec', 0)->paginate(8);
                                        foreach ($data as $key => $value) {
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
                                                <td><a href="{{ asset('/delete/')}}/{{ $value->ma_nhan_vien }}"><i class="fa fa-remove fa-2x"></i></a></td>
                                                <td><a href="./show/thong-tin/{{ $value->ma_nhan_vien }}"><i class="fa fa-check fa-2x"></i></a></td>
                                                <td><a href="./show/cong-viec/{{ $value->ma_nhan_vien }}"><i class="fa fa-check fa-2x"></i></a></td>


                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>
                             <?php $data->setPath('./nhansu') ?>
                          <div class="" align="center">  {!! $data->render() !!}</div>
                            </div> </div>

                            </div> </div>
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
<style>td{text-align: center;}</style>