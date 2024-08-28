<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaperSubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'submitter_name' => 'required|string|max:255',
            'submitter_email' => 'required|email',
            'submitter_bio' => 'required|string',
            'submitter_photo' => 'required',
            'submitter_company' => 'nullable|string',
            'submitter_job_title' => 'nullable|string',
        ];
    }
}
