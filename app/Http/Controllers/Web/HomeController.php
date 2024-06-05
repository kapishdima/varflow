<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Locale;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        return view('pages.home', []);
    }
}
