<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type')->paginate(3); //se non metto paginate, per vederli tutti devo metter get()!!
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}