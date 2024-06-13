<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Locale;
use App\Models\Project;
use App\Models\Review;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $projects = Project::all();
        $reviews = Review::all();

        return view('pages.home', ["projects" => $projects, "reviews" => $reviews]);
    }
}
