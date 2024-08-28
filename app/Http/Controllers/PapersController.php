<?php

namespace App\Http\Controllers;

use App\Actions\Papers\CreateNewSubmission;
use App\Http\Requests\PaperSubmissionRequest;

class PapersController extends Controller
{
    public function __construct(private CreateNewSubmission $createNewSubmission) {}

    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('call-for-papers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaperSubmissionRequest $request)
    {
        $this->createNewSubmission->execute($request);

        return to_route('call-for-papers')
            ->with('success', 'Your paper has been submitted successfully.');
    }
}
