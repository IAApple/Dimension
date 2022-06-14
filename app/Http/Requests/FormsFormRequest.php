<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'email' => 'required|max:255',
            'especificaciones' => 'required|max:255',
            'dimensiones' => 'required|max:255',            
            'referencia' => 'required|max:255',
            'tipo' => 'required|max:255',
        ];
    }
}
