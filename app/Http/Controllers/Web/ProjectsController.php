<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectWebResource;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $projects = Project::all();

        return view('pages.projects', [
            'projects' => ProjectWebResource::collection($projects),
        ]);
    }

    public function show($id)
    {
        $project = Project::find($id);

        return view('pages.project', [
            'project' => new ProjectWebResource($project),
        ]);
    }
}
