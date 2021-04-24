<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visibilite extends Model
{
    protected $fillable = [
        'id', 'id_appel_offre', 'id_fournisseur', 'create_at', 'update_at',
     ];


     const CREATED_AT = 'create_at';
     const UPDATED_AT = 'update_at';

     protected $hidden = [
        'create_at','update_at',
     ];
}
