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
        return false;
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

    public function store(NewProductRequest $request){

    }

    public function messages(){
        return [
            'name.required' => "O nome do produto é obrigatorio.",
            'url.required' => "A imagem é obrigatoria.",
            'url.image' => "O ficheiro tem de ser uma imagem.",
            'url.mimes' => "O ficheiro tem de de ser jpeg, png, jgp ou gif.",
            'url.max' => "O tamanho do ficheiro nao pode exceder 2MB.",
        ];
    }
}
