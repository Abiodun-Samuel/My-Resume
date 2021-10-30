<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminPageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $blogs = Blog::all();
        $innerTitle = "Dashboard";
        return view('admin.index', compact('innerTitle', 'projects', 'blogs'));
    }
}
