@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="post" action= "user_register" enctype="multipart/form-data">
                        @csrf                    
<div class="form-group row">    
  <label for="first_name" class="col-md-4 col-form-label text-md-right">First_Name</label>
    <div class="col-md-6">
       <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">

       @error('first_name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>

<div class="form-group row"> 
  <label for="last_name" class="col-md-4 col-form-label text-md-right">Last_Name</label>   
   <div class="col-md-6">
       <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
       @error('last_name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>

<div class="form-group row">    
  <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
   <div class="col-md-6">
       <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username">
       @error('username')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>  

<div class="form-group row">    
  <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone_Number</label>
   <div class="col-md-6">
       <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
       @error('phone_number')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>    

<div class="form-group row">    
  <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
   <div class="col-md-6">
       <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email">
       @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>                           

<div class="form-group row">    
  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
   <div class="col-md-6">
       <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password">
       @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
        </div>
           </div>

<div class="form-group row"> 
    <label for="profile_Picture" class="col-md-4 col-form-label text-md-right">Profile_Picture</label>   
   <div class="col-md-6">
       <input id="profile_Picture" type="file" class="form-control-file @error('profile_Picture') is-invalid @enderror" name="profile_Picture">
       @error('profile_Picture')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
                     @enderror
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