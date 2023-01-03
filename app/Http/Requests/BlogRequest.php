<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|string',
            'subject' => 'required|string',
            'description' => 'required|string',
            'img' => 'required',
            'auther_ar' => 'required|string',
            'title_ar' => 'required|string',
            'subject_ar' => 'required|string',
            'description_ar' => 'required|string',
            'auther' => 'required|string',
            'img_auther' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'subject.required' => 'Subject is required',
            'subject.string' => 'Subject must be a string',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
            'img.required' => 'You must upload an image for blog',
            'auther.required' => 'Auther is required',
            'auther.string' => 'Auther must be a string',
            
            'title_ar.required' => 'Arabic Title is required',
            'title_ar.string' => 'Arabic Title must be a string',
            'subject_ar.required' => 'Arabic Subject is required',
            'subject_ar.string' => 'Arabic Subject must be a string',
            'description_ar.required' => 'Arabic Description is required',
            'description_ar.string' => 'Arabic Description must be a string',
            'auther_ar.required' => 'Arabic Auther is required',
            'auther_ar.string' => 'Arabic Auther must be a string',
            'img_auther.required' => 'You must upload an image for auther',
            
        ];
    }
}
