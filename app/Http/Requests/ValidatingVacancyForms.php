<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingVacancyForms extends FormRequest
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
      'company' => 'required',
      'category' => 'required',
      'city' => 'required|min:3',
      'wage' => 'required|min:3',
      'email' => 'required|email:rfc',
      'phone' => 'required|min:10|max:12',
      'description' => 'required|min:30',
      'status' => 'required'
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'nome da vaga',
      'company' => 'nome da empresa',
      'category' => 'categoria',
      'city' => 'cidade',
      'wage' => 'salário',
      'email' => 'e-mail para envio de CV',
      'phone' => 'telefone para contato',
      'description' => 'descrição da vaga',
      'status' => 'status da vaga'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos 3 caracteres'
    ];
  }
}
