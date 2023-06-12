<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class staff extends Component
{
    //
    public function render()
    {
        $users = User::all();

        return view('livewire.staff.staff_PETAKOM', ['users' => $users])->layout('layouts.coordinator');
    }

    public function create(Request $request){
        \App\Models\User::create($request->all());
        return redirect('/staff') -> with('success', 'Your Card Success been Added!.');
    }

    public function edit($id){
        $users = \App\Models\User::find($id);
        // dd($data_card);
        return view('livewire.staff.edit_staff_PETAKOM', ['users'=>$users])->layout('./layouts.coordinator');
    }

    public function update(Request $request, $id){
        $users = \App\Models\User::find($id);
        $users -> update($request->all());
        // dd($data_card);
        return redirect('/staff') -> with('success', 'Your Card Success been Updated!.');
    }

    public function delete($id){
        $users = \App\Models\User::find($id);
        $users -> delete($users);
        // dd($data_card);
        return redirect('/staff') -> with('delete', 'Your Card Success been Deleted!.');
    }
}
