<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employment;
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
        return new employmentResource(employment::find($id));
    }

}
