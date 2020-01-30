<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingUserVacancyForm extends FormRequest
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
      'name' => 'nome completo',
      'email' => 'e-mail',
      'resume' => 'currículo'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos :min caracteres',
      'max' => 'O campo :attribute ultrapassou o tamanho permitido (máx.: :max KB)',
      'mimes' => 'O formato de arquivo anexado não é permitido'
    ];
  }
}
