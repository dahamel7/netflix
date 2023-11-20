<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
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
        'nom' => 'required|min:5',
        'dateNaissance' => 'required|date',
        'lieuNaissance' => 'max:255',
        'type' => 'required|max:25',
        'photo' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',        
               
        ];
    }

    public function message()
    {
        return[
            'nom.min' => 'Le nom doit avoir 5 caractères.',
            'nom.required'=> 'le nom est requis',
            'lieuNaissance.max' => 'Le lieu doit avoir maximum 255 caractères.',
            'type.required' => 'le type est requis',
            'photo.required' => 'Le type de fichier n\' est pas reconnu.',
            'photo.required' => 'la photo est requis',
            'photo.max' => 'la photo doit avoir maximum 1080 catactères.'

        ];
    }
}
