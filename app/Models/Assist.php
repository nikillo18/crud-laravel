<?php

namespace App\Models;

use App\Http\Controllers\StudentsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    public function Students(){
        return $this->belongsTo(StudentsController::class);
    }
    use HasFactory;
}
