<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    use HasFactory;
    protected $table='platos';
    protected $primaryKey='ID';

    protected $fillable=['Id_restaurante','Nombre','Precio','Stock','Imagen'];
    public $timestamps=false;
    


public function restaurante(){
    return $this->hasOne(Restaurante::class,'ID','Id_restaurante');
}
    
}


