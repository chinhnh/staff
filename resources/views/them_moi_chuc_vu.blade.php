@if ((Auth::user()->role)==1)        

 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chức Vụ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">

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
<div class="col-md-12 " style="margin-bottom:30px; " > 
<form class="form-inline" action="{{ asset('storeChucvu') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                        <input class="form-control" placeholder="Key" type="text" name="chuc_vu_id"  size="29" /></div>
                    
                        <div class="form-group">
                        <input class="form-control" placeholder="Name" type="text" name="ten_chuc_vu"   size="29" /></div>
                 
                       <div class="form-group">
                    <input type="hidden" name="submit" value="add" />
                    <input class="btn btn-info" type="submit" value=":|: Thêm :|:" /></div>
                   
            </form>
</div>
        <!--***************************************************************************************************************-->    
            <?php
            //if (count($tt_chucvu)<>0)
            //{
            ?>
            <table class="table table-responsive table-striped ">
                <tr>
                    <th >Ký hiệu chức vụ</th>         
                    <th >Tên Chức vụ</th> 
                    <th >Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php foreach ($tt_chucvu as $row) { ?>
                    <tr>
                        <td >{{ $row->chuc_vu_id }}</td>
                        <td >{{ $row->ten_chuc_vu }}</td>      
                        <td ><a href="{{ asset('editChucvu')}}/{{ $row->chuc_vu_id }}"><i class="fa fa-check fa-2x"></i></a></td>
                        <td ><a href="{{ asset('deleteChucvu')}}/{{ $row->chuc_vu_id }}"><i class="fa fa-close fa-2x"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
            <?php
            //}
            ?>
       
</div>
@else 
    Đăng nhập với tài khoản Admin để tiếp tục!

@endif
<style >

    th{
        background-color: #CDCDCD;}
</style>