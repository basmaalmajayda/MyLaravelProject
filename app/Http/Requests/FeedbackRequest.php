<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'profession' => 'required|string',
            'message' => 'required|string',
            'name_ar' => 'required|string',
            'profession_ar' => 'required|string',
            'message_ar' => 'required|string',
            'img' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'profession.required' => 'Profession is required',
            'profession.string' => 'Profession must be a string',
            'message.required' => 'Message is required',
            'message.string' => 'Message must be a string',
            'img.required' => 'You must upload an image',
            'name_ar.required' => 'Arabic Name is required',
            'name_ar.string' => 'Arabic Name must be a string',
            'profession_ar.required' => 'Arabic Profession is required',
            'profession_ar.string' => 'Arabic Profession must be a string',
            'message_ar.required' => 'Arabic Message is required',
            'message_ar.string' => 'Arabic Message must be a string',
        ];
    }
}
