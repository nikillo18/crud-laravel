<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'apellido',
        'nombre',
        'nacimiento',
        'año',
        'asisst',
    ];

    public function assists()
    {
        return $this->hasMany(Asisst::class);
    }

    public function incrementAsisst()
    {
        $this->increment('asisst');
    }

    
}


