<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppliedVacanciesFormRequest extends FormRequest
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
      'name' => 'required|min:3',
      'resume' => 'mimes:pdf'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O :attribute precisa de pelo menos 3 caracteres',
      'mimes' => 'O formato de arquivo anexado não é permitido'
    ];
  }
}
