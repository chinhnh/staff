  <div class="row">
                <div class="col-lg-6 pull-left">
                    <h1 class="page-header">Thông tin</h1>
                </div>
                <div class="col-lg-6 pull-right">
                <a href="{{asset('show/thong-tin')}}/{{$id}}">    <button id="table" class="btn btn-danger active">Table <i class="fa fa-caret-down"></i></button></a>
                <a href="{{asset('showpage')}}/{{$id}}"><button id="page" class="btn btn-danger">Page <i class="fa fa-caret-down"></i></button></a> 
				<a href="{{ asset('print')}}/{{$id}}"><button id="page" class="btn btn-success">Print <i class="fa fa-print"></i></button></a>
                </div>

                <!-- /.col-lg-12 -->
            </div>

        <div class="row content-page"> 
            
<div class="col-md-12">
 @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
</div>

                            <div class="col-md-12" style="margin-bottom: 20px;">
                          

                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  size="50px"/>          
                                    <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                                </form>

                            </div><br />


                            <!----------------> 

                            <div class="col-md-12" >


                                <table class="table table-striped table-bordered table-responsive">

                                    <tr style="background-color: #2c3e50;">
                                        <th></th> 
                                        <th >MÃ NV</th>
                                        <th >HỌ VÀ TÊN</th>
                                        <th >GIỚI TÍNH</th>
                                        <th >NGÀY SINH</th>
                                        <th >ĐIỆN THOẠI</th>
                                        <th >QUÊ QUÁN</th>
                                        <th >EMAIL</th>
                                        
                                        <th ></th>
                                        <th></th>
                                       


                                    </tr>
                                    <tbody>
                                        <?php
                                        foreach ($dataNhanvien as $key => $value) {
                                            ?>

                                            <tr>
                                                <td><img style="width:50px; height:50px;" src="{{ asset('resources/upload')}}/{{ $value->images }}"></td>
                                                
                                                <td>{{ $value->ma_nhan_vien}}</td>
                                                <td style="width=150px;">{{ $value->ho_ten}}</td>
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
                                                <td><a href="{{ asset('delete')}}/{{ $value->ma_nhan_vien }}"><i class="fa fa-close fa-2x"></i></a></td>
                                                 <td><button id="bt_thongtin" class="btn btn-success">Update</button></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>




                            </div>  

                            <!---->

                        

                            <!------>
                            
                                <div id="thong_tin">                       
                                @include('cap_nhat_thong_tin_nhan_vien');
                               </div>

                                <div class="col-md-12" style="text-align: center;">
                                <div class="row" >

                                    <div class="col-md-4">
                                    <div class="panel panel-danger" >         
                                    <div  class=" panel-heading" ><i class="fa fa-calendar fa-2x"></i>
                                    <a href="{{ asset('show/cong-viec')}}/{!! $id !!}"> Công việc</a>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="panel panel-info" >         
                                    <div  class=" panel-heading" >
                                    <i class="fa fa-book fa-2x"></i>
                                    <a href="{{ asset('show/hopdong')}}/{{$id}}"> Hợp đồng</a>
                                    </div>
                                    </div>
                                    </div>

                                      <div class="col-md-4">
                                    <div class="panel panel-warning" >         
                                    <div  class=" panel-heading" ><i class="fa fa-group fa-2x"></i>
                                    <a href="{{ asset('show/giadinh')}}/{!! $id !!}"> Gia đình</a>
                                    </div>
                                    </div>
                                    </div>


                                </div>   
                            </div>
                             

 <!--################################################################-->
                            <?php if ($tt == "cong-viec") {?>
                         
                                <div class="col-md-12"> <div class="panel panel-success"><div class="panel-heading " style=" text-align:center;color: blue;" >Thông tin công việc</div></div></div>
                                
                                 <?php  
                                 if(count($dataCongviec)>0) { 
                                 ?>
                                <div class="col-md-12" >
                                    <table class="table table-bordered table-responsive" >

                                <tr>
                                    <th width="10"  align="center">PHÒNG BAN</th>
                                    <th width="10"  align="center">CÔNG VIỆC</th>
                                    <th width="90"  align="center">CHỨC VỤ</th>
                                    <th width="90"  align="center">BẰNG CẤP </th>           
                                    <th width="170"  align="center">MỨC LƯƠNG </th>
                                    <th width="10"  align="center">HỆ SÔ </th>
                                    <th width="90"  align="center">PHỤ CẤP</th>
                                    <th width="90"  align="center">NGÀY LÀM</th>
                                    <th width="50"  align="center"></th>           
                                </tr>

                                    <?php
                                 
                                    foreach ($dataCongviec as $key => $value) {
                                    $phong_ban = DB::table('tbl_phongban')->join('tbl_congviec', 'tbl_phongban.phong_ban_id', '=', 'tbl_congviec.phong_ban_id')->where('ma_nhan_vien', $id)->get();
                                    $chuc_vu = DB::table('tbl_chucvu')->join('tbl_congviec', 'tbl_chucvu.chuc_vu_id', '=', 'tbl_congviec.chuc_vu_id')->where('ma_nhan_vien', $id)->get();
                                    $bang_cap = DB::table('tbl_bangcap')->join('tbl_congviec', 'tbl_bangcap.bang_cap_id', '=', 'tbl_congviec.bang_cap_id')->where('ma_nhan_vien', $id)->get();
                                    $pc_congviec = DB::table('tbl_pccongviec')->join('tbl_congviec', 'tbl_pccongviec.cong_viec_id', '=', 'tbl_congviec.cong_viec_id')->where('ma_nhan_vien', $id)->get();
                                    ?>
                                    <tr >
                                    <td class="row1" width="100" align="left"><?php foreach ($phong_ban as $keyp => $valuep) {
                                        echo $valuep->ten_phong_ban;
                                    } ?></td>

                                    <td class="row1" width="100" align="left"><?php foreach ($pc_congviec as $keyp => $valuep) {
                                        echo $valuep->ten_cong_viec;
                                    } ?></td>
                                    <td class="row1" width="100" align="left"><?php foreach ($chuc_vu as $keyp => $valuep) {
                                        echo $valuep->ten_chuc_vu;
                                    } ?></td>
                                    <td class="row1" width="100" align="left"><?php foreach ($bang_cap as $keyp => $valuep) {
                                        echo $valuep->ten_bang_cap;
                                    } ?></td>
                                    <td  class="row1" align="left">{{ $value->muc_luong_cb}}</td>
                                    <td  class="row1" align="left">{{ $value->he_so}}</td>
                                    <td  class="row1" align="left">{{ $value->phu_cap}}</td>

                                    <td  class="row1" align="left">{{ $value->ngay_vao_lam}}</td>
                                     <td><button id="bt_congviec" class="btn btn-info">Update</button></td>
                                    </tr>
                                    <?php } ?>
                                    </table>     
                                </div>
                                <?php }?>
                                <!--***********************-->  
                               
                                @if (count($dataCongviec)>0)
                                <div id="cong_viec"> @include ('cap_nhat_thong_tin_cong_viec');</div>
                                @else
                                @include ('them_moi_cong_viec');
                                @endif
                            
                                <?php } ?>
 <!--################################################################-->
 <?php if ($tt == "hopdong") {?>

<div class="col-md-12"> 
<div class="panel panel-success">
<div class="panel-heading " style=" text-align:center;color: blue;" >Thông tin hợp đồng</div>
</div>
</div>
 <?php  if(count($dataHopdong)>0) { ?>
<div class="col-md-12" >
    <table class="table table-bordered table-responsive" >
    <tr>
    <th width="10"  align="center">Số quyết định</th>
    <th width="10"  align="center">Từ ngày</th>
    <th width="90"  align="center">Đến ngày</th>
    <th width="90"  align="center">Loại hợp dồng</th>           
    <th width="170" align="center">Ghi chú</th>
    <th width="50"  align="center"></th>           
    </tr>
    @foreach ($dataHopdong as $row) 
    <tr>
        <td>{{$row->so_quyet_dinh}}</td>
        <td>{{$row->tu_ngay}}</td>
        <td>{{$row->den_ngay}}</td>
        <td>{{$row->loai_hop_dong}} Năm</td>
        <td>{{$row->ghi_chu}}</td>
        <td><a href="{{url('delHopdong')}}/{{$row->id}}"><i class="fa fa-close fa-2x"></i></a></td>
    </tr>
@endforeach
    </table>
</div>
<?php }
else{
    echo "Chưa có hợp đồng";
}
 ?>



 <?php } ?>
 <!--################################################################-->
 <?php if ($tt == "giadinh") {?>

<div class="col-md-12"> 
<div class="panel panel-success">
<div class="panel-heading " style=" text-align:center;color: blue;" >Thông tin gia đình</div>
</div>
</div>
 <?php  if(count($dataGiadinh)>0) { ?>
<div class="col-md-12" >
    <table class="table table-bordered table-responsive" >
    <tr>
    <th width="10"  align="center">Tên người thân</th>
    <th width="10"  align="center">Năm sinh</th>
    <th width="90"  align="center">Mối quan hệ</th>
    <th width="90"  align="center">Nghề nghiệp</th> 
     <th width="170" align="center">Điện THOẠI</th>          
    <th width="170" align="center">Địa chỉ</th>
     <th width="170" align="center">Ghi chú</th>
    <th width="50"  align="center"></th>           
    </tr>
    @foreach ($dataGiadinh as $row) 
    <tr>
        <td>{{$row->ten_nguoi_than}}</td>
        <td>{{$row->nam_sinh}}</td>
        <td>{{$row->moi_quan_he}}</td>
        <td>{{$row->nghe_nghiep}}</td>
        <td>{{$row->dien_thoai}}</td>
        <td>{{$row->dia_chi}}</td>
        <td>{{$row->ghi_chu}}</td>
        <td><a href="{{url('delGiadinh')}}/{{$row->id}}"><i class="fa fa-close fa-2x"></i></a></td>
    </tr>
@endforeach
    </table>
</div>
<?php }
else{
    echo "Chưa có thông tin gia đình";
}
 ?>





 <?php } ?>
  <!--################################################################-->
 </div>
                   

<style type="text/css">
 .content-page{
    margin-bottom: 100px;
 }   


</style>