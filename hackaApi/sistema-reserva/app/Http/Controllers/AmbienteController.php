<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;

class AmbienteController extends Controller
{
    public function index()
    {
        return Ambiente::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100',
            'tipo' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'hora_funcionamento' => 'required|date_format:H:i',
            'descricao' => 'required|string|max:100',
        ]);

        $ambiente = Ambiente::create($validatedData);
        return response()->json($ambiente, 201);
    }

    public function show($id)
    {
        return Ambiente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:100',
            'tipo' => 'string|max:50',
            'status' => 'string|max:50',
            'hora_funcionamento' => 'date_format:H:i',
            'descricao' => 'string|max:100',
        ]);

        $ambiente = Ambiente::findOrFail($id);
        $ambiente->update($validatedData);

        return response()->json($ambiente, 200);
    }

    public function destroy($id)
    {
        Ambiente::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
