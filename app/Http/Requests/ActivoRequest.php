<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'codigo.required' => 'El código es obligatorio',
            'marca.required' => 'La marca es obligatorio',
            'modelo.required' => 'El modelo es obligatorio',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            // '*' => 'required|max:15'
            'codigo' => 'required|unique:activos|max:15',
            'marca' => 'required|unique:activos|max:15',
            'modelo' => 'required',
        ];
    }
}
