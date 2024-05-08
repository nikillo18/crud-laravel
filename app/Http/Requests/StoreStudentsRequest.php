<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Type\Integer;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id'=> 'required|Integer|max:250',
            'dni'=> 'required|integer|',
            'apellido' => 'required|string|max:250',
            'nombre' => 'required|string|max:250',
            'asistencias' => 'required|Integer|max:250',
            'nacimiento'=> 'required |date|' 
            
        ];
    }
}
