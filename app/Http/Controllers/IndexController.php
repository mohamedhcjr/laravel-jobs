<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $jobs = Job::all();
        return view('job/index', ["pageT" => "Home"]);
    }
}
