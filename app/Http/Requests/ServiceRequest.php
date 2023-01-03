<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'description' => 'required|string',
            'name_ar' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => 'required|string',
            'title' => 'required|string',
            'img' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
            'img.required' => 'You must upload an image',
            'name_ar.required' => 'Arabic Name is required',
            'name_ar.string' => 'Arabic Name must be a string',
            'description_ar.required' => 'Arabic Description is required',
            'description_ar.string' => 'Arabic Description must be a string',
            'title_ar.required' => 'Arabic Title is required',
            'title_ar.string' => 'Arabic Title must be a string',
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
        ];
    }
}
