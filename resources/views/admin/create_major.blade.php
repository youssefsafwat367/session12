@extends('adminlte::page')
@section('title', 'User')
@section('content')
<style>
  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#upload {
opacity: 0;
}

#upload-label {
position: absolute;
top: 50%;
left: 1rem;
transform: translateY(-50%);
}

.image-area {
border: 2px dashed rgba(255, 255, 255, 0.7);
padding: 1rem;
position: relative;
}

.image-area::before {
content: 'Uploaded image result';
color: #fff;
font-weight: bold;
text-transform: uppercase;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
font-size: 0.8rem;
z-index: 1;
}

.image-area img {
z-index: 2;
position: relative;
}
</style>
  <div class="mask d-flex align-items-center h-90 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-9">
              <h2 class="text-uppercase text-center mb-3">Create Major</h2>        
              <form  action="{{route('Majors.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-6">
                    <label class="form-label" for="form3Example1cg">Major Title</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="title"/>
                </div>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <br>
                                                <label for="inputfullname" class="col-lg-6 control-label">Major Image </label>

                                            <div class="container py-5">

                                        
                                            
                                            
                                                <div class="row py-4">
                                                    <div class="col-lg-6 mx-auto">
                                            
                                                        <!-- Upload image input-->
                                                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                            <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="image">
                                                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                                            <div class="input-group-append">
                                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                            </div>
                                                        </div>
                                                        <!-- Uploaded image area-->
                                                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                            
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                @error('image')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                  </div>
                                                @enderror
                <div class="d-flex justify-content-center">
                  <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Create Major">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    
    /*  ==========================================
        SHOW UPLOADED IMAGE
    * ========================================== */
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );
    
    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
      var input = event.srcElement;
      var fileName = input.files[0].name;
      infoArea.textContent = 'File name: ' + fileName;
    }
    
    </script>
@endsection
