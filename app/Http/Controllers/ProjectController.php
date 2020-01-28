<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);//resources\views\projects\index.blade.php에 있는게 나옴
    }
}
