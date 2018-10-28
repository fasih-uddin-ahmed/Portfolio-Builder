<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('dashboard.project.create');

    }

    public function delete($userId, $projectId)
    {
        $user = User::findOrFail($userId);

        $user->projects()->find($projectId)->delete();

        return back()->withSuccess('Project has been deleted successfully!');
    }
}
