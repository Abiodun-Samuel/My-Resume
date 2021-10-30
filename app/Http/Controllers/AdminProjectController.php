<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $innerTitle = "Projects";
        return view('admin.project.index', compact('innerTitle'));
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
            'resp_images' => json_encode(array($data[count($data) - 1], $data[count($data) - 2])),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
