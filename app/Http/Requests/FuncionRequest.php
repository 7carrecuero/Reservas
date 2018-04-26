<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionRequest extends FormRequest
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
            'nombre' => 'required',
            'fecha' => 'date|required',
            'resumen' => 'required|max:100',
            'precio' => 'numeric|required',
            'foto' => 'image|mimes:jpg,jpeg,png'
        ];
    }
}
