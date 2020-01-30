<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingVolunteerForms extends FormRequest
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
      'volunteerName' => 'required|min:3',
      'volunteerImg' => 'mimes:jpeg,jpg,bmp,png|max:150',
      'volunteerBirth' => 'required|date',
      'volunteerEmail' => 'required|email:rfc',
      'volunteerPhone' => 'required|min:10',
      'volunteerAddress' => 'required|min:3',
      'volunteerAddressNo' => 'required|integer',
      'volunteerAddressComp' => 'max: 10',
      'volunteerZip' => 'required|size:9',
      'volunteerCity' => 'required|min:3',
      'volunteerState' => 'required|max:2',
      'volunteerCountry' => 'required',
    ];
  }
  
  public function attributes()
  {
    return [
      'volunteerName' => 'nome',
      'volunteerImg' => 'foto',
      'volunteerBirth' => 'data de nascimento',
      'volunteerEmail' => 'e-mail',
      'volunteerPhone' => 'telefone',
      'volunteerAddress' => 'endereço',
      'volunteerAddressNo' => 'número do endereço',
      'volunteerAddressComp' => 'complemento',
      'volunteerZip' => 'CEP',
      'volunteerCity' => 'cidade',
      'volunteerState' => 'estado',
      'volunteerCountry' => 'país',
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
      'date' => 'O campo :attribute deve ser uma data válida'
    ];
  }
}
