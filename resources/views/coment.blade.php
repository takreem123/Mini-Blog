@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comment</div>

                <div class="card-body">
                    <form method="post" action="{{url('comment')}}">
                        @csrf      
                        <input type="hidden" name="id" value="{{$id}}">             
<div class="form-group row">    
  <label for="coment" class="col-md-4 col-form-label text-md-right">Comment</label>
    <div class="col-md-6">
       <input id="coment" type="text" class="form-control @error('coment') is-invalid @enderror" name="coment">

       @error('coment')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>

           <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary"> Save </button>
                </div>
                  </div>           
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection