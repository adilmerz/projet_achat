<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{

    protected $fillable = [
        'id', 'nom', 'ice', 'email_pro', 'adresse', 'email_user', 'password_user', 'tel', 'role', 'portefeuille', 'valide', 'create_at', 'update_at',
     ];

    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

     protected $hidden = [
        'create_at','update_at',
     ];
}
