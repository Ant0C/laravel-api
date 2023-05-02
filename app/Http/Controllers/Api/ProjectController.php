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
}
