<?php

namespace App\Models;


use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;
    protected $primaryKey = 'attendance_id';
     protected $fillable = [
        'attendance_id', 'status', 'student_id',
    ];
    public function calculateGrade()
{
    if ($this->days_attended >= 26) {
        $this->grade = 'A';
    } elseif ($this->days_attended >= 20) {
        $this->grade = 'B';
    } elseif ($this->days_attended >= 14) {
        $this->grade = 'C';
    } else {
        $this->grade = 'D';
    }
}
}
