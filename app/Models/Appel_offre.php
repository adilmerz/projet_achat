<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appel_offre extends Model
{
    protected $fillable = [
        'id', 'date_creation', 'mode_passation', 'type_marche', 'estimation_couts', 'domaines_activite', 'categorie', 'coeff_admin', 'coeff_fin', 'coeff_tech', 'reglement', 'id_acheteur', 'created_at', 'updated_at',
     ];


     protected $hidden = [
        'created_at','updated_at',
     ];
}
