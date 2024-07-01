<!DOCTYPE html>
<html>

<head>
    <title>Usuarios</title>
</head>

<body>
    <h1>Consultas de Usuarios</h1>

    
    <h2>Consulta 1: Listar los nombres de los usuarios</h2>
    <?php $__currentLoopData = $query1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($nombre); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <h2>Consulta 2: Saldo máximo de usuarios de sexo “Mujer”</h2>
    <p><?php echo e($query2); ?></p>

    
    <h2>Consulta 3: Usuarios con teléfono NOKIA, BLACKBERRY o SONY</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 4: Contar usuarios sin saldo o inactivos</h2>
    <p><?php echo e($query4); ?></p>

    
    <h2>Consulta 5: Usuarios con nivel 1, 2 o 3</h2>
    <ul>
        <?php $__currentLoopData = $query5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 6: Teléfonos con saldo menor o igual a 300</h2>
    <ul>
        <?php $__currentLoopData = $query6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 7: Suma de los saldos de los usuarios de NEXTEL</h2>
    <p><?php echo e($query7); ?></p>

    
    <h2>Consulta 8: Número de usuarios por compañía telefónica</h2>
    <ul>
        <?php $__currentLoopData = $query8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compañia); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 9: Número de usuarios por nivel</h2>
    <ul>
        <?php $__currentLoopData = $query9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>Nivel <?php echo e($nivel); ?>: <?php echo e($total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 10: Usuarios con nivel 2</h2>
    <ul>
        <?php $__currentLoopData = $query10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 11: Emails de usuarios que usan gmail</h2>
    <ul>
        <?php $__currentLoopData = $query11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($email); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 12: Usuarios con teléfono LG, SAMSUNG o MOTOROLA</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 13: Usuarios con teléfono que no sea de la marca LG o SAMSUNG</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 14: Usuarios con compañía telefónica IUSACELL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 15: Usuarios con compañía telefónica que no sea TELCEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 16: Saldo promedio de usuarios con teléfono marca NOKIA</h2>
    <p><?php echo e($query16); ?></p>

    
    <h2>Consulta 17: Usuarios con compañía telefónica IUSACELL o AXEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 18: Emails de usuarios que no usan yahoo</h2>
    <ul>
        <?php $__currentLoopData = $query18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($email->email); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 19: Usuarios con compañía telefónica que no sea TELCEL o IUSACELL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
            
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 20: Usuarios con compañía telefónica UNEFON</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                 
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 21: Marcas de celular en orden alfabético descendente</h2>
    <ul>
        <?php $__currentLoopData = $query21; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 22: Compañías en orden alfabético aleatorio</h2>
    <ul>
        <?php $__currentLoopData = $query22; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compañia->compañia); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 23: Usuarios con nivel 0 o 2</h2>
    <ul>
        <?php $__currentLoopData = $query23; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 24: Saldo promedio de usuarios con teléfono marca LG</h2>
    <p><?php echo e($query24); ?></p>

    
    <h2>Consulta 25: Usuarios con nivel 1 o 3</h2>
    <ul>
        <?php $__currentLoopData = $query25; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 26: Usuarios con teléfono que no sea de la marca BLACKBERRY</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query26; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <h2>Consulta 27: Usuarios con nivel 3</h2>
    <ul>
        <?php $__currentLoopData = $query27; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 28: Usuarios con nivel 0</h2>
    <ul>
        <?php $__currentLoopData = $query28; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 29: Usuarios con nivel 1</h2>
    <ul>
        <?php $__currentLoopData = $query29; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 30: Número de usuarios por sexo</h2>
    <ul>
        <?php $__currentLoopData = $query30; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($sexo->sexo); ?>: <?php echo e($sexo->total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 31: Usuarios con compañía telefónica AT&T</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query31; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 32: Compañías en orden alfabético descendente</h2>
    <ul>
        <?php $__currentLoopData = $query32; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compañia->compañia); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 33: Usuarios inactivos</h2>
    <ul>
        <?php $__currentLoopData = $query33; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->usuario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 34: Teléfonos sin saldo</h2>
    <ul>
        <?php $__currentLoopData = $query34; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 35: Saldo mínimo de usuarios de sexo “Hombre”</h2>
    <p><?php echo e($query35); ?></p>

    
    <h2>Consulta 36: Teléfonos con saldo mayor a 300</h2>
    <ul>
        <?php $__currentLoopData = $query36; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($telefono->telefono); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 37: Número de usuarios por marca de teléfono</h2>
    <ul>
        <?php $__currentLoopData = $query37; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca->marca); ?>: <?php echo e($marca->total); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 38: Usuarios con teléfono que no sea de la marca LG</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query38; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 39: Compañías en orden alfabético ascendente</h2>
    <ul>
        <?php $__currentLoopData = $query39; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($compañia->compañia); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 40: Suma de los saldos de los usuarios de UNEFON</h2>
    <p><?php echo e($query40); ?></p>

    
    <h2>Consulta 41: Emails de usuarios que usan hotmail</h2>
    <ul>
        <?php $__currentLoopData = $query41; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($email->email); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 42: Usuarios sin saldo o inactivos</h2>
    <ul>
        <?php $__currentLoopData = $query42; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($usuario->nombre); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 43: Usuarios con compañía telefónica IUSACELL o TELCEL</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query43; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 44: Marcas de celular en orden alfabético ascendente</h2>
    <ul>
        <?php $__currentLoopData = $query44; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca->marca); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 45: Marcas de celular en orden alfabético aleatorio</h2>
    <ul>
        <?php $__currentLoopData = $query45; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($marca->marca); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <h2>Consulta 46: Usuarios con compañía telefónica IUSACELL o UNEFON</h2>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query46; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->usuario); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 47: Usuarios con teléfono que no sea de la marca MOTOROLA o NOKIA</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $query47; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($usuario->nombre); ?></td>
                    <td><?php echo e($usuario->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <h2>Consulta 48: Suma de los saldos de los usuarios de TELCEL</h2>
    <p><?php echo e($query48); ?></p>

</body>

</html>
<?php /**PATH C:\Users\tania\OneDrive\Desktop\este inte\integradora8.0\integradora\resources\views/users/index.blade.php ENDPATH**/ ?>