<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse_lot extends Model
{
    protected $fillable = [
        'id', 'reponse', 'id_lot','id_offre', 'create_at', 'update_at',
     ];


     const CREATED_AT = 'create_at';
     const UPDATED_AT = 'update_at';

     protected $hidden = [
        'create_at','update_at',
     ];
}
