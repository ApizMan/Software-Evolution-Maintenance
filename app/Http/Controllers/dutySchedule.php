<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Component;

class dutySchedule extends Component
{
    //
    public function render()
    {
        return view('duty_schedule.duty_schedule')->layout('layouts.model');
    }
}
