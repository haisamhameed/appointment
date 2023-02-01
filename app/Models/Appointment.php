<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(User::class,'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id');
    }
}
