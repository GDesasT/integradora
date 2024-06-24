<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h1>TABLA DE DATOS ALUMNOS UTT</h1>
    <?php if($tblusuarios->isEmpty()): ?>
        <p>No hay usuarios con el nombre Ricardo.</p>
    <?php else: ?>
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
                <?php $__currentLoopData = $tblusuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($usuario->idx); ?></td>
                        <td><?php echo e($usuario->usuario); ?></td>
                        <td><?php echo e($usuario->nombre); ?></td>
                        <td><?php echo e($usuario->sexo); ?></td>
                        <td><?php echo e($usuario->nivel); ?></td>
                        <td><?php echo e($usuario->email); ?></td>
                        <td><?php echo e($usuario->telefono); ?></td>
                        <td><?php echo e($usuario->marca); ?></td>
                        <td><?php echo e($usuario->compañia); ?></td>
                        <td><?php echo e($usuario->saldo); ?></td>
                        <td><?php echo e($usuario->activo ? 'Sí' : 'No'); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\tania\OneDrive\Desktop\este inte\integradora8.0\integradora\resources\views/users/index.blade.php ENDPATH**/ ?>