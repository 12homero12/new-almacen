<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table="menu";
    protected $fillable=['nombre','url','icono'];
    protected $guarded=['id'];
    // protected $timestamps=false;

}
