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
            'img_auther.required' => 'You must upload an image for auther',
            
        ];
    }
}
