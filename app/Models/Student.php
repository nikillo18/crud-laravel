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

    public function calculateStatus()
    {
        $configuration = Configuration::first();
        if (!$configuration) {
            return 'Configuración no encontrada';
        }

        $totalClasses = $configuration->total_classes;
        $percentagePromotion = $configuration->percentage_promotion;
        $percentageRegular = $configuration->percentage_regular;

        $attendancePercentage = ($this->asisst / $totalClasses) * 100;

        if ($attendancePercentage >= $percentagePromotion) {
            return 'Promocionado';
        } elseif ($attendancePercentage >= $percentageRegular) {
            return 'Regular';
        } else {
            return 'Libre';
        }
    }
}


