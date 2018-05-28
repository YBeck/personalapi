<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\Http\Resources\Projects as projectsResource;
use App\Http\Resources\Project as projectResource;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return projectsResource::collection(projects::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new projectResource(projects::find($id));
    }

}
