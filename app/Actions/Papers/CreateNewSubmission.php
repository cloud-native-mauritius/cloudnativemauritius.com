<?php

namespace App\Actions\Papers;

use App\Http\Requests\PaperSubmissionRequest;
use App\Models\PaperSubmission;
use App\Notifications\PaperSubmitted;
use Illuminate\Support\Facades\Notification;

class CreateNewSubmission
{
    public function execute(PaperSubmissionRequest $request)
    {
        $path = $request
            ->file('submitter_photo')
            // Store the file in the 'submitters-photo' disk
            ->store('', 'submitters-photos');

        $form = collect($request->all())->except(['submitter_photo', '_token']);

        $form = $form->merge(['submitter_photo' => $path]);

        PaperSubmission::create($form->toArray());

        Notification::route('mail', $request->input('submitter_email'))
            ->notify(new PaperSubmitted);
    }
}
