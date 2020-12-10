<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewProductRequest extends FormRequest
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
            'name' => 'required',
            'url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'nome obrigatorio',
            'url.required' => 'img obrigatorio',
            'url.image' => 'img',
            'url.mimes' => 'mimes',
            'url.max' => 'max 2048',
        ];
    }
}
