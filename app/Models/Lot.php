<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = [
        'id', 'description', 'id_appel_offre', 'create_at', 'update_at',
     ];


     const CREATED_AT = 'create_at';
     const UPDATED_AT = 'update_at';

     protected $hidden = [
        'create_at','update_at',
     ];
}
