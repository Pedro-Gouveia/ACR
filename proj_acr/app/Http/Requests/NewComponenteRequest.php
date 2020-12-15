<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewComponenteRequest extends FormRequest
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
            'nome' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png|max:2048'   
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Insira o nome do Componente.',
            'img.required' => 'Insira uma imagem.',
            'img.image' => 'O ficheiro submetido não é uma imagem.',
            'img.mimes' => 'Tipos de imagem suportados: JPG, JPEG e PNG.',
            'img.max' => 'O ficheiro não pode exceder 2MB.',
        ];
    }
}
