<?php

namespace App\Http\Controllers;

use App\Models\Contribution;

class ContributionController extends Controller
{
    public function show(Contribution $contribution)
    {
        $contributions = Contribution::all();

        $projects = Contribution::where('type', 'project')->get()->sortByDesc('updated_at');
        $prs = Contribution::where('type', 'pr')->get()->sortByDesc('updated_at');
        $issues = Contribution::where('type', 'issue')->get()->sortByDesc('updated_at');

        return view('contributions', compact('projects', 'prs', 'issues'));
    }
}
