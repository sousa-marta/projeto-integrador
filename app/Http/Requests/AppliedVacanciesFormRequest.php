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
      'email' => 'required|email:rfc',
      'resume' => 'mimes:pdf|max:300'
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'nome',
      'email' => 'e-mail',
      'resume' => 'currículo'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos 3 caracteres',
      'mimes' => 'O formato de arquivo anexado não é permitido',
      'max' => 'Seu arquivo PDF ultrapassou o tamanho permitido (máx.: 300KB)'
    ];
  }
}
