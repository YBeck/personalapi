<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\Employments as employmentsResource;
use App\Http\Resources\Employment as employmentResource;

class employmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return employmentsResource::collection(employment::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        try{
            employment::findOrFail($id);     
        }
        catch(ModelNotFoundException $e){
            return response()->json(['errors' => [
                'status' => '404',
                'source' => [
                    'pointer' => $_SERVER['REQUEST_URI']
                ],
                'details' => 'Resource not found.'
            ]], 404);
        }
        return new employmentResource(employment::findOrFail($id));
    }

}
