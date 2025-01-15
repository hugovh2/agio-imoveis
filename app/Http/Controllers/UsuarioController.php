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



     // Função para processar o envio do formulário
     public function store(Request $request)
     {
         // Validação dos dados recebidos
         $validated = $request->validate([
             'user_type' => 'required|in:cpf,cnpj',
             'email' => 'required|email|unique:usuarios,email',
             'password' => 'required|min:6|max:20',
             'terms' => 'required|accepted',
         ]);

         // Criando o usuário com base no tipo de usuário selecionado
         $usuarioData = [
             'tipo_usuario' => $request->input('user_type'),
             'email' => $request->input('email'),
             'senha' => Hash::make($request->input('password')),
             'termos_aceitos' => $request->input('terms'),
         ];

         // Adiciona campos específicos com base no tipo de usuário
         if ($request->input('user_type') === 'cpf') {
             $usuarioData['cpf'] = $request->input('cpf');
             $usuarioData['nome_completo'] = $request->input('full_name');
             $usuarioData['data_nascimento'] = $request->input('birth_date');
         } else {
             $usuarioData['cnpj'] = $request->input('cnpj');
             $usuarioData['razao_social'] = $request->input('company_name');
             $usuarioData['nome_fantasia'] = $request->input('trade_name');
             $usuarioData['telefone'] = $request->input('phone');
         }

         // Criando o usuário no banco de dados
         Usuario::create($usuarioData);

         // Redireciona para uma página de sucesso ou onde você desejar
         return redirect()->route('login')->with('success', 'Usuário registrado com sucesso!');
     }
}
