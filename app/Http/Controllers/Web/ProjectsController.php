<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectWebResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {

        $query = Project::query();

        if ($request->has('tag')) {
            $tag = $request->query('tag');
            $query->whereJsonContains('tags', $tag);
        }

        $projects = $query->get();

        return view('pages.projects', [
            'projects' => ProjectWebResource::collection($projects),
        ]);
    }

    public function show($id)
    {
        $project = Project::find($id);
        $projects = Project::all();

        return view('pages.project', [
            'project' => new ProjectWebResource($project),
            'projects' => ProjectWebResource::collection($projects),
        ]);
    }
}
