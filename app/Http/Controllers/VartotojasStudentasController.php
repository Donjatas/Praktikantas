<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VartotojasStudentas;

class VartotojasStudentasController extends Controller
{

    public function showRegistrationForm()
    {
        return view('registration.form');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'vardas' => 'required|string|max:50',
            'pavarde' => 'required|string|max:50',
            'el_pastas' => 'required|email|max:100|unique:vartotojas_studentas',
            'slaptazodis' => 'required|string|max:255',
            'telefono_numeris' => 'nullable|string|max:15',
            'aukstoji_mokykla' => 'nullable|string|max:100',
            'fakultetas' => 'nullable|string|max:100',
            'specialybe' => 'nullable|string|max:100',
            'kursas' => 'nullable|integer',
            'miestas' => 'nullable|string|max:50',
        ]);

        // Create a new instance of the model with the validated data
        $vartotojasStudentas = VartotojasStudentas::create([
            'vardas' => $validatedData['vardas'],
            'pavarde' => $validatedData['pavarde'],
            'el_pastas' => $validatedData['el_pastas'],
            'slaptazodis' => bcrypt($validatedData['slaptazodis']),
            'telefono_numeris' => $validatedData['telefono_numeris'],
            'aukstoji_mokykla' => $validatedData['aukstoji_mokykla'],
            'fakultetas' => $validatedData['fakultetas'],
            'specialybe' => $validatedData['specialybe'],
            'kursas' => $validatedData['kursas'],
            'miestas' => $validatedData['miestas'],
        ]);

        // You can return a response or redirect as needed
        return response()->json(['message' => 'Data saved successfully', 'data' => $vartotojasStudentas], 201);
    }
}
