
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông báo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
 <div class="row repost">
<div class="col-md-12">
<div class="panel panel-info">
    <div class="panel-heading">
      Date: {{$data['created_at']}} | 
@if($data['address']==0)
Address: Android
@else
Address: Web
@endif  
<div class="panel-title">{{ $data['title'] }}</div>
<a class="pull-right" href="{{ url('delRepost') }}/{{ $data['id'] }}"><i class="fa fa-close fa-2x"></i></a>
    </div>
<div class="panel-body">{!! $data['message'] !!}</div>

</div>



</div>
</div>
