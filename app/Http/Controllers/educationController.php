<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
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
        return new educationResource(Education::find($id));
    }

}
