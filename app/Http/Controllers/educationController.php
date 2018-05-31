<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\Educations as educationsResource;
use App\Http\Resources\Education  as educationResource;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return educationsResource::collection(Education::all());
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
            Education::findOrFail($id);     
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
        return new educationResource(Education::findOrFail($id));
    }

}
