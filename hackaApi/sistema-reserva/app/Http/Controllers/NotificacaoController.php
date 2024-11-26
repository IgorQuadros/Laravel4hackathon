<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacao;

class NotificacaoController extends Controller
{
    public function index()
    {
        return Notificacao::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'mensagem' => 'required|string|max:200',
            'tipo' => 'required|string|max:50',
            'criado_em' => 'required|date',
        ]);

        $notificacao = Notificacao::create($validatedData);
        return response()->json($notificacao, 201);
    }

    public function show($id)
    {
        return Notificacao::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'integer',
            'mensagem' => 'string|max:200',
            'tipo' => 'string|max:50',
            'criado_em' => 'date',
        ]);

        $notificacao = Notificacao::findOrFail($id);
        $notificacao->update($validatedData);

        return response()->json($notificacao, 200);
    }

    public function destroy($id)
    {
        Notificacao::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
