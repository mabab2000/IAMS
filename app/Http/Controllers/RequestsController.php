<?php

namespace App\Http\Controllers;
use App\Models\Reques;
use Validator;
use Illuminate\Http\Request;

class RequestsController extends Controller
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
        $validator=Validator::mak($request->all(),[

        'letter'=>'required|mimes:pdf|max:2048',
        'recom_letter'=>'required|mimes:pdf|max:2048',
        ]);
        if($validator->fails()){
            return response->json(['error'=>$validator->errors()],401);

        }
        if($letter=$request->request('letter')&&$recom_letter=$request->request('recom_letter')){
            $name=$letter->getClientOrginalName();
            $name=$letter->getClientOrginalName();

            $save=new request;
            $save->student_id=$request->student_id;
            $save->req_name=$request->req_name;
            $save->letter=$letter;
            $save->recom_letter=$recom_letter;
            $save->description=$request->description;
            $save->created_at=Carbon::now();
            $save->updated_at=Carbon::now();
            $save->save();
            return response()->json([
            'message'=>'Your request is received sucessfully',

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
