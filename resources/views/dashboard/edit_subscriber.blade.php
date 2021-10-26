@extends('layout.dash')

@section('style')
<style>
/* .fc-scrollgrid {
    display: none;
} */
.margin-row {
  margin-left: 30px;
  margin-right: 30px;
}
</style>

@endsection('style')
@section('content')

  <!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->
    <div class="header">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 d-inline-block mb-0">Edit Subscriber</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/customers/subscribers">Subscriber</a></li>
                  <li class="breadcrumb-item"><a href="/customers/subscribers">Manage Subscriber</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Subscriber</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Table part -->
    <div class="margin-row">
        <div class="card">
            <!-- Card header -->
            <div class="card-header flex">
                <div class="row align-items-center" style="width: -webkit-fill-available;">
                    <div class="col">
                        <h3 class="mb-0">Subscriber Details</h3>
                    </div>
                    <a href="/customers/subscribers" class="btn btn-sm btn-default">Back to List</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3" style="display:none;">
                        <div class="form-group">
                            <label class="form-control-label" for="subscriber_id">Id</label>
                            <input type="text" class="form-control" id="subscriber_id" value="{{$subscriber->id}}" readonly placeholder="Can't input id">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="email_id">Subscriber</label>
                            <input type="email" class="form-control" id="email_id" name="email_id" value="{{$subscriber->email_id}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <button type="button" class="btn btn-default" style="float:right;" onclick="edit_subscribers()">Save Subscriber</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="success_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-primary fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Success!</strong> You Edited a new Subscriber!</span>
  <button type="button" class="close" onclick="this.parentElement.style.display='none'" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="fail_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-danger alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Fail!</strong> You failed to Edit a new Subscriber!</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="warn_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-warning alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Warning!</strong> You have to enter Subscriber!</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    function edit_subscribers(){
      if($("#email_id").val()){
        $.ajax({ 
          method:'POST',
          url:'/customers/edit_subscribers',
          data:{
            id: $("#subscriber_id").val(),
            email_id:$("#email_id").val(),
            "_token":"{{csrf_token()}}"
          },
          success: function(result) {
            console.log(result);
              if(result){
                $("#success_notify").show();
                setTimeout(() => {
                  $("#success_notify").fadeOut(3000)
                }, 3000);
              }else{
                $("#fail_notify").show();
                setTimeout(() => {
                  $("#fail_notify").fadeOut(3000)
                }, 3000);
              }
          },
          error:function(){
              console.log('error')
          }
        })
      }else{
        $("#warn_notify").show();
        setTimeout(() => {
          $("#warn_notify").fadeOut(3000)
        }, 3000);
      }
    }
  </script>
@endsection