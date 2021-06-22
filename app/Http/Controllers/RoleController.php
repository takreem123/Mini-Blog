<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
    public function role(){
        return view('role');
      }
     public  function register_role(Request $req) {
          $role_obj = new Role;
    
          $role_obj->usertype = $req->usertype;
          // save data
          $role_obj->save();
    
          return redirect('role');
        }
}
