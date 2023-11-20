<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    protected $fillable = ['titre','categorie', 'resume', 'pochette', 'personne_id', 'duree', 'annee', 'rating'];

    public function realisateur() : BelongsTo {
        return $this->belongsTo(Personne::class);
    }
}
