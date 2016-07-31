<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>   
</head>
<body>
    <?php 
foreach ($data as $key => $row) {
    ?>
<div class="container" >
<div class="row">
<div class="col-md-12">
<div align="center" style="margin-bottom: 50px;">
<h2>HỒ SƠ NHÂN VIÊN</h2>
<h4>[{{$row->ho_ten}}]</h4>
</div>
<div class="tt">
<div class="tt_left">
<h3 >Thông tin cá nhân</h3>
<hr />

<table>
<tr>
<td>Mã Nhân Viên:</td>
<td>{{$row->ma_nhan_vien}}</td>
</tr>
<tr>
<td>Họ và tên:</td>
<td>{{$row->ho_ten}}</td>
</tr>
<tr>
<td>Ngày Sinh:</td>
<td>{{$row->ngay_sinh}}</td>
</tr>
<tr>
<td>Giới tính:</td>
<td>{{$row->gioi_tinh}}</td>
</tr>
<tr>
<td>Điện Thoại:</td>
<td>{{$row->dien_thoai}}</td>
</tr>
<tr>
<td>Quê Quán:</td>
<td>{{$row->dia_chi}}</td>
</tr>
<tr>
<td>Email</td>
<td>{{$row->email}}</td>

</tr>
</table>

</div>
<div class="tt_right">
<img style=" width:150px, height:200px;" src="../resources/upload/{{$row->images}}" />

</div>
</div>


<div class="col-md-12" style="margin-top: 30px;">
<h3>Thông Tin Công Việc</h3>
<hr />
</div>

<table>
<tr>
<td>Phòng Ban:</td>
<td>{{$row->ten_phong_ban}}</td>
<td>Công Việc:</td>
<td>{{$row->ten_cong_viec}}</td>
</tr>

<tr>
<td>Chức Vụ:</td>
<td>{{$row->ten_chuc_vu}}</td>
<td>Bằng Cấp:</td>
<td>{{$row->ten_bang_cap}}</td>
</tr>
<tr>
<td>Mức Lương:</td>
<td>{{$row->muc_luong_cb}}</td>
<td>Hệ Số:</td>
<td>{{$row->he_so}}</td>
</tr>
<tr>
<td>Phụ Cấp</td>
<td>{{$row->phu_cap}}</td>
<td>Ngày Vào Làm</td>
<td>{{$row->ngay_vao_lam}}</td>

</tr>
</table><br>



<div class="col-md-12" style="margin-top: 30px;">
<h3>Thông Tin Hợp Đồng</h3>
<hr />

<table >
<tr>
<td>Số Quyết Định:</td>
<td>{{$row->so_quyet_dinh}}</td>
<td>Thời hạn:</td>
<td>{{$row->loai_hop_dong}} năm</td>
</tr>
<tr>
<td>Từ ngày:</td>
<td>{{$row->tu_ngay}}</td>
<td>Đến ngày:</td>
<td>{{$row->den_ngay}}</td>
</tr>
<tr>
    <td>Ghi chú</td>
    <td>{{$row->ghi_chu}}</td>
</tr>
</table>
</div>


</div>
</div>
</div>
<?php }?>
</body>
</html>
<style>
.anh {
margin-top: 30px;
}
h2{color:red;}
body{
    min-height:1000px;
}
.name{
   padding: 2px 0px;
    font-size: 18px;
}
.info{
    padding: 2px 0px;
    font-size: 18px;
}
  * { font-family: verdana, DejaVu Sans, sans-serif;
    }
    .tt{
       position: relative;
    }
.tt_left{
    width: 65%;
    float: left;
}
.tt_right {
    float: right;
    border: 1px solid black;
    position: absolute;
    top: 80px;
    right: 0px;
}
td{
    width: 25%;
    padding: 1px 20px;
}
table{
    width:100%;
}
</style>