<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatingCourseForms extends FormRequest
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
      'courseName' => 'required|min:3',
      'courseDescription' => 'required|min:30',
      'courseDuration' => 'required|integer|min:1|max:12',
      'courseStart' => 'required|date',
      'courseEnd' => 'required|date',
      'courseCategory' => 'required',
      'courseCompany' => 'required',
      'courseStatus' => 'required'
    ];
  }

  public function attributes()
  {
    return [
      'courseName' => 'nome do curso',
      'courseDescription' => 'descrição do curso',
      'courseDuration' => 'duração do curso',
      'courseStart' => 'data de início do curso',
      'courseEnd' => 'data de término do curso',
      'courseCategory' => 'categoria',
      'courseCompany' => 'nome da empresa',
      'courseStatus' => 'status do curso'
    ];
  }

  public function messages()
  {
    return [
      // 'regra' => 'mensagem'
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa de pelo menos 3 caracteres',
      'max' => 'O campo :attribute ultrapassou o tamanho permitido (máx.: :max caracteres/KB)',
      'date' => 'O campo :attribute deve ser uma data válida'
    ];
  }
}
