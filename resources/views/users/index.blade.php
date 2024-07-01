<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Users Queries</title>
</head>
<body>
    <h1>Resultados de las Consultas</h1>

    <h2>Consulta 1: Listar los nombres de los usuarios</h2>
    <ul>
        @foreach($query1 as $nombre)
            <li>{{ $nombre }}</li>
        @endforeach
    </ul>

    <h2>Consulta 2: Calcular el saldo máximo de los usuarios de sexo “Mujer”</h2>
    <p>{{ $query2 }}</p>

    <h2>Consulta 3: Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY</h2>
    <ul>
        @foreach($query3 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 4: Contar los usuarios sin saldo o inactivos</h2>
    <p>{{ $query4 }}</p>

    <h2>Consulta 5: Listar el login de los usuarios con nivel 1, 2 o 3</h2>
    <ul>
        @foreach($query5 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 6: Listar los números de teléfono con saldo menor o igual a 300</h2>
    <ul>
        @foreach($query6 as $telefono)
            <li>{{ $telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 7: Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL</h2>
    <p>{{ $query7 }}</p>

    <h2>Consulta 8: Contar el número de usuarios por compañía telefónica</h2>
    <ul>
        @foreach($query8 as $compania => $total)
            <li>{{ $compania }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 9: Contar el número de usuarios por nivel</h2>
    <ul>
        @foreach($query9 as $nivel => $total)
            <li>Nivel {{ $nivel }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 10: Listar el login de los usuarios con nivel 2</h2>
    <ul>
        @foreach($query10 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 11: Mostrar el email de los usuarios que usan gmail</h2>
    <ul>
        @foreach($query11 as $email)
            <li>{{ $email }}</li>
        @endforeach
    </ul>

    <h2>Consulta 12: Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA</h2>
    <ul>
        @foreach($query12 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 13: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG o SAMSUNG</h2>
    <ul>
        @foreach($query13 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 14: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL</h2>
    <ul>
        @foreach($query14 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 15: Listar el login y teléfono de los usuarios con compañía telefónica que no sea TELCEL</h2>
    <ul>
        @foreach($query15 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 16: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca SONY</h2>
    <ul>
        @foreach($query16 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 17: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL</h2>
    <ul>
        @foreach($query17 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 18: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca MOTOROLA</h2>
    <ul>
        @foreach($query18 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 19: Contar el número de usuarios por marca de teléfono</h2>
    <ul>
        @foreach($query19 as $marca => $total)
            <li>{{ $marca }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 20: Contar el número de usuarios por compañía telefónica</h2>
    <ul>
        @foreach($query20 as $compania => $total)
            <li>{{ $compania }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 21: Listar las diferentes marcas de celular en orden alfabético ascendente</h2>
    <ul>
        @foreach($query21 as $marca)
            <li>{{ $marca }}</li>
        @endforeach
    </ul>

    <h2>Consulta 22: Listar las diferentes compañías en orden alfabético ascendente</h2>
    <ul>
        @foreach($query22 as $compania)
            <li>{{ $compania }}</li>
        @endforeach
    </ul>

    <h2>Consulta 23: Contar el número de usuarios por sexo</h2>
    <ul>
        @foreach($query23 as $sexo => $total)
            <li>{{ $sexo }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 24: Calcular el saldo mínimo de los usuarios de sexo “Hombre”</h2>
    <p>{{ $query24 }}</p>

    <h2>Consulta 25: Listar el login y teléfono de los usuarios con compañía telefónica UNEFON</h2>
    <ul>
        @foreach($query25 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 26: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca BLACKBERRY</h2>
    <ul>
        @foreach($query26 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 27: Listar el login de los usuarios con nivel 3</h2>
    <ul>
        @foreach($query27 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 28: Listar el login de los usuarios con nivel 0</h2>
    <ul>
        @foreach($query28 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 29: Listar el login de los usuarios con nivel 1</h2>
    <ul>
        @foreach($query29 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 30: Contar el número de usuarios por sexo</h2>
    <ul>
        @foreach($query30 as $sexo => $total)
            <li>{{ $sexo }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 31: Listar el login y teléfono de los usuarios con compañía telefónica AT&T</h2>
    <ul>
        @foreach($query31 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 32: Listar las diferentes compañías en orden alfabético descendente</h2>
    <ul>
        @foreach($query32 as $compania)
            <li>{{ $compania }}</li>
        @endforeach
    </ul>

    <h2>Consulta 33: Listar el login de los usuarios inactivos</h2>
    <ul>
        @foreach($query33 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 34: Listar los números de teléfono sin saldo</h2>
    <ul>
        @foreach($query34 as $telefono)
            <li>{{ $telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 35: Calcular el saldo mínimo de los usuarios de sexo “Hombre”</h2>
    <p>{{ $query35 }}</p>

    <h2>Consulta 36: Listar los números de teléfono con saldo mayor a 300</h2>
    <ul>
        @foreach($query36 as $telefono)
            <li>{{ $telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 37: Contar el número de usuarios por marca de teléfono</h2>
    <ul>
        @foreach($query37 as $marca => $total)
            <li>{{ $marca }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h2>Consulta 38: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG</h2>
    <ul>
        @foreach($query38 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 39: Listar las diferentes compañías en orden alfabético ascendente</h2>
    <ul>
        @foreach($query39 as $compania)
            <li>{{ $compania }}</li>
        @endforeach
    </ul>

    <h2>Consulta 40: Calcular la suma de los saldos de los usuarios de la compañía telefónica UNEFON</h2>
    <p>{{ $query40 }}</p>

    <h2>Consulta 41: Contar el número de usuarios activos</h2>
    <p>{{ $query41 }}</p>

    <h2>Consulta 42: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL y saldo mayor a 500</h2>
    <ul>
        @foreach($query42 as $user)
            <li>{{ $user->usuario }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 43: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG y saldo menor a 100</h2>
    <ul>
        @foreach($query43 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>

    <h2>Consulta 44: Listar los diferentes niveles de usuarios en orden descendente</h2>
    <ul>
        @foreach($query44 as $nivel)
            <li>{{ $nivel }}</li>
        @endforeach
    </ul>

    <h2>Consulta 45: Calcular el saldo promedio de los usuarios de sexo “Hombre”</h2>
    <p>{{ $query45 }}</p>

    <h2>Consulta 46: Listar el login de los usuarios con saldo menor o igual a 200</h2>
    <ul>
        @foreach($query46 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    <h2>Consulta 47: Contar el número de usuarios con nivel 2 y activos</h2>
    <p>{{ $query47 }}</p>

    <h2>Consulta 48: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca NOKIA y compañía telefónica IUSACELL</h2>
    <ul>
        @foreach($query48 as $user)
            <li>{{ $user->nombre }} - {{ $user->telefono }}</li>
        @endforeach
    </ul>
</body>
</html>
