<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h1>TABLA DE DATOS ALUMNOS UTT</h1>
    @if($tblusuarios->isEmpty())
        <p>No hay usuarios con el nombre buscado.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Nivel</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Marca</th>
                    <th>Compañía</th>
                    <th>Saldo</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tblusuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->idx }}</td>
                        <td>{{ $usuario->usuario }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->sexo }}</td>
                        <td>{{ $usuario->nivel }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->marca }}</td>
                        <td>{{ $usuario->compañia }}</td>
                        <td>{{ $usuario->saldo }}</td>
                        <td>{{ $usuario->activo ? 'Sí' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
