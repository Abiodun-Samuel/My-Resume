<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')->get();
        $innerTitle = "Projects";
        return view('admin.project.index', compact('innerTitle', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $innerTitle = "Add Project";
        return view('admin.project.create', compact('innerTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request 
        $this->validate($request, [
            'project_category' => 'required|string',
            'state' => 'required|string',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'title' => 'required|string',
            'description' => 'required|string',
            'tech_stack' => 'required',
            'tech_stack.*' => 'required|string',
            'github_link' => 'required|url',
            'project_link' => 'required|url',
        ]);

        // process and save images 
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                // process image and store
                $filename = $request->title . '-' . uniqid() . '.' . $image->extension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 350, function ($const) {
                    $const->aspectRatio();
                });

                // save image
                $path = storage_path('app/public/images/projects/' . $request->project_category . '/' . $request->title);

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                    $image_resize->save($path . '/' . $filename, 100);
                } else {
                    $image_resize->save($path . '/' . $filename, 100);
                }

                $data[] = $filename;
            }
        }
        // save to database
        $project = Project::create([
            'project_category' => $request->project_category,
            'state' => $request->state,
            'main_image' => $data[0],
            'images' => json_encode($data),
            'title' => $request->title,
            'description' => $request->description,
            'tech_stack' => json_encode($request->tech_stack),
            'project_link' => $request->project_link,
            'github_link' => $request->github_link,
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->title, '-'),
        ]);

        return back()->with('success', 'New project has been uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $innerTitle = "Edit Project";
        $project = DB::table('projects')->where('slug', $slug)->first();
        return view('admin.project.edit', compact('innerTitle', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // validate request 
        $this->validate($request, [
            'project_category' => 'required|string',
            'state' => 'required|string',
            // 'images' => 'image',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'title' => 'required|string',
            'description' => 'required|string',
            'tech_stack' => 'required',
            'tech_stack.*' => 'required|string',
            'github_link' => 'required|url',
            'project_link' => 'required|url',
        ]);

        // process and save images 
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                // process image and store
                $filename = $request->title . '-' . uniqid() . '.' . $image->extension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(500, 350, function ($const) {
                    $const->aspectRatio();
                });

                // save image
                $path = storage_path('app/public/images/projects/' . $request->project_category . '/' . $request->title);

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                    $image_resize->save($path . '/' . $filename, 100);
                } else {
                    $image_resize->save($path . '/' . $filename, 100);
                }

                $data[] = $filename;

                // save to database
                Project::where('slug', $slug)->update([
                    'project_category' => $request->project_category,
                    'state' => $request->state,
                    'main_image' => $data[0],
                    'images' => json_encode($data),
                    'title' => $request->title,
                    'description' => $request->description,
                    'tech_stack' => json_encode($request->tech_stack),
                    'project_link' => $request->project_link,
                    'github_link' => $request->github_link,
                    'user_id' => auth()->user()->id,
                    'slug' => Str::slug($request->title, '-'),
                ]);
            }
        } else {
            // save to database
            Project::where('slug', $slug)->update([
                'project_category' => $request->project_category,
                'state' => $request->state,
                'title' => $request->title,
                'description' => $request->description,
                'tech_stack' => json_encode($request->tech_stack),
                'project_link' => $request->project_link,
                'github_link' => $request->github_link,
                'user_id' => auth()->user()->id,
                'slug' => Str::slug($request->title, '-'),
            ]);
        }
        return redirect()->route('admin.project.index')->with('success', 'Project has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $path = storage_path('app/public/images/projects/' . $project->project_category . '/' . $project->title);
        if (File::exists($path)) {
            File::deleteDirectory($path);
        }
        $project->delete();
        return redirect()->route('admin.project.index')->with('success', 'Your project has been deleted successfully');
    }
}
