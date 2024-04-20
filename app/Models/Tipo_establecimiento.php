<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_establecimiento extends Model
{
    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class, 'id_tipo_establecimiento');
    }
    use HasFactory;
    protected $fillable = [
        'name'
    ];
}
