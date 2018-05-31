<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try{
            projects::findOrFail($id);     
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
         return new projectResource(projects::findOrFail($id));
    }

}
