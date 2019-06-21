<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BioContoller extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('cv.index', compact('users'));
    }

    public function detail($id)
    {
        $info = User::find($id);
        return view('cv.detail', compact('info'));
    }
}
