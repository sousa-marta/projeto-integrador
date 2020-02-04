<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingDonationForms extends FormRequest
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
      'donationName' => 'required|min:3',
      'donationPhone' => 'required|min:10|max:13',
      'donationValue' => 'required|min:3',
      'donationStatus' => 'required'
    ];
  }

  public function attributes()
  {
    return [
      'donationName' => 'nome',
      'donationPhone' => 'celular',
      'donationValue' => 'valor da doação',
      'donationStatus' => 'status da doação'
    ];
  }


  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos :min caracteres',
    ];
  }
}
