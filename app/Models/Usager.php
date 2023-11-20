<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usager extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'nom',
        'nomUsager',
        'prenom',
        'email',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
