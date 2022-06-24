<?php

namespace App\Http\Requests;

use App\Rules\AdocaoUnicaPet;
use Illuminate\Foundation\Http\FormRequest;

class AdocaoRequest extends FormRequest
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
            "email" => ['required', 'email'],
            "valor" => ['required', 'numeric', 'between:10,100'],
            "pet_id" => ['required', 'int', 'exists:pets,id'],
        ];
    }
}

//new AdocaoUnicaPet($request->input('pet_id',0))
