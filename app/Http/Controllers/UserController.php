<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
       $users=new User;
       $users->first_name=$request->first_name;
       $users->last_name=$request->last_name;
       $users->gender=$request->gender;
       $users->phone=$request->phone;
       $users->email=$request->email;
       $users->password=$request->password;
       $users->created_at=Carbon::now();
       $users->updated_at=Carbon::now();
       $users->save();
       
       return response()->json([
            
        'message'=>'User account created sucessfully',
        'User'=>$users,
        'status'=>200,
    ]);
    
    }catch(\Exception $e){
    
        return response()->json([
    
            'message'=>'User account not created',
            'User'=>$users,
            'status'=>201,
            '4'=>$e,
        ]);
    
    
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
