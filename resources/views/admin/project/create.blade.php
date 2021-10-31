@extends('layouts.admin_nav')

@section('content')
    <section id="new_project" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="my-0 py-0 small">{{ session('success') }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <p class="my-0 py-0 small">{{ $error }}</p>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                {{-- add new projects --}}
                <div class="col-lg-9">
                    <p class="text-danger small">1. Upload at least 3 images, the first image is the main image and the last
                        2 images are for the responsive display</p>
                    <form action="{{ route('admin.project.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- category and state --}}
                        <div class="form-row mb-3">
                            <div class="col-6">
                                <label for="project_category" class="text-secondary">Category</label>
                                <select class="w-100" id="project_category" name="project_category">
                                    <option value="NodeJs">NodeJs</option>
                                    <option value="Javascript">JavaScript</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="React">React</option>
                                    <option value="CodeIgniter">CodeIgniter</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="text-secondary" for="state">State</label>
                                <select class="w-100" id="state" name="state">
                                    <option value="demo">Demo</option>
                                    <option value="live">Live</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        {{-- title and description --}}
                        <div class="form-row my-3">
                            <div class="col-6">
                                <input class="w-100" type="text" aria-placeholder="Title" placeholder="Title"
                                    name="title" value="{{ old('title') }}">
                            </div>
                            <div class="col-6">
                                <input class="w-100" type="text" aria-placeholder="Description"
                                    placeholder="Description" name="description" value="{{ old('description') }}">
                            </div>
                        </div>

                        {{-- github link and project link --}}
                        <div class="form-row my-3">
                            <div class="col-6">
                                <input class="w-100" type="text" name="project_link" placeholder="Project Link"
                                    value="{{ old('project_link') }}">
                            </div>
                            <div class="col-6">
                                <input class="w-100" type="text" name="github_link" placeholder="Github Link"
                                    value="{{ old('github_link') }}">
                            </div>
                        </div>

                        <hr>
                        {{-- tect stack --}}
                        <div class="form-row my-3">
                            <label class="control-label text-secondary">Tech Stack</label>
                            <div id="custom_button_styles">
                                <div class="tabs">
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="figma" class="tab-input">
                                        <div class="tab-box">
                                            Figma
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="photoshop" class="tab-input">
                                        <div class="tab-box">
                                            Photoshop
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="adobexd" class="tab-input">
                                        <div class="tab-box">
                                            AdobeXd
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="html5" class="tab-input">
                                        <div class="tab-box">
                                            Html5
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="css3" class="tab-input">
                                        <div class="tab-box">
                                            CSS3
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="bootstrap" class="tab-input">
                                        <div class="tab-box">
                                            Bootstrap
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="tailwind" class="tab-input">
                                        <div class="tab-box">
                                            Tailwind
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="javascript"
                                            class="tab-input">
                                        <div class="tab-box">
                                            Javascript
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="react" class="tab-input">
                                        <div class="tab-box">
                                            React
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="jquery" class="tab-input">
                                        <div class="tab-box">
                                            JQuery
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="nodejs" class="tab-input">
                                        <div class="tab-box">
                                            NodeJs
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="php" class="tab-input">
                                        <div class="tab-box">
                                            PHP
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="laravel" class="tab-input">
                                        <div class="tab-box">
                                            Laravel
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="codeigniter"
                                            class="tab-input">
                                        <div class="tab-box">
                                            CodeIgniter
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="mysql" class="tab-input">
                                        <div class="tab-box">
                                            MySQL
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="mongodb" class="tab-input">
                                        <div class="tab-box">
                                            MongoDB
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="api" class="tab-input">
                                        <div class="tab-box">
                                            API
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="npm" class="tab-input">
                                        <div class="tab-box">
                                            NPM
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="packagists"
                                            class="tab-input">
                                        <div class="tab-box">
                                            Packagists
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="cache" class="tab-input">
                                        <div class="tab-box">
                                            Cache
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="testing" class="tab-input">
                                        <div class="tab-box">
                                            Testing
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="server" class="tab-input">
                                        <div class="tab-box">
                                            Server
                                        </div>
                                    </label>
                                    <label class="tab">
                                        <input type="checkbox" name="tech_stack[]" value="security" class="tab-input">
                                        <div class="tab-box">
                                            Security
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- upload images --}}
                        <div class="form-row my-3">
                            <div class="input-group-btn">
                                <button class="btn add_component" type="button">
                                    Add Images
                                </button>
                            </div>
                        </div>

                        <div class="form-row my-3">
                            <button class="btn post_btn">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
