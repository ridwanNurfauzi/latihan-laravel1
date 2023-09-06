<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    //
    public function showAbout() {
        return view('about', [
            'isAuth' => (Auth::check())
        ]);
    }

    public function showFormTarget() {
        return view('formtarget', [
            'firstname' => request()->get('firstname'),
            'lastname' => request()->get('lastname')
        ]);
    }
}
