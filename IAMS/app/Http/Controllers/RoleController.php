<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Carbon\Carbon;

class RoleController extends Controller
{
    public function store(request $request)
    {
        
                   
           try{
        $role= new Role;
            $role->role_name= $request->role_name;
            $role->role_description= $request->role_description;
            $role->created_at=Carbon::now();
            $role->updated_at=Carbon::now();
        // add other fields
        $role->save();
    
        return response()->json([

            'message'=>'Role created sucessfully',
            'role'=>$role,
            'status'=>200,
        ]);
        
        }catch(\Exception $e){
        
            return response()->json([
        
                'message'=>'student not created',
                'Role'=>$role,
                'status'=>201,
                '4'=>$e,
            ]);
        
        
        }
    }
}
