<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listar()
    {
        $users = User::get();
        return view('user')->with('users', $users);
    }
}
