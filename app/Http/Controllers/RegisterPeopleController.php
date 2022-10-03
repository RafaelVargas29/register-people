<?php

namespace App\Http\Controllers;

use App\Models\RegisterPeople;
use Illuminate\Http\Request;

class RegisterPeopleController extends Controller
{
    public function create(){
        return view('operations/create');   
    }

    public function store(Request $request){
        $register = new RegisterPeople;

        $register->name = $request->name;
        $register->birthdate = $request->birthdate;
        $register->profession = $request->profession;
        $register->matrialstatus = $request->matrialstatus;

        $register->save();

        return redirect('/');
    }
}
