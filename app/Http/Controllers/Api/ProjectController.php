<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class ProjectController extends Controller
{
    public function index(){
        $projects = Portfolio::all();

        return response()->json([
            'projects' => $projects,
        ]);
    }

    public function show($slug){

        $project = Portfolio::where('slug',$slug)->first();

        if($project){
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        }else{
            return response()->json([
                'success' => false,
                'error' => 'il progetto non esiste'
            ]);
        }

    }
}
