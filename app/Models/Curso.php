<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    #formar de guardar los campos de un formulario

    #forma N-1 tomando todos los campos necesarios
    // protected $fillable = ['name', 'descripcion', 'categoria'];
    //como lograr que un modelo administre una tabla en espesifico
    // protected $table = "users";

    #forma N-2 guardando todos los campos pero excluyendo 1 campo que se encarge del permiso
    protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
