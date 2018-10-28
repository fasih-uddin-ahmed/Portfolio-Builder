@extends('dashboard.index')

@section('content')
    @include('dashboard.partials._message')
    <div class="card">
        <div class="card-header font-weight-bold">
            User Project
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>id#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Technology</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{str_limit($project->description, 20)}}</td>
                            <td>{{str_limit($project->technology, 20)}}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-wrench fa-fw"></i>Actions
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="fa fa-edit fa-fw"></i>Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#projectModal-{{$project->id}}" href="#"><i class="fa fa-eye fa-fw"></i>View</a>
                                        <a class="dropdown-item" href="{{route('project_delete', [auth()->user()->id, $project->id] )}}"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @push('project-modal')
                            @include('dashboard.project._modal', ['project' => $project])
                        @endpush
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stack('project-modal')
@endsection

