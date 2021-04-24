<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'id', 'date_depot', 'note_fin', 'note_admin', 'note_tech','document_rep', 'id_fournisseur', 'id_appel_offre', 'create_at', 'update_at',
     ];


     const CREATED_AT = 'create_at';
     const UPDATED_AT = 'update_at';


     protected $hidden = [
        'create_at','update_at',
     ];
}
