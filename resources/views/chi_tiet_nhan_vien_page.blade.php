  <div class="row">
                <div class="col-lg-6 pull-left">
                   
                </div>
                 <div class="col-lg-6 pull-right">
                <a href="{{asset('show/thong-tin')}}/{{$id}}">    <button id="table" class="btn btn-danger active">Table <i class="fa fa-caret-down"></i></button></a>
                <a href="{{asset('showpage')}}/{{$id}}"><button id="page" class="btn btn-danger">Page <i class="fa fa-caret-down"></i></button></a> 
                <a href="{{ asset('print')}}/{{$id}}"><button id="page" class="btn btn-success">Print <i class="fa fa-print"></i></button></a>
                </div>

                <!-- /.col-lg-12 -->
            </div><br>
<?php 

$data2=json_decode($data);

foreach ($data2 as $row) 
{
?>
<div class="row page">
<div class="col-md-12">
<div align="center" style="margin-bottom: 50px;">
<h2>HỒ SƠ NHÂN VIÊN</h2>
<h4>[{{$row->ho_ten}}]</h4>
</div>
<div class="col-md-9">
<h3 >Thông tin cá nhân</h3>
<hr />
<div class="col-md-4 name">Mã Nhân Viên:</div><div class="col-md-8 info">{{$row->ma_nhan_vien}}</div>
<div class="col-md-4 name">Họ và tên:</div><div class="col-md-8 info">{{$row->ho_ten}}</div>
<div class="col-md-4 name">Ngày Sinh:</div><div class="col-md-8 info">{{$row->ngay_sinh}}</div>
<div class="col-md-4 name">Giới tính:</div><div class="col-md-8 info">
@if($row->gioi_tinh==1)
Nam
@else
Nữ
@endif
</div>
<div class="col-md-4 name">Điện Thoại:</div><div class="col-md-8 info">{{$row->dien_thoai}}</div>
<div class="col-md-4 name">Quê Quán:</div><div class="col-md-8 info">{{$row->dia_chi}}</div>
<div class="col-md-4 name">Email:</div><div class="col-md-8 info">{{$row->email}}</div>
</div>
<div class="col-md-3 pull-right anh">
<img style="border: 1px solid black;"  src="../resources/upload/{{$row->images}}" />
</div>
<div class="col-md-12" style="margin-top: 30px;">
<h3>Thông Tin Công Việc</h3>
<hr />
</div>
<div class="col-md-3 name">Phòng Ban:</div><div class="col-md-3  info">{{$row->ten_phong_ban}}</div>
<div class="col-md-3 name">Công Việc:</div><div class="col-md-3 info">{{$row->ten_cong_viec}}</div>
<div class="col-md-3 name">Chức Vụ:</div><div class="col-md-3 info">{{$row->ten_chuc_vu}}</div>
<div class="col-md-3 name">Bằng Cấp:</div><div class="col-md-3 info">{{$row->ten_bang_cap}}</div>
<div class="col-md-3 name">Mức Lương:</div><div class="col-md-3 info">{{$row->muc_luong_cb}}</div>
<div class="col-md-3 name">Hệ Số:</div><div class="col-md-3 info">{{$row->he_so}}</div>
<div class="col-md-3 name">Phụ Cấp:</div><div class="col-md-3 info">{{$row->phu_cap}}</div>
<div class="col-md-3 name">Ngày vào làm:</div><div class="col-md-3 info">{{$row->ngay_vao_lam}}</div>
<div class="col-md-12" style="margin-top: 30px;">
<h3>Thông Tin Hợp Đồng</h3>
<hr />
<div class="col-md-3 name">Số Quyết Định:</div><div class="col-md-3 info">{{$row->so_quyet_dinh}}</div>
<div class="col-md-3 name">Loại hợp đồng:</div><div class="col-md-3 info">{{$row->loai_hop_dong}} năm</div>
<div class="col-md-3 name">Từ Ngày:</div><div class="col-md-3 info">{{$row->tu_ngay}}</div>
<div class="col-md-3 name">Đến Ngày:</div><div class="col-md-3 info">{{$row->den_ngay}}</div>
<div class="col-md-3 name">Ghi chú:</div><div class="col-md-9 info">{{$row->ghi_chu}}</div>
</div>
</div>
</div>  
<?php }?> 
<br> <br>             

<style type="text/css">
.page{
	font-size: 16px;
	font-weight: bold;
	margin-bottom: 20px;
}
.page img{
	width: 180px;
	height: 200px;
	margin-top: 50px;
}
</style>