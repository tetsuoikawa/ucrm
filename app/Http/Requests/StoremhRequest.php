<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoremhRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:25'],  
            'series' => ['required'], 
            'gender' => ['required'], 
            'head' => ['required' , 'max:30'], 
            'shoulder' => ['required' , 'max:30'],
            'arm' => ['required' , 'max:30'],
            'waist' => ['required' , 'max:30'],
            'leg' => ['required' , 'max:30'],
            'content' => ['max:100'],
        ];
    }
}
