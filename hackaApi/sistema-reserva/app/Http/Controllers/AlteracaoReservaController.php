<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlteracaoReserva;

class AlteracaoReservaController extends Controller
{
    public function index()
    {
        return AlteracaoReserva::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reserva_id' => 'required|integer',
            'alteracoes' => 'required|string|max:100',
            'modificado_em' => 'required|date',
        ]);

        $alteracaoReserva = AlteracaoReserva::create($validatedData);
        return response()->json($alteracaoReserva, 201);
    }

    public function show($id)
    {
        return AlteracaoReserva::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'reserva_id' => 'integer',
            'alteracoes' => 'string|max:100',
            'modificado_em' => 'date',
        ]);

        $alteracaoReserva = AlteracaoReserva::findOrFail($id);
        $alteracaoReserva->update($validatedData);

        return response()->json($alteracaoReserva, 200);
    }

    public function destroy($id)
    {
        AlteracaoReserva::findOrFail($id)->delete();
    }
}
