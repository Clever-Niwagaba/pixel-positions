<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // $jobs = Job::where('title', 'LIKE', '%' . request('q') . '%')->get();

        return view('jobs.results', ['jobs' => $tag->jobs]);
    }
}
