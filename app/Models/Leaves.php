<?php

namespace App\Models;

use App\Models\Leaves;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leaves extends Model
{
    use HasFactory;
    protected $primaryKey = 'leave_id';
     protected $fillable = [
        'leave_id','student_id','reason','status','from','to',
    ];
}
