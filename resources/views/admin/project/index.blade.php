@extends('layouts.admin_nav')

@section('content')
    <section id="projects" class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
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
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Tech</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $key => $project)
                                    <tr>
                                        <th scope="row"> {{ $key + 1 }}</th>
                                        <td>{{ count(json_decode($project->images)) }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->state }}</td>
                                        <td>
                                            @foreach (explode(',', $project->tech_stack) as $value)
                                                <p class="small p-1 bg-secondary my-1 text-white rounded d-inline-block">
                                                    {{ $value }}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a class="btn btn-primary px-2 py-0" href="{{ url($project->slug) }}">
                                                <span class="iconify" data-icon="carbon:view-filled"></span>
                                            </a>
                                            <a class="btn btn-success px-2 py-0"
                                                href="{{ route('admin.project.edit', $project->slug) }}">
                                                <span class="iconify" data-icon="fa-regular:edit"></span>
                                            </a>

                                            <form class="d-inline-block"
                                                action="{{ route('admin.project.destroy', $project->slug) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger px-2 py-0">
                                                    <span class="iconify"
                                                        data-icon="fluent:delete-24-regular"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
