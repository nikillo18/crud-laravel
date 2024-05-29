<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asisst extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'fecha', 'presente'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
