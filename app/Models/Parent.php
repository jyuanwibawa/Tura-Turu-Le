<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public function student(): HasOne
    {
        return $this->hasOne(Student::class, 'id', 'student_id');
    }

    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'roll',
        'email',
        'class',
        'section',
        'student_id',
        'phone_number',
        'upload',
    ];

}