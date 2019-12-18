<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacanciesFormRequest extends FormRequest
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
            'name' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            // 'regra' => 'mensagem'
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O :attribute precisa de pelo menos 3 caracteres'
        ];
    }
}
