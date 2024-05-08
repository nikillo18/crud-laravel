<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function Assists(){
        return $this->hasMany(Assist::class);
    }
    use HasFactory;
    protected $fillable = [
        'id',
        'dni',
        'apellido',
        'nombre',
        'nacimiento'
    ];
}
