<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;
    protected $table='restaurantes';
    protected $primaryKey='ID';

    protected $fillable=['Nombre','Direccion','Telefono'];
    public $timestamps=false;
    
}
