<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblusuarios;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        try {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'telefono' => 'required|string|max:255',
                'sexo' => 'required|string|max:1',
                'marca' => 'required|string|max:255',
                'compañia' => 'required|string|max:255',
                'saldo' => 'required|numeric',
                'nivel' => 'required|integer',
                'activo' => 'required|boolean',
                'email' => 'required|email|max:255',
                'usuario' => 'required|string|max:255',
            ]);

            // Crear un nuevo usuario
            $usuario = new tblusuarios($validatedData);
            $usuario->save();

            return redirect()->back()->with('success', 'Usuario creado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un error al crear el usuario: ' . $e->getMessage());
        }
    }
    public function index()
    {
        $query1 = tblusuarios::pluck('nombre');

        $query2 = tblusuarios::where('sexo', 'M')
            ->max('saldo');

        $query3 = tblusuarios::whereIn('marca', ['NOKIA', 'BLACKBERRY', 'SONY'])
            ->select('nombre', 'telefono')
            ->get();

        $query4 = tblusuarios::where('saldo', 0)
            ->orWhere('activo', 0)
            ->count();

        $query5 = tblusuarios::whereIn('nivel', [1, 2, 3])
            ->pluck('usuario');

        $query6 = tblusuarios::where('saldo', '<=', 300)
            ->pluck('telefono');

        $query7 = tblusuarios::where('compañia', 'NEXTEL')
            ->sum('saldo');

        $query8 = tblusuarios::groupBy('compañia')
            ->selectRaw('compañia, count(*) as total')
            ->pluck('total', 'compañia');

        $query9 = tblusuarios::groupBy('nivel')
            ->selectRaw('nivel, count(*) as total')
            ->pluck('total', 'nivel');

        $query10 = tblusuarios::where('nivel', 2)
            ->pluck('usuario');

        $query11 = tblusuarios::where('email', 'like', '%@gmail.com')
            ->pluck('email');

        $query12 = tblusuarios::whereIn('marca', ['LG', 'SAMSUNG', 'MOTOROLA'])
            ->select('nombre', 'telefono')
            ->get();

        $query13 = tblusuarios::whereNotIn('marca', ['LG', 'SAMSUNG'])
            ->select('nombre', 'telefono')
            ->get();

        $query14 = tblusuarios::where('compañia', 'IUSACELL')
            ->select('usuario', 'telefono')
            ->get();

        $query15 = tblusuarios::where('compañia', '<>', 'TELCEL')
            ->select('usuario', 'telefono')
            ->get();

        $query16 = tblusuarios::where('marca', 'NOKIA')
            ->avg('saldo');

        $query17 = tblusuarios::whereIn('compañia', ['IUSACELL', 'AXEL'])
            ->select('usuario', 'telefono')
            ->get();

        $query18 = tblusuarios::where('email', 'not like', '%@yahoo.com')
            ->pluck('email');

        $query19 = tblusuarios::whereNotIn('compañia', ['TELCEL', 'IUSACELL'])
            ->select('usuario', 'telefono')
            ->get();

        $query20 = tblusuarios::where('compañia', 'UNEFON')
            ->select('usuario', 'telefono')
            ->get();

        $query21 = tblusuarios::select('marca')
            ->distinct()
            ->orderBy('marca', 'desc')
            ->pluck('marca');

        $query22 = tblusuarios::select('compañia')
            ->distinct()
            ->inRandomOrder()
            ->pluck('compañia');

        $query23 = tblusuarios::whereIn('nivel', [0, 2])
            ->pluck('usuario');

        $query24 = tblusuarios::where('marca', 'LG')
            ->avg('saldo');

        $query25 = tblusuarios::whereIn('nivel', [1, 3])
            ->pluck('usuario');

        $query26 = tblusuarios::where('marca', '<>', 'BLACKBERRY')
            ->select('nombre', 'telefono')
            ->get();

        $query27 = tblusuarios::where('nivel', 3)
            ->pluck('usuario');

        $query28 = tblusuarios::where('nivel', 0)
            ->pluck('usuario');

        $query29 = tblusuarios::where('nivel', 1)
            ->pluck('usuario');

        $query30 = tblusuarios::groupBy('sexo')
            ->selectRaw('sexo, count(*) as total')
            ->pluck('total', 'sexo');

        $query31 = tblusuarios::where('compañia', 'AT&T')
            ->select('usuario', 'telefono')
            ->get();

        $query32 = tblusuarios::select('compañia')
            ->distinct()
            ->orderBy('compañia', 'desc')
            ->pluck('compañia');

        $query33 = tblusuarios::where('activo', 0)
            ->pluck('usuario');

        $query34 = tblusuarios::where('saldo', 0)
            ->pluck('telefono');

        $query35 = tblusuarios::where('sexo', 'H')
            ->min('saldo');

        $query36 = tblusuarios::where('saldo', '>', 300)
            ->pluck('telefono');

        $query37 = tblusuarios::groupBy('marca')
            ->selectRaw('marca, count(*) as total')
            ->pluck('total', 'marca');

        $query38 = tblusuarios::where('marca', '<>', 'LG')
            ->select('nombre', 'telefono')
            ->get();

        $query39 = tblusuarios::select('compañia')
            ->distinct()
            ->orderBy('compañia', 'asc')
            ->pluck('compañia');

        $query40 = tblusuarios::where('compañia', 'UNEFON')
            ->sum('saldo');

        $query41 = tblusuarios::where('email', 'like', '%@hotmail.com')
            ->pluck('email');

        $query42 = tblusuarios::where('saldo', 0)
            ->orWhere('activo', 0)
            ->pluck('nombre');

        $query43 = tblusuarios::whereIn('compañia', ['IUSACELL', 'TELCEL'])
            ->select('usuario', 'telefono')
            ->get();

        $query44 = tblusuarios::select('marca')
            ->distinct()
            ->orderBy('marca', 'asc')
            ->pluck('marca');

        $query45 = tblusuarios::select('marca')
            ->distinct()
            ->inRandomOrder()
            ->pluck('marca');

        $query46 = tblusuarios::whereIn('compañia', ['IUSACELL', 'UNEFON'])
            ->select('usuario', 'telefono')
            ->get();

        $query47 = tblusuarios::whereNotIn('marca', ['MOTOROLA', 'NOKIA'])
            ->select('nombre', 'telefono')
            ->get();

        $query48 = tblusuarios::where('compañia', 'TELCEL')
            ->sum('saldo');

        return view('users.index', compact(
            'query1', 'query2', 'query3', 'query4', 'query5', 'query6', 'query7', 'query8', 'query9', 'query10',
            'query11', 'query12', 'query13', 'query14', 'query15', 'query16', 'query17', 'query18', 'query19', 'query20',
            'query21', 'query22', 'query23', 'query24', 'query25', 'query26', 'query27', 'query28', 'query29', 'query30',
            'query31', 'query32', 'query33', 'query34', 'query35', 'query36', 'query37', 'query38', 'query39', 'query40',
            'query41', 'query42', 'query43', 'query44', 'query45', 'query46', 'query47', 'query48'
        ));
    }
}
