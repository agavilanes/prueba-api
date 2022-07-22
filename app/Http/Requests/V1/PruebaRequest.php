<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PruebaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'usuario'=>'required|max:250',
            'primer_nombre'=>'required|max:250',
            'segundo_nombre'=>'required|max:250',
            'primer_apellido'=>'required|max:250',
            'segundo_apellido'=>'required|max:250',
            'id_departamento'=>'required',
            'id_cargo'=>'required',
            'activo'=>'required|max:1'
        ];
    }
}
