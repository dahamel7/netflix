<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'nom'  => 'required|min:5',
                'nomUsager'  => 'required|min:5' ,
                'prenom'  => 'required|min:5',
                'email'  => 'min:10' ,
                "role"  => 'required|min:5',
                'password'   => 'required|min:5'
            
        ];
    }
    public function message()
    {
        return[
            'nom.min' => 'Le nom doit avoir 5 caractères.',
            'nom.required'=> 'le nom est requis',
            'nomUsager.min' => 'Le lieu doit avoir minimum 5 caractères.',
            'nomUsager.required' => 'le nom d\'usager est requis',
            'email.min' => 'L email doit avoir minimum 10 caractères.',
            'role.required' => 'le role est requis',
            'role.min' => 'le role doit avoir minimum 5 caractères.',
            'password.required' => 'le mot de passe est requis',
            'password.required' => 'le mot de passe doit avoir minimum 5 caractères.',
            
        ];
    }
}
