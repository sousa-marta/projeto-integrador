<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingUserEditForm extends FormRequest
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
      'userImage' => 'mimes:jpeg,jpg,bmp,png|max:150',
      'userFullName' => 'required|min:3',
      'userEmail' => 'required|email:rfc',
      'userCountry' => 'required',
      'userPhone' => 'nullable|min:10|max:13',
      'userAddressStr' => 'nullable|min:3',
      'userAddressNo' => 'nullable|integer',
      'userAddressComp' => 'nullable|max: 10',
      'userAddressPC' => 'nullable|size:8'
    ];
  }
  
  public function attributes()
  {
    return [
      'userImage' => 'foto',
      'userFullName' => 'nome completo',
      'userEmail' => 'e-mail',
      'userCountry' => 'país de origem',
      'userPhone' => 'celular',
      'userAddressStr' => 'endereço',
      'userAddressNo' => 'número do endereço',
      'userAddressComp' => 'complemento',
      'userAddressPC' => 'CEP'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos :min caracteres',
      'mimes' => 'O formato de arquivo anexado não é permitido',
      'max' => 'O campo :attribute ultrapassou o tamanho permitido (máx.: :max caracteres/KB)',
      'integer' => 'O campo :attribute deve ser um número',
      'size' => 'O campo :attribute deve ter :size caracteres',
    ];
  }
}
