<?php

namespace App\Http\Controllers;

use App\Models\CFPSubmission;
use Illuminate\Http\Request;

class CFPSubmissionController extends Controller
{
    public function show()
    {
        return view('cfp');
    }

    public function create(Request $request)
    {

        CFPSubmission::create([
            'name' => request('name'),
            'company' => request('company'),
            'jobtitle' => request('jobTitle'),
            'bio' => request('bio'),
            'email' => request('email'),
            'title' => request('title'),
            'extract' => request('extract'),
            'confirmed' => false,
        ]);

        return redirect('/');
    }
}
