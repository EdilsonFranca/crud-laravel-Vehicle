<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'brand'             => 'required|max:100',
            'model'             => 'required|max:100',
            'year_manufacture'  => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'board'             => 'required|max:8',
        ];
    }

    public function messages(): array
    {
        return [
            'brand.required'             => 'Este campo é obrigatório',
            'brand.max'                  => 'Tamanho máximo de 100 Caractere',
            'model.required'             => 'Este campo é obrigatório',
            'model.max'                  => 'Tamanho máximo de 100 Caractere',
            'year_manufacture.required'  => 'Este campo é obrigatório',
            'year_manufacture.min'       => 'O ano de fabricação deve ser apos 1990',
            'year_manufacture.max'       => 'O ano de fabricação deve ser antes de '.(date('Y')+1),
            'board.required'             => 'Este campo é obrigatório',
        ];
    }

}
