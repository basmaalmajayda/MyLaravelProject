<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'job' => 'required|string',
            'img' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'job.required' => 'Description is required',
            'job.string' => 'Description must be a string',
            'img.required' => 'You must upload an image',
        ];
    }
}
