<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h1>Consultas de Usuarios</h1>

    {{-- Consulta 1: Listar los nombres de los usuarios --}}
    <h2>Consulta 1: Listar los nombres de los usuarios</h2>
    @foreach($query1 as $nombre)
        <p>{{ $nombre }}</p>
    @endforeach

    {{-- Consulta 2: Calcular el saldo máximo de los usuarios de sexo “Mujer” --}}
    <h2>Consulta 2: Saldo máximo de usuarios de sexo “Mujer”</h2>
    <p>{{ $query2 }}</p>

    {{-- Consulta 3: Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY --}}
    <h2>Consulta 3: Usuarios con teléfono NOKIA, BLACKBERRY o SONY</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($query3 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 4: Contar los usuarios sin saldo o inactivos --}}
    <h2>Consulta 4: Contar usuarios sin saldo o inactivos</h2>
    <p>{{ $query4 }}</p>

    {{-- Consulta 5: Listar el login de los usuarios con nivel 1, 2 o 3 --}}
    <h2>Consulta 5: Usuarios con nivel 1, 2 o 3</h2>
    <ul>
        @foreach($query5 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    {{-- Continuar con las demás consultas --}}

</body>
</html>
