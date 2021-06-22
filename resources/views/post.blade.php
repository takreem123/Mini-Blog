@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                    <form method="post" action= "add_post" enctype="multipart/form-data">
                        @csrf                    
<div class="form-group row">    
  <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
    <div class="col-md-6">
       <input id="title" type="text" class="form-control @error('tile') is-invalid @enderror" name="title">

       @error('title')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>

<div class="form-group row"> 
  <label for="body" class="col-md-4 col-form-label text-md-right">Body</label>   
   <div class="col-md-6">
       <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body">
       @error('body')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>                         

<div class="form-group row"> 
    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">Thumbnail</label>   
   <div class="col-md-6">
       <input id="thumbnail" type="file" class="form-control-file @error('thumbnail') is-invalid @enderror" name="thumbnail">
       @error('thumbnail')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>                     
 <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary"> Post </button>
        </div>
          </div>
           </div>                             
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection