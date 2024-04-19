<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    
    public function tipoEstablecimiento()
    {
        return $this->belongsTo(Tipo_establecimiento::class, 'id_tipo_establecimiento');
    }
    public function resenas()
    {
        return $this->hasMany(Resena::class, 'id_establecimiento');
    }
    protected $fillable = [
        'id_tipo_establecimiento',
        'name',
        'direccion',
        'descripcion',
        'url_imagen',
    ];
}
