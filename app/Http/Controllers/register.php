<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Component;

class register extends Component
{
    //
    public function render()
    {
        return view('auth.register')->layout('layouts.coordinator');
    }
}
