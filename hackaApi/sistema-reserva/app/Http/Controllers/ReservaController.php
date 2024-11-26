<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'ambiente_id' => 'required|integer',
            'data_hora_inicio' => 'required|date_format:Y-m-d H:i:s',
            'data_hora_fim' => 'required|date_format:Y-m-d H:i:s',
            'status' => 'required|string|max:50',
        ]);

        $reserva = Reserva::create($validatedData);
        return response()->json($reserva, 201);
    }

    public function show($id)
    {
        return Reserva::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'integer',
            'ambiente_id' => 'integer',
            'data_hora_inicio' => 'date_format:Y-m-d H:i:s',
            'data_hora_fim' => 'date_format:Y-m-d H:i:s',
            'status' => 'string|max:50',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($validatedData);

        return response()->json($reserva, 200);
    }

    public function destroy($id)
    {
        Reserva::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
