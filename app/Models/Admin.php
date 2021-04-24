<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'id_admin', 'nom', 'email', 'pw','creatd_at','updated_at',
     ];

     protected  $guard  ="admin";



     protected $hidden = [
        'creatd_at','updated_at',
     ];
}
