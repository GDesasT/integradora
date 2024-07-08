<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Product;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
class norts extends Controller
{
    public function index()
    {
        // Consulta 1: Una lista de todos los detalles de la tabla de empleados.
        // $query1 = Empleado::all();
        // return view('feedback', compact('query1'));

        // // Consulta 2: Una lista de los nombres y apellidos de todos los empleados.
        // $query2 = Empleado::select('nombre', 'apellido')->get();
        // return view('feedback', compact('query2'));

        // // Consulta 3: Una lista de todos los nombres de las ciudades que aparecen en la tabla de empleados. No mostrar 2 veces un mismo nombre de ciudad.
        // $query3 = Empleado::select('ciudad')->distinct()->get();

        // Consulta 4: Una lista de los nombres de productos y precios unitarios.
        $query4 = Product::select('nombre', 'precio_unitario')->get();

        // Consulta 5: En la tabla de empleados: una lista de los detalles completos de los empleados que viven en EE.UU.
        $query5 = Empleado::where('pais', 'EE.UU')->get();

        // Consulta 6: Listar todos los pedidos que tienen un gasto de envío > 50.
        $query6 = Pedido::where('gasto_envio', '>', 50)->get();

        // Consulta 7: Listar productos (Tabla Products) cuyos valores se encuentren entre 5 y 20 dólares.
        $query7 = Product::whereBetween('precio', [5, 20])->get();

        // Consulta 8: Listar campos de la tabla productos que tengan exactamente un precio de 18, 19 y 10 dólares.
        $query8 = Product::whereIn('precio', [18, 19, 10])->get();

        // Consulta 9: Listar nombre de la empresa de todos los clientes donde el cargo es igual a Propietario.
        $query9 = Cliente::where('cargo', 'Propietario')->pluck('empresa');

        // Consulta 10: Lista de todos donde el nombre del cliente comienza con la letra "A".
        $query10 = Cliente::where('nombre', 'LIKE', 'A%')->get();

        // Consulta 11: Encontrar todos los apellidos (LastName) en la tabla Employees que contengan la letra <<s>>.
        $query11 = Empleado::where('apellido', 'LIKE', '%s%')->get();

        // Consulta 12: Lista de los nombres de clientes donde la región no está en blanco.
        $query12 = Cliente::whereNotNull('region')->pluck('nombre');

        // Consulta 13: Listar todos los campos de la tabla Suppliers cuya columna Región sea NULL.
        $query13 = Supplier::whereNull('region')->get();

        // Consulta 14: Lista de todos los productos, ordenado por precio unitario (el más barato primero).
        $query14 = Product::orderBy('precio_unitario', 'asc')->get();

        // Consulta 15: Lista de todos los productos, ordenado por precio unitario (el más caro primero).
        $query15 = Product::orderBy('precio_unitario', 'desc')->get();

        // Consulta 16: El número total de empleados. Nombre de la columna de salida "TotalEmpleados".
        $query16 = Empleado::count();

        // Consulta 17: El pedido con el menor gasto de envío, el gasto de envío promedio y el máximo gasto de envío.
        $query17_min = Pedido::min('gasto_envio');
        $query17_avg = Pedido::avg('gasto_envio');
        $query17_max = Pedido::max('gasto_envio');

        // Consulta 18: Lista de los nombres de ciudades y el número de clientes en cada ciudad.
        $query18 = Cliente::select('ciudad', DB::raw('count(*) as total_clientes'))->groupBy('ciudad')->get();

        // Consulta 19: Lista de los nombres de ciudades y el número de clientes en cada ciudad con al menos 2 clientes.
        $query19 = Cliente::select('ciudad', DB::raw('count(*) as total_clientes'))
            ->groupBy('ciudad')
            ->having('total_clientes', '>=', 2)
            ->get();

        // Consulta 20: Insertar cliente nuevo completando todos los campos de la tabla.
        $query20 = Cliente::create([
            'nombre' => 'Nuevo Cliente',
            'empresa' => 'Empresa Nueva',
            'cargo' => 'Cargo Nuevo',
            'ciudad' => 'Ciudad Nueva',
            'region' => 'Region Nueva',
            'pais' => 'Pais Nuevo',
            'telefono' => '123456789'
        ]);

        // Consulta 21: Actualizar el nombre del nuevo cliente pasando número de ID obtenido en el punto 20.
        $cliente = Cliente::find($query20->id);
        $cliente->nombre = 'Cliente Actualizado';
        $query21 = $cliente->save();

        // Consulta 22: Eliminar el cliente insertado en el punto 20.
        $query22 = Cliente::destroy($query20->id);

        // Consulta 23: Generar una lista de selección de la tabla Employees (Empleado) donde solo se genere una columna de salida y esta contenga los campos: EmployeeID, LastName y FirstName.
        $query23 = Empleado::select('EmployeeID', 'LastName', 'FirstName')->get();

        // Consulta 24: Calcular la suma de las ventas del año hasta la fecha (ytd_sales) de todos los libros de la tabla titles.
        $query24 = DB::table('titles')->sum('ytd_sales');

        // Consulta 25: Calcular el precio promedio de todos los libros de la tabla titles.
        $query25 = DB::table('titles')->avg('price');

        // Consulta 26: Mostrar el mayor valor de las ventas del año (ytd_sales) de todos los libros de la tabla titles.
        $query26 = DB::table('titles')->max('ytd_sales');

        // Consulta 27: Mostrar el mínimo valor de las ventas del año (ytd_sales) de todos los libros de la tabla titles.
        $query27 = DB::table('titles')->min('ytd_sales');

        return view('feedback', compact(
            'query1', 'query2', 'query3', 'query4', 'query5', 'query6', 'query7', 'query8', 
            'query9', 'query10', 'query11', 'query12', 'query13', 'query14', 'query15', 
            'query16', 'query17_min', 'query17_avg', 'query17_max', 'query18', 'query19', 
            'query20', 'query21', 'query22', 'query23', 'query24', 'query25', 'query26', 'query27'
        ));
    }
}
