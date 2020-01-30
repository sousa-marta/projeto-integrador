<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingUserRegisterForm extends FormRequest
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
      'location_id' => 'required',
      'email' => 'required|email:rfc',
      'password' => 'required|min:8|max:20'
    ];
  }
  
  public function attributes()
  {
    return [
      'name' => 'nome',
      'location_id' => 'país de origem',
      'email' => 'e-mail',
      'password' => 'senha'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos :min caracteres',
      'max' => 'O campo :attribute ultrapassou o tamanho permitido (máx.: :max caracteres/KB)'
    ];
  }
}
