<!DOCTYPE html>
<html>

<head>
    <title>Usuarios</title>
</head>

<body>
    <h1>Consultas de Usuarios</h1>

    {{-- Consulta 1: Listar los nombres de los usuarios --}}
    <h2>Consulta 1: Listar los nombres de los usuarios</h2>
    @foreach ($query1 as $nombre)
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
            @foreach ($query3 as $usuario)
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
        @foreach ($query5 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 6: Listar los números de teléfono con saldo menor o igual a 300 --}}
    <h2>Consulta 6: Teléfonos con saldo menor o igual a 300</h2>
    <ul>
        @foreach ($query6 as $telefono)
            <li>{{ $telefono }}</li>
        @endforeach
    </ul>

    {{-- Consulta 7: Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL --}}
    <h2>Consulta 7: Suma de los saldos de los usuarios de NEXTEL</h2>
    <p>{{ $query7 }}</p>

    {{-- Consulta 8: Contar el número de usuarios por compañía telefónica --}}
    <h2>Consulta 8: Número de usuarios por compañía telefónica</h2>
    <ul>
        @foreach ($query8 as $compañia => $total)
            <li>{{ $compañia }}: {{ $total }}</li>
        @endforeach
    </ul>

    {{-- Consulta 9: Contar el número de usuarios por nivel --}}
    <h2>Consulta 9: Número de usuarios por nivel</h2>
    <ul>
        @foreach ($query9 as $nivel => $total)
            <li>Nivel {{ $nivel }}: {{ $total }}</li>
        @endforeach
    </ul>

    {{-- Consulta 10: Listar el login de los usuarios con nivel 2 --}}
    <h2>Consulta 10: Usuarios con nivel 2</h2>
    <ul>
        @foreach ($query10 as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 11: Mostrar el email de los usuarios que usan gmail --}}
    <h2>Consulta 11: Emails de usuarios que usan gmail</h2>
    <ul>
        @foreach ($query11 as $email)
            <li>{{ $email }}</li>
        @endforeach
    </ul>

    {{-- Consulta 12: Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA --}}
    <h2>Consulta 12: Usuarios con teléfono LG, SAMSUNG o MOTOROLA</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query12 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 13: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG o SAMSUNG --}}
    <h2>Consulta 13: Usuarios con teléfono que no sea de la marca LG o SAMSUNG</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query13 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 14: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL --}}
    <h2>Consulta 14: Usuarios con compañía telefónica IUSACELL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query14 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 15: Listar el login y teléfono de los usuarios con compañía telefónica que no sea TELCEL --}}
    <h2>Consulta 15: Usuarios con compañía telefónica que no sea TELCEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query15 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 16: Calcular el saldo promedio de los usuarios que tienen teléfono marca NOKIA --}}
    <h2>Consulta 16: Saldo promedio de usuarios con teléfono marca NOKIA</h2>
    <p>{{ $query16 }}</p>

    {{-- Consulta 17: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL o AXEL --}}
    <h2>Consulta 17: Usuarios con compañía telefónica IUSACELL o AXEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query17 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 18: Mostrar el email de los usuarios que no usan yahoo --}}
    <h2>Consulta 18: Emails de usuarios que no usan yahoo</h2>
    <ul>
        @foreach ($query18 as $email)
            <li>{{ $email->email }}</li>
        @endforeach
    </ul>

    {{-- Consulta 19: Listar el login y teléfono de los usuarios con compañía telefónica que no sea TELCEL o IUSACELL --}}
    <h2>Consulta 19: Usuarios con compañía telefónica que no sea TELCEL o IUSACELL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query19 as $usuario)
                <tr>
            
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 20: Listar el login y teléfono de los usuarios con compañía telefónica UNEFON --}}
    <h2>Consulta 20: Usuarios con compañía telefónica UNEFON</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query20 as $usuario)
                <tr>
                 
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 21: Listar las diferentes marcas de celular en orden alfabético descendente --}}
    <h2>Consulta 21: Marcas de celular en orden alfabético descendente</h2>
    <ul>
        @foreach ($query21 as $marca)
           
        @endforeach
    </ul>

    {{-- Consulta 22: Listar las diferentes compañías en orden alfabético aleatorio --}}
    <h2>Consulta 22: Compañías en orden alfabético aleatorio</h2>
    <ul>
        @foreach ($query22 as $compañia)
            <li>{{ $compañia->compañia }}</li>
        @endforeach
    </ul>

    {{-- Consulta 23: Listar el login de los usuarios con nivel 0 o 2 --}}
    <h2>Consulta 23: Usuarios con nivel 0 o 2</h2>
    <ul>
        @foreach ($query23 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 24: Calcular el saldo promedio de los usuarios que tienen teléfono marca LG --}}
    <h2>Consulta 24: Saldo promedio de usuarios con teléfono marca LG</h2>
    <p>{{ $query24 }}</p>

    {{-- Consulta 25: Listar el login de los usuarios con nivel 1 o 3 --}}
    <h2>Consulta 25: Usuarios con nivel 1 o 3</h2>
    <ul>
        @foreach ($query25 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 26: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca BLACKBERRY --}}
    <h2>Consulta 26: Usuarios con teléfono que no sea de la marca BLACKBERRY</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query26 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Consulta 27: Listar el login de los usuarios con nivel 3 --}}
    <h2>Consulta 27: Usuarios con nivel 3</h2>
    <ul>
        @foreach ($query27 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 28: Listar el login de los usuarios con nivel 0 --}}
    <h2>Consulta 28: Usuarios con nivel 0</h2>
    <ul>
        @foreach ($query28 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 29: Listar el login de los usuarios con nivel 1 --}}
    <h2>Consulta 29: Usuarios con nivel 1</h2>
    <ul>
        @foreach ($query29 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 30: Contar el número de usuarios por sexo --}}
    <h2>Consulta 30: Número de usuarios por sexo</h2>
    <ul>
        @foreach ($query30 as $sexo)
            <li>{{ $sexo->sexo }}: {{ $sexo->total }}</li>
        @endforeach
    </ul>

    {{-- Consulta 31: Listar el login y teléfono de los usuarios con compañía telefónica AT&T --}}
    <h2>Consulta 31: Usuarios con compañía telefónica AT&T</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query31 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 32: Listar las diferentes compañías en orden alfabético descendente --}}
    <h2>Consulta 32: Compañías en orden alfabético descendente</h2>
    <ul>
        @foreach ($query32 as $compañia)
            <li>{{ $compañia->compañia }}</li>
        @endforeach
    </ul>

    {{-- Consulta 33: Listar el login de los usuarios inactivos --}}
    <h2>Consulta 33: Usuarios inactivos</h2>
    <ul>
        @foreach ($query33 as $usuario)
            <li>{{ $usuario->usuario }}</li>
        @endforeach
    </ul>

    {{-- Consulta 34: Listar los números de teléfono sin saldo --}}
    <h2>Consulta 34: Teléfonos sin saldo</h2>
    <ul>
        @foreach ($query34 as $telefono)
            <li>{{ $telefono->telefono }}</li>
        @endforeach
    </ul>

    {{-- Consulta 35: Calcular el saldo mínimo de los usuarios de sexo “Hombre” --}}
    <h2>Consulta 35: Saldo mínimo de usuarios de sexo “Hombre”</h2>
    <p>{{ $query35 }}</p>

    {{-- Consulta 36: Listar los números de teléfono con saldo mayor a 300 --}}
    <h2>Consulta 36: Teléfonos con saldo mayor a 300</h2>
    <ul>
        @foreach ($query36 as $telefono)
            <li>{{ $telefono->telefono }}</li>
        @endforeach
    </ul>

    {{-- Consulta 37: Contar el número de usuarios por marca de teléfono --}}
    <h2>Consulta 37: Número de usuarios por marca de teléfono</h2>
    <ul>
        @foreach ($query37 as $marca)
            <li>{{ $marca->marca }}: {{ $marca->total }}</li>
        @endforeach
    </ul>

    {{-- Consulta 38: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG --}}
    <h2>Consulta 38: Usuarios con teléfono que no sea de la marca LG</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query38 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 39: Listar las diferentes compañías en orden alfabético ascendente --}}
    <h2>Consulta 39: Compañías en orden alfabético ascendente</h2>
    <ul>
        @foreach ($query39 as $compañia)
            <li>{{ $compañia->compañia }}</li>
        @endforeach
    </ul>

    {{-- Consulta 40: Calcular la suma de los saldos de los usuarios de la compañía telefónica UNEFON --}}
    <h2>Consulta 40: Suma de los saldos de los usuarios de UNEFON</h2>
    <p>{{ $query40 }}</p>

    {{-- Consulta 41: Mostrar el email de los usuarios que usan hotmail --}}
    <h2>Consulta 41: Emails de usuarios que usan hotmail</h2>
    <ul>
        @foreach ($query41 as $email)
            <li>{{ $email->email }}</li>
        @endforeach
    </ul>

    {{-- Consulta 42: Listar los nombres de los usuarios sin saldo o inactivos --}}
    <h2>Consulta 42: Usuarios sin saldo o inactivos</h2>
    <ul>
        @foreach ($query42 as $usuario)
            <li>{{ $usuario->nombre }}</li>
        @endforeach
    </ul>

    {{-- Consulta 43: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL o TELCEL --}}
    <h2>Consulta 43: Usuarios con compañía telefónica IUSACELL o TELCEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query43 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 44: Listar las diferentes marcas de celular en orden alfabético ascendente --}}
    <h2>Consulta 44: Marcas de celular en orden alfabético ascendente</h2>
    <ul>
        @foreach ($query44 as $marca)
            <li>{{ $marca->marca }}</li>
        @endforeach
    </ul>

    {{-- Consulta 45: Listar las diferentes marcas de celular en orden alfabético aleatorio --}}
    <h2>Consulta 45: Marcas de celular en orden alfabético aleatorio</h2>
    <ul>
        @foreach ($query45 as $marca)
            <li>{{ $marca->marca }}</li>
        @endforeach
    </ul>

    {{-- Consulta 46: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL o UNEFON --}}
    <h2>Consulta 46: Usuarios con compañía telefónica IUSACELL o UNEFON</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query46 as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 47: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca MOTOROLA o NOKIA --}}
    <h2>Consulta 47: Usuarios con teléfono que no sea de la marca MOTOROLA o NOKIA</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query47 as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Consulta 48: Calcular la suma de los saldos de los usuarios de la compañía telefónica TELCEL --}}
    <h2>Consulta 48: Suma de los saldos de los usuarios de TELCEL</h2>
    <p>{{ $query48 }}</p>

</body>

</html>
