<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{ 
    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'id_establecimiento');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_establecimiento',
        'resena',
        'calificacion',
        'fecha',
        'estado',
    ];
}
