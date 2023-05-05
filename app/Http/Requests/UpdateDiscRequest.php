<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscRequest extends FormRequest
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
  * @return array<string, mixed>
  */
  public function rules()
  {
    return [
      'code' => 'required|integer|digits:4',
      'mass' => 'required|integer|digits_between:3,5',
      'current_mass' => 'sometimes|integer|digits_between:3,5',
      'lot_number' => 'required',
      'grade_id' => 'required|exists:grades,id'
    ];
  }
}
