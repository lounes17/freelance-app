<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Mission;
use App\Models\Coverletter;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    //

    public function store(Request $request,Job $job){

        $mission=Mission::create([
            'job_id' =>$job->id,
            'validated' =>false,

        ]);

        $coverlettre=Coverletter::create([
            'mission_id' =>$mission->id,
            'content' =>$request->input('content')

        ]);

        return redirect()->route('jobs.index');


    }
}
