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
              <h6 class="h2 d-inline-block mb-0">Hero Setting</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item">Website Setting</li>
                  <li class="breadcrumb-item active" aria-current="page">Hero Setting</li>
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
                        <h3 class="mb-0">Hero Details</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="col-md-6"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="hero_title1">Hero title1</label>
                            <input type="text" class="form-control" id="hero_title1" placeholder="Enter Title" onchange="set_hero_title($(this),1)" value="{{$homepage_setting->hero_title1}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="">Description</label>
                            <textarea class="form-control" id="hero_description1" rows="3" onchange="set_hero_text($(this),1)">{{$homepage_setting->hero_text1}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hero_image_upload1" name="hero_image_upload1" onchange="preview(event,$(this),1)">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class='box' style='position:relative'>
                        <img style='width:300px;' src="{{asset('public/upload/website-setting-images/'.$homepage_setting->hero_image1)}}" alt='Image placeholder'>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="hero_title2">Hero title2</label>
                            <input type="text" class="form-control" id="hero_title2" placeholder="Enter Title" onchange="set_hero_title($(this),2)" value="{{$homepage_setting->hero_title2}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-labe2" for="">Description</label>
                            <textarea class="form-control" id="hero_description2" rows="3" onchange="set_hero_text($(this),2)">{{$homepage_setting->hero_text2}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hero_image_upload2" name="hero_image_upload2" onchange="preview(event,$(this),2)">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class='box' style='position:relative'>
                        <img style='width:300px;' src="{{asset('public/upload/website-setting-images/'.$homepage_setting->hero_image2)}}" alt='Image placeholder'>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="hero_title3">Hero title3</label>
                            <input type="text" class="form-control" id="hero_title3" placeholder="Enter Title" onchange="set_hero_title($(this),3)" value="{{$homepage_setting->hero_title3}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="">Description</label>
                            <textarea class="form-control" id="hero_description3" rows="3" onchange="set_hero_text($(this),3)">{{$homepage_setting->hero_text3}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hero_image_upload3" name="hero_image_upload3" onchange="preview(event,$(this),3)">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class='box' style='position:relative'>
                        <img style='width:300px;' src="{{asset('public/upload/website-setting-images/'.$homepage_setting->hero_image3)}}" alt='Image placeholder'>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="hero_title1">Hero title4</label>
                            <input type="text" class="form-control" id="hero_title4" placeholder="Enter Title" onchange="set_hero_title($(this),4)" value="{{$homepage_setting->hero_title4}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="">Description</label>
                            <textarea class="form-control" id="hero_description4" rows="3" onchange="set_hero_text($(this),4)">{{$homepage_setting->hero_text4}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hero_image_upload4" name="hero_image_upload4" onchange="preview(event,$(this),4)">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class='box' style='position:relative'>
                        <img style='width:300px;' src="{{asset('public/upload/website-setting-images/'.$homepage_setting->hero_image4)}}" alt='Image placeholder'>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="hero_title5">Hero title5</label>
                            <input type="text" class="form-control" id="hero_title5" placeholder="Enter Title" onchange="set_hero_title($(this),5)" value="{{$homepage_setting->hero_title5}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="">Description</label>
                            <textarea class="form-control" id="hero_description5" rows="3" onchange="set_hero_text($(this),5)">{{$homepage_setting->hero_text5}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hero_image_upload5" name="hero_image_upload5" onchange="preview(event,$(this),5)">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class='box' style='position:relative'>
                        <img style='width:300px;' src="{{asset('public/upload/website-setting-images/'.$homepage_setting->hero_image5)}}" alt='Image placeholder'>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="success_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-primary fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Success!</strong> You added a new material!</span>
  <button type="button" class="close" onclick="this.parentElement.style.display='none'" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="fail_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-danger alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Fail!</strong> You failed to add a new material!</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="warn_notify" style="display:none;position:absolute;right:30px;top:70px;" class="alert alert-warning alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Warning!</strong> You have to enter material name!</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    function preview(e,obj,id){
      var formData = new FormData();
        formData.append('upload_files', e.target.files[0]);
        formData.append('id','hero_image'+id);
        $.ajax({
          method:'POST',
          url:'/websetting/save_hero_image',
          data: formData,
          processData: false,
          contentType: false,
          success: function(result) {console.log(result);
            if(result){
              obj.parent().parent().next().html("");
              obj.parent().parent().next().append("<div class='box' style='position:relative'><img style='width:300px;' src='"+URL.createObjectURL(e.target.files[0])+"' alt='Image placeholder'></div>");
            }
          },
          error:function(error){
              console.log(error)
          }
      });
    }

    function set_hero_title(obj, id){
      $.ajax({ 
        method:'POST',
        url:'/websetting/save_hero_title',
        data:{
          hero_title:"hero_title"+id,
          hero_title_val:obj.val(),
          "_token":"{{csrf_token()}}"
        },
        success: function(result) {
            // alert(result);
        },
        error:function(){
            console.log('error')
        }
      })
    }

    function set_hero_text(obj, id){alert(id)
      $.ajax({ 
        method:'POST',
        url:'/websetting/save_hero_text',
        data:{
          hero_text:"hero_text"+id,
          hero_text_val:obj.val(),
          "_token":"{{csrf_token()}}"
        },
        success: function(result) {
            // alert(result);
        },
        error:function(){
            console.log('error')
        }
      })
    }

  </script>
@endsection