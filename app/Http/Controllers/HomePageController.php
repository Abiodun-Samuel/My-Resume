<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $portfolio = DB::table('projects')->take(6)->inRandomOrder()->get();
        return view('index', compact('projects', 'portfolio'));
    }
}
