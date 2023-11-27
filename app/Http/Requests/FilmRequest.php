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
            'titre' => 'required|min:3|max:100',
            'categorie' => 'required|min:5|max:64',
            'resume' => 'required|min:24|max:1048',
            'pochette' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'personnes_id' => 'required',
            'duree' => 'required|integer',
            'annee' => 'required|integer',
            'rating' => 'required'
        ];
    }
    public function message() {
        return [
            'titre.required' => 'Le champs du titre est requis.',
            'titre.min' => 'Le titre doit avoir un minimum de 3 caractères.',
            'titre.max' => 'Le titre ne doit pas avoir plus de 100 caractères.',

            'categorie.required' => 'Le champs de la catégorie est requis.',
            'categorie.min' => 'La catégorie doit avoir un minimum de 5 caractères.',
            'categorie.max' => 'La catégorie ne doit pas avoir plus de 64 caractères.',


            'pochette.mimes' => 'Le type de fichier n\'est pas reconnu (png, jpeg, jpg, gif).',
            'pochette.max' => 'Latailledel\'imagenepeutpasdépasser4096Kb.'
        ];
        
    }
}
