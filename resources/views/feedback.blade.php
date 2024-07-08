<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <h1>Consultas</h1>
{{-- 
    <h2>Consulta 1: Detalles de todos los empleados</h2>
    <ul>
        @foreach($query1 as $empleado)
            <li>{{ $empleado }}</li>
        @endforeach
    </ul>

    <h2>Consulta 2: Nombres y apellidos de todos los empleados</h2>
    <ul>
        @foreach($query2 as $empleado)
            <li>{{ $empleado->nombre }} {{ $empleado->apellido }}</li>
        @endforeach
    </ul>

    <h2>Consulta 3: Nombres de las ciudades de empleados (únicos)</h2>
    <ul>
        @foreach($query3 as $ciudad)
            <li>{{ $ciudad->ciudad }}</li>
        @endforeach
    </ul> --}}

    <h2>Consulta 4: Nombres de productos y precios unitarios</h2>
    <ul>
        @foreach($query4 as $producto)
            <li>{{ $producto->nombre }}: ${{ $producto->precio_unitario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 5: Empleados que viven en EE.UU.</h2>
    <ul>
        @foreach($query5 as $empleado)
            <li>{{ $empleado }}</li>
        @endforeach
    </ul>

    <h2>Consulta 6: Pedidos con gasto de envío > 50</h2>
    <ul>
        @foreach($query6 as $pedido)
            <li>{{ $pedido }}</li>
        @endforeach
    </ul>

    <h2>Consulta 7: Productos con precio entre 5 y 20 dólares</h2>
    <ul>
        @foreach($query7 as $producto)
            <li>{{ $producto->nombre }}: ${{ $producto->precio }}</li>
        @endforeach
    </ul>

    <h2>Consulta 8: Productos con precio de 18, 19 y 10 dólares</h2>
    <ul>
        @foreach($query8 as $producto)
            <li>{{ $producto->nombre }}: ${{ $producto->precio }}</li>
        @endforeach
    </ul>

    <h2>Consulta 9: Empresas de clientes con cargo igual a Propietario</h2>
    <ul>
        @foreach($query9 as $empresa)
            <li>{{ $empresa }}</li>
        @endforeach
    </ul>

    <h2>Consulta 10: Clientes cuyos nombres comienzan con la letra "A"</h2>
    <ul>
        @foreach($query10 as $cliente)
            <li>{{ $cliente->nombre }}</li>
        @endforeach
    </ul>

    <h2>Consulta 11: Apellidos de empleados que contienen la letra "s"</h2>
    <ul>
        @foreach($query11 as $empleado)
            <li>{{ $empleado->apellido }}</li>
        @endforeach
    </ul>

    <h2>Consulta 12: Nombres de clientes donde la región no está en blanco</h2>
    <ul>
        @foreach($query12 as $nombre)
            <li>{{ $nombre }}</li>
        @endforeach
    </ul>

    <h2>Consulta 13: Proveedores cuya columna Región es NULL</h2>
    <ul>
        @foreach($query13 as $supplier)
            <li>{{ $supplier }}</li>
        @endforeach
    </ul>

    <h2>Consulta 14: Productos ordenados por precio unitario (más barato primero)</h2>
    <ul>
        @foreach($query14 as $producto)
            <li>{{ $producto->nombre }}: ${{ $producto->precio_unitario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 15: Productos ordenados por precio unitario (más caro primero)</h2>
    <ul>
        @foreach($query15 as $producto)
            <li>{{ $producto->nombre }}: ${{ $producto->precio_unitario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 16: Número total de empleados</h2>
    <p>TotalEmpleados: {{ $query16 }}</p>

    <h2>Consulta 17: Pedido con el menor gasto de envío, promedio y máximo</h2>
    <p>Menor gasto de envío: {{ $query17_min }}</p>
    <p>Promedio gasto de envío: {{ $query17_avg }}</p>
    <p>Máximo gasto de envío: {{ $query17_max }}</p>

    <h2>Consulta 18: Nombres de ciudades y número de clientes en cada ciudad</h2>
    <ul>
        @foreach($query18 as $cliente)
            <li>{{ $cliente->ciudad }}: {{ $cliente->total_clientes }} clientes</li>
        @endforeach
    </ul>

    <h2>Consulta 19: Nombres de ciudades con al menos 2 clientes</h2>
    <ul>
        @foreach($query19 as $cliente)
            <li>{{ $cliente->ciudad }}: {{ $cliente->total_clientes }} clientes</li>
        @endforeach
    </ul>

    <h2>Consulta 20: Insertar nuevo cliente</h2>
    <p>Nuevo cliente insertado: {{ $query20->nombre }}</p>

    <h2>Consulta 21: Actualizar nombre del nuevo cliente</h2>
    <p>Cliente actualizado: {{ $query21 ? 'Sí' : 'No' }}</p>

    <h2>Consulta 22: Eliminar nuevo cliente</h2>
    <p>Cliente eliminado: {{ $query22 ? 'Sí' : 'No' }}</p>

    <h2>Consulta 23: Lista de empleados (EmployeeID, LastName, FirstName)</h2>
    <ul>
        @foreach($query23 as $empleado)
            <li>ID: {{ $empleado->EmployeeID }}, Apellido: {{ $empleado->LastName }}, Nombre: {{ $empleado->FirstName }}</li>
        @endforeach
    </ul>

    <h2>Consulta 24: Suma de las ventas del año hasta la fecha (ytd_sales)</h2>
    <p>Suma ytd_sales: {{ $query24 }}</p>

    <h2>Consulta 25: Precio promedio de todos los libros</h2>
    <p>Precio promedio: {{ $query25 }}</p>

    <h2>Consulta 26: Mayor valor de las ventas del año (ytd_sales)</h2>
    <p>Mayor ytd_sales: {{ $query26 }}</p>

    <h2>Consulta 27: Menor valor de las ventas del año (ytd_sales)</h2>
    <p>Menor ytd_sales: {{ $query27 }}</p>
</body>
</html>