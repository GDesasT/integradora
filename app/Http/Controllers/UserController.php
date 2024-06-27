<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblusuarios;

class UserController extends Controller
{
    public function index()
    {
        // Consulta 1: Listar los nombres de los usuarios
        $query1 = tblusuarios::pluck('nombre');

        // Consulta 2: Calcular el saldo máximo de los usuarios de sexo “Mujer”
        $query2 = tblusuarios::where('sexo', 'M')
            ->max('saldo');

        // Consulta 3: Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY
        $query3 = tblusuarios::whereIn('marca', ['NOKIA', 'BLACKBERRY', 'SONY'])
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 4: Contar los usuarios sin saldo o inactivos
        $query4 = tblusuarios::where('saldo', 0)
            ->orWhere('activo', 0)
            ->count();

        // Consulta 5: Listar el login de los usuarios con nivel 1, 2 o 3
        $query5 = tblusuarios::whereIn('nivel', [1, 2, 3])
            ->pluck('usuario');

        // Consulta 6: Listar los números de teléfono con saldo menor o igual a 300
        $query6 = tblusuarios::where('saldo', '<=', 300)
            ->pluck('telefono');

        // Consulta 7: Calcular la suma de los saldos de los usuarios de la compañia telefónica NEXTEL
        $query7 = tblusuarios::where('compañia', 'NEXTEL')
            ->sum('saldo');

        // Consulta 8: Contar el número de usuarios por compañía telefónica
        $query8 = tblusuarios::groupBy('compañia')
            ->selectRaw('compañia, count(*) as total')
            ->pluck('total', 'compañia');

        // Consulta 9: Contar el número de usuarios por nivel
        $query9 = tblusuarios::groupBy('nivel')
            ->selectRaw('nivel, count(*) as total')
            ->pluck('total', 'nivel');

        // Consulta 10: Listar el login de los usuarios con nivel 2
        $query10 = tblusuarios::where('nivel', 2)
            ->pluck('usuario');

        // Consulta 11: Mostrar el email de los usuarios que usan gmail
        $query11 = tblusuarios::where('email', 'like', '%@gmail.com')
            ->pluck('email');

        // Consulta 12: Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA
        $query12 = tblusuarios::whereIn('marca', ['LG', 'SAMSUNG', 'MOTOROLA'])
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 13: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG o SAMSUNG
        $query13 = tblusuarios::whereNotIn('marca', ['LG', 'SAMSUNG'])
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 14: Listar el login y teléfono de los usuarios con compañia telefónica IUSACELL
        $query14 = tblusuarios::where('compañia', 'IUSACELL')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 15: Listar el login y teléfono de los usuarios con compañia telefónica que no sea TELCEL
        $query15 = tblusuarios::where('compañia', '<>', 'TELCEL')
            ->select('usuario', 'telefono')
            ->get();

        // Retornar todas las consultas a la vista
        return view('users.index', compact(
            'query1', 'query2', 'query3', 'query4', 'query5',
            'query6', 'query7', 'query8', 'query9', 'query10',
            'query11', 'query12', 'query13', 'query14', 'query15'
        ));
    }
}
