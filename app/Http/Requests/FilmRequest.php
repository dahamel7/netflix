<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required|min:5|max:100',
            'categorie' => 'required|min:5|max:64',
            'resume' => 'required|min:24|max:1048',
            'pochette' => 'required|max:1048',
            'personne_id' => 'required',
            'duree' => 'required|integer',
            'annee' => 'required|integer',
            'rating' => 'required'
        ];
    }
}
