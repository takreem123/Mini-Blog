@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role</div>

                <div class="card-body">
                    <form method="post" action= "role_register">
                        @csrf                    
<div class="form-group row">    
  <label for="usertype" class="col-md-4 col-form-label text-md-right">User_Type</label>
    <div class="col-md-6">
       <input id="usertype" type="text" class="form-control" name="usertype">
        </div>
           </div>
                
 <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary"> Register </button>
        </div>
          </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection