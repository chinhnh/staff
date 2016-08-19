
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông báo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
 <div class="row repost">
<div class="col-md-12">
<table class="table table-responsive table-bordered table-striped" ng-controller="RepostCtrl">
<thead>		
<th>Title</th>
<th>Message</th>
<th>Address</th>
<th>Time</th>
<th></th>
<th></th>
</thead>
<tbody ng-repeat="row in repost" >
<td>@{{row.title}}</td>
<td>@{{row.message}}</td>
<td ng-if="row.address == 0">Android</td>
<td ng-if="row.address != 0">Web</td>
<td>@{{row.created_at}}</td>
<td><a href="{{ url('viewRepost') }}/@{{ row.id }}"><i class="fa fa-check fa-2x"></i></a></td>
<td><a href="{{ url('delRepost') }}/@{{ row.id }}"><i class="fa fa-close fa-2x"></i></a></td>
</tbody>
</table>
</div>
</div>
<button id="newpost" onclick="clickbutton()" class="btn btn-success">Create NewPost</button>
<hr>



<!-------->

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
<div class="row newpost">
<div class="col-lg-12">
                    <h3 >Viết thông báo</h3>
                </div>


<div class="col-md-12 text-left">
	  <form class="form-group" action="{{ asset('storeRepost')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" name="title" class="form-control" placeholder="Title"><br>
		<textarea class="ckeditor" name="message" class="form-control" placeholder="Message"></textarea><br>
		<input  type="submit" name="submit" class="btn btn-primary pull-right" value="create">
    </form>
</div>
</div>
<style type="text/css">
	.form-control{
		text-align: center;
	}
.newpost{
	padding-bottom: 100px;
	display: none;
}


</style>
<script type="text/javascript">
function clickbutton(){
     $('.newpost').toggle(500);
}

</script>