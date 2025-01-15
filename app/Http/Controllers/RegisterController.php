<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_type' => 'required|in:cpf,cnpj',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6|max:20',
            'cpf' => 'nullable|digits:11|required_if:user_type,cpf',
            'full_name' => 'nullable|string|required_if:user_type,cpf',
            'birth_date' => 'nullable|date|required_if:user_type,cpf',
            'cnpj' => 'nullable|digits:14|required_if:user_type,cnpj',
            'company_name' => 'nullable|string|required_if:user_type,cnpj',
            'trade_name' => 'nullable|string|required_if:user_type,cnpj',
            'phone' => 'nullable|string|required_if:user_type,cnpj',
            'terms' => 'accepted',
        ]);

        // Criptografa a senha
        $validatedData['senha'] = Hash::make($validatedData['password']);
        unset($validatedData['password']); // Remove o campo temporário

        // Salva no banco de dados
        Usuario::create($validatedData);

        return redirect()->back()->with('success', 'Usuário registrado com sucesso!');
    }
}
