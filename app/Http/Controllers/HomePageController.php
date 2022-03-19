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
        $portfolio = DB::table('projects')->where('level', '=', 'Hard')->take(6)->get();
        // $portfolio = DB::table('projects')->where('level', 'CodeIgniter')->take(6)->inRandomOrder()->get();
        return view('index', compact('projects', 'portfolio'));
    }
}
