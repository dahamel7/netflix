<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmPersonne extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'personne_id'];

    public function film_personne_relations() : BelongsToMany {
        return $this->BelongsToMany();
    }

    /*
    INSERT INTO `film_personnes` (film_id, personne_id)
    VALUES (1, 1);
    */
}
