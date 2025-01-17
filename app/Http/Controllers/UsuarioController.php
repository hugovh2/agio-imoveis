<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }

    public function showForm()
    {
        return view('registro');
    }

    public function showSobre()
    {
        return view('sobre');
    }
}
