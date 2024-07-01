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

        // Consulta 7: Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL
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

        // Consulta 14: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL
        $query14 = tblusuarios::where('compañia', 'IUSACELL')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 15: Listar el login y teléfono de los usuarios con compañía telefónica que no sea TELCEL
        $query15 = tblusuarios::where('compañia', '<>', 'TELCEL')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 16: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca SONY
        $query16 = tblusuarios::where('marca', '<>', 'SONY')
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 17: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL
        $query17 = tblusuarios::where('compañia', 'TELCEL')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 18: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca MOTOROLA
        $query18 = tblusuarios::where('marca', '<>', 'MOTOROLA')
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 19: Contar el número de usuarios por marca de teléfono
        $query19 = tblusuarios::groupBy('marca')
            ->selectRaw('marca, count(*) as total')
            ->pluck('total', 'marca');

        // Consulta 20: Contar el número de usuarios por compañía telefónica
        $query20 = tblusuarios::groupBy('compañia')
            ->selectRaw('compañia, count(*) as total')
            ->pluck('total', 'compañia');

        // Consulta 21: Listar las diferentes marcas de celular en orden alfabético ascendente
        $query21 = tblusuarios::select('marca')
            ->distinct()
            ->orderBy('marca', 'asc')
            ->pluck('marca');

        // Consulta 22: Listar las diferentes compañías en orden alfabético ascendente
        $query22 = tblusuarios::select('compañia')
            ->distinct()
            ->orderBy('compañia', 'asc')
            ->pluck('compañia');

        // Consulta 23: Contar el número de usuarios por sexo
        $query23 = tblusuarios::groupBy('sexo')
            ->selectRaw('sexo, count(*) as total')
            ->pluck('total', 'sexo');

        // Consulta 24: Calcular el saldo mínimo de los usuarios de sexo “Hombre”
        $query24 = tblusuarios::where('sexo', 'H')
            ->min('saldo');

        // Consulta 25: Listar el login y teléfono de los usuarios con compañía telefónica UNEFON
        $query25 = tblusuarios::where('compañia', 'UNEFON')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 26: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca BLACKBERRY
        $query26 = tblusuarios::where('marca', '<>', 'BLACKBERRY')
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 27: Listar el login de los usuarios con nivel 3
        $query27 = tblusuarios::where('nivel', 3)
            ->pluck('usuario');

        // Consulta 28: Listar el login de los usuarios con nivel 0
        $query28 = tblusuarios::where('nivel', 0)
            ->pluck('usuario');

        // Consulta 29: Listar el login de los usuarios con nivel 1
        $query29 = tblusuarios::where('nivel', 1)
            ->pluck('usuario');

        // Consulta 30: Contar el número de usuarios por sexo
        $query30 = tblusuarios::groupBy('sexo')
            ->selectRaw('sexo, count(*) as total')
            ->pluck('total', 'sexo');

        // Consulta 31: Listar el login y teléfono de los usuarios con compañía telefónica AT&T
        $query31 = tblusuarios::where('compañia', 'AT&T')
            ->select('usuario', 'telefono')
            ->get();

        // Consulta 32: Listar las diferentes compañías en orden alfabético descendente
        $query32 = tblusuarios::select('compañia')
            ->distinct()
            ->orderBy('compañia', 'desc')
            ->pluck('compañia');

        // Consulta 33: Listar el login de los usuarios inactivos
        $query33 = tblusuarios::where('activo', 0)
            ->pluck('usuario');

        // Consulta 34: Listar los números de teléfono sin saldo
        $query34 = tblusuarios::where('saldo', 0)
            ->pluck('telefono');

        // Consulta 35: Calcular el saldo mínimo de los usuarios de sexo “Hombre”
        $query35 = tblusuarios::where('sexo', 'H')
            ->min('saldo');

        // Consulta 36: Listar los números de teléfono con saldo mayor a 300
        $query36 = tblusuarios::where('saldo', '>', 300)
            ->pluck('telefono');

        // Consulta 37: Contar el número de usuarios por marca de teléfono
        $query37 = tblusuarios::groupBy('marca')
            ->selectRaw('marca, count(*) as total')
            ->pluck('total', 'marca');

        // Consulta 38: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG
        $query38 = tblusuarios::where('marca', '<>', 'LG')
            ->select('nombre', 'telefono')
            ->get();

        // Consulta 39: Listar las diferentes compañías en orden alfabético ascendente
        $query39 = tblusuarios::select('compañia')
            ->distinct()
            ->orderBy('compañia', 'asc')
            ->pluck('compañia');

        // Consulta 40: Calcular la suma de los saldos de los usuarios de la compañía telefónica UNEFON
        $query40 = tblusuarios::where('compañia', 'UNEFON')->sum('saldo');

        // Consulta 41: Contar el número de usuarios activos
        $query41 = tblusuarios::where('activo', 1)->count();

        // Consulta 42: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL y saldo mayor a 500
        $query42 = tblusuarios::where('compañia', 'TELCEL')->where('saldo', '>', 500)->select('usuario', 'telefono')->get();

        // Consulta 43: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG y saldo menor a 100
        $query43 = tblusuarios::where('marca', '<>', 'LG')->where('saldo', '<', 100)->select('nombre', 'telefono')->get();

        // Consulta 44: Listar los diferentes niveles de usuarios en orden descendente
        $query44 = tblusuarios::select('nivel')->distinct()->orderBy('nivel', 'desc')->pluck('nivel');

        // Consulta 45: Calcular el saldo promedio de los usuarios de sexo “Hombre”
        $query45 = tblusuarios::where('sexo', 'H')->avg('saldo');

        // Consulta 46: Listar el login de los usuarios con saldo menor o igual a 200
        $query46 = tblusuarios::where('saldo', '<=', 200)->pluck('usuario');

        // Consulta 47: Contar el número de usuarios con nivel 2 y activos
        $query47 = tblusuarios::where('nivel', 2)->where('activo', 1)->count();

        // Consulta 48: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca NOKIA y compañía telefónica IUSACELL
        $query48 = tblusuarios::where('marca', '<>', 'NOKIA')->where('compañia', 'IUSACELL')->select('nombre', 'telefono')->get();

        // Retornar todas las consultas a la vista
        return view('users.index', compact(
            'query1', 'query2', 'query3', 'query4', 'query5', 'query6', 'query7', 'query8', 'query9', 'query10',
    'query11', 'query12', 'query13', 'query14', 'query15', 'query16', 'query17', 'query18', 'query19', 'query20',
    'query21', 'query22', 'query23', 'query24', 'query25', 'query26', 'query27', 'query28', 'query29', 'query30',
    'query31', 'query32', 'query33', 'query34', 'query35', 'query36', 'query37', 'query38', 'query39', 'query40',
    'query41', 'query42', 'query43', 'query44', 'query45', 'query46', 'query47', 'query48'
        ));
    }
}
