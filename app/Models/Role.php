<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id_role', 'nom', 'create_at', 'update_at',
     ];


     const CREATED_AT = 'create_at';
     const UPDATED_AT = 'update_at';

     protected $hidden = [
        'create_at','update_at',
     ];
}
