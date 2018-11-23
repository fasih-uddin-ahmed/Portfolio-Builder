<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);
        $projects = $user->projects;

        return view('dashboard.project.index', compact('user', 'projects'));
    }

    public function create()
    {
        $project = new Project;
        return view('dashboard.project.create', compact('project'));
    }

    public function store($userId)
    {
        $rules = Project::rules();
        $projectData = $this->validate(request(), $rules);

        $user = User::findOrFail($userId);
        $user->projects()->create($projectData);

        return back()
            ->withInput()
            ->withSuccess('Project has been created successfully!');
    }

    public function edit($userId, $id)
    {
        return view('dashboard.project.edit', [
            'project' => Project::findOrFail($id)
        ]);
    }

    public function update($userId, $id)
    {
        $rules = Project::rules();
        $projectData = $this->validate(request(), $rules);

        Project::findOrFail($id)->update($projectData);

        return back()
            ->withInput()
            ->withSuccess('Project has been updated successfully!');
    }

    public function delete($userId, $projectId)
    {
        $user = User::findOrFail($userId);

        $user->projects()->find($projectId)->delete();

        return back()->withSuccess('Project has been deleted successfully!');
    }
}
