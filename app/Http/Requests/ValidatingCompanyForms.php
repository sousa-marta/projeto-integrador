<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingCompanyForms extends FormRequest
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
      'companyName' => 'required|min:3',
      'companyLogo' => 'mimes:jpeg,jpg,bmp,png|max:150',
      'companyDescription' => 'required|min:30',
      'companyPOC' => 'required|min:3',
      'companyPhone' => 'required|min:10|max:12',
      'companyEmail' => 'required|email:rfc',
      'companyAddress' => 'required|min:3',
      'companyAddressNo' => 'required|integer',
      'companyAddressComp' => 'max: 10',
      'companyZip' => 'required|size:9',
      'companyCity' => 'required|min:3',
      'companyState' => 'required|max:2',
      'companyCountry' => 'required',
    ];
  }
  
  public function attributes()
  {
    return [
      'companyName' => 'nome da empresa',
      'companyLogo' => 'logo da empresa',
      'companyDescription' => 'resumo da empresa',
      'companyPOC' => 'nome da pessoa de contato',
      'companyPhone' => 'telefone',
      'companyEmail' => 'e-mail',
      'companyAddress' => 'endereço',
      'companyAddressNo' => 'número do endereço',
      'companyAddressComp' => 'complemento',
      'companyZip' => 'CEP',
      'companyCity' => 'cidade',
      'companyState' => 'estado',
      'companyCountry' => 'país',
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
      'size' => 'O campo :attribute deve ter :size caracteres'
    ];
  }
}
