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

                    <!-------------------------------------------------------------------------------------------------------------------->      
                    <div class="col-md-12" style="margin-bottom: 20px;">                                                
                        <form class="form-inline" method="post" action="{{asset('search')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="form-control" placeholder="nhập tên" name="name"  size="50px"/>          
                            <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                        </form>
                    </div><br />


                    <!--------------------------------------------------------------------------------------------------------------------> 



                    <table class="table table-striped table-bordered table-responsive">

                        <tr style="background-color: #2c3e50;">
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
                        <tr style="background-color: #2c3e70;">
                            <th >Nhân viên</th>
                            <th >Công việc</th>    
                        </tr>
                        <tbody>
                            <?php
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