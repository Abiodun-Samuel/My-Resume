<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $innerTitle = "Dashboard";
        return view('admin.index', compact('innerTitle', 'projects'));
    }
    public function project()
    {
        $innerTitle = "Add Project";
        return view('admin.project', compact('innerTitle'));
    }
}
