<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class ListAppointment extends Component
{
    public function render()
    {
        if(auth()->user()->role='patient')
        {
            $appointments = Appointment::with('doctor')->where('patient_id',auth()->user()->id)->get();
        }
        else
        {
            $appointments = Appointment::with('patient')->where('doctor_id',auth()->user()->id)->get();
        }
        return view('livewire.list-appointment',[
            'appointments' => $appointments
        ]);
    }
}
