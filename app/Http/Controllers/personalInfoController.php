<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInfo as InfoModel;
use App\Http\Resources\PersonalInfo as InfoResource;

class personalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new InfoResource(InfoModel::find(1));
    }

}
