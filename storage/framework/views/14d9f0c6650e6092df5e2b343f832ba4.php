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
        <?php $__currentLoopData = $query1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($nombre); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 2: Calcular el saldo máximo de los usuarios de sexo “Mujer”</h2>
    <p><?php echo e($query2); ?></p>

    <h2>Consulta 3: Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY</h2>
    <ul>
        <?php $__currentLoopData = $query3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 4: Contar los usuarios sin saldo o inactivos</h2>
    <p><?php echo e($query4); ?></p>

    <h2>Consulta 5: Listar el login de los usuarios con nivel 1, 2 o 3</h2>
    <ul>
        <?php $__currentLoopData = $query5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 6: Listar los números de teléfono con saldo menor o igual a 300</h2>
    <ul>
        <?php $__currentLoopData = $query6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 7: Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL</h2>
    <p><?php echo e($query7); ?></p>

    <h2>Consulta 8: Contar el número de usuarios por compañía telefónica</h2>
    <ul>
        <?php $__currentLoopData = $query8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compania); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 9: Contar el número de usuarios por nivel</h2>
    <ul>
        <?php $__currentLoopData = $query9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>Nivel <?php echo e($nivel); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 10: Listar el login de los usuarios con nivel 2</h2>
    <ul>
        <?php $__currentLoopData = $query10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 11: Mostrar el email de los usuarios que usan gmail</h2>
    <ul>
        <?php $__currentLoopData = $query11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($email); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 12: Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA</h2>
    <ul>
        <?php $__currentLoopData = $query12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 13: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG o SAMSUNG</h2>
    <ul>
        <?php $__currentLoopData = $query13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 14: Listar el login y teléfono de los usuarios con compañía telefónica IUSACELL</h2>
    <ul>
        <?php $__currentLoopData = $query14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 15: Listar el login y teléfono de los usuarios con compañía telefónica que no sea TELCEL</h2>
    <ul>
        <?php $__currentLoopData = $query15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 16: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca SONY</h2>
    <ul>
        <?php $__currentLoopData = $query16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 17: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL</h2>
    <ul>
        <?php $__currentLoopData = $query17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 18: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca MOTOROLA</h2>
    <ul>
        <?php $__currentLoopData = $query18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 19: Contar el número de usuarios por marca de teléfono</h2>
    <ul>
        <?php $__currentLoopData = $query19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 20: Contar el número de usuarios por compañía telefónica</h2>
    <ul>
        <?php $__currentLoopData = $query20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compania); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 21: Listar las diferentes marcas de celular en orden alfabético ascendente</h2>
    <ul>
        <?php $__currentLoopData = $query21; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 22: Listar las diferentes compañías en orden alfabético ascendente</h2>
    <ul>
        <?php $__currentLoopData = $query22; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compania); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 23: Contar el número de usuarios por sexo</h2>
    <ul>
        <?php $__currentLoopData = $query23; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($sexo); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 24: Calcular el saldo mínimo de los usuarios de sexo “Hombre”</h2>
    <p><?php echo e($query24); ?></p>

    <h2>Consulta 25: Listar el login y teléfono de los usuarios con compañía telefónica UNEFON</h2>
    <ul>
        <?php $__currentLoopData = $query25; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 26: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca BLACKBERRY</h2>
    <ul>
        <?php $__currentLoopData = $query26; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 27: Listar el login de los usuarios con nivel 3</h2>
    <ul>
        <?php $__currentLoopData = $query27; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 28: Listar el login de los usuarios con nivel 0</h2>
    <ul>
        <?php $__currentLoopData = $query28; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 29: Listar el login de los usuarios con nivel 1</h2>
    <ul>
        <?php $__currentLoopData = $query29; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 30: Contar el número de usuarios por sexo</h2>
    <ul>
        <?php $__currentLoopData = $query30; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($sexo); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 31: Listar el login y teléfono de los usuarios con compañía telefónica AT&T</h2>
    <ul>
        <?php $__currentLoopData = $query31; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 32: Listar las diferentes compañías en orden alfabético descendente</h2>
    <ul>
        <?php $__currentLoopData = $query32; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compania); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 33: Listar el login de los usuarios inactivos</h2>
    <ul>
        <?php $__currentLoopData = $query33; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 34: Listar los números de teléfono sin saldo</h2>
    <ul>
        <?php $__currentLoopData = $query34; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 35: Calcular el saldo mínimo de los usuarios de sexo “Hombre”</h2>
    <p><?php echo e($query35); ?></p>

    <h2>Consulta 36: Listar los números de teléfono con saldo mayor a 300</h2>
    <ul>
        <?php $__currentLoopData = $query36; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 37: Contar el número de usuarios por marca de teléfono</h2>
    <ul>
        <?php $__currentLoopData = $query37; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 38: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG</h2>
    <ul>
        <?php $__currentLoopData = $query38; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 39: Listar las diferentes compañías en orden alfabético ascendente</h2>
    <ul>
        <?php $__currentLoopData = $query39; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compania); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 40: Calcular la suma de los saldos de los usuarios de la compañía telefónica UNEFON</h2>
    <p><?php echo e($query40); ?></p>

    <h2>Consulta 41: Contar el número de usuarios activos</h2>
    <p><?php echo e($query41); ?></p>

    <h2>Consulta 42: Listar el login y teléfono de los usuarios con compañía telefónica TELCEL y saldo mayor a 500</h2>
    <ul>
        <?php $__currentLoopData = $query42; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->usuario); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 43: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca LG y saldo menor a 100</h2>
    <ul>
        <?php $__currentLoopData = $query43; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 44: Listar los diferentes niveles de usuarios en orden descendente</h2>
    <ul>
        <?php $__currentLoopData = $query44; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($nivel); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 45: Calcular el saldo promedio de los usuarios de sexo “Hombre”</h2>
    <p><?php echo e($query45); ?></p>

    <h2>Consulta 46: Listar el login de los usuarios con saldo menor o igual a 200</h2>
    <ul>
        <?php $__currentLoopData = $query46; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 47: Contar el número de usuarios con nivel 2 y activos</h2>
    <p><?php echo e($query47); ?></p>

    <h2>Consulta 48: Listar nombre y teléfono de los usuarios con teléfono que no sea de la marca NOKIA y compañía telefónica IUSACELL</h2>
    <ul>
        <?php $__currentLoopData = $query48; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->nombre); ?> - <?php echo e($user->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\Users\gera3\OneDrive\Documentos\GitHub\integradora\resources\views/users/index.blade.php ENDPATH**/ ?>