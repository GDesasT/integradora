<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <h1>Consultas</h1>


    <h2>Consulta 4: Nombres de productos y precios unitarios</h2>
    <ul>
        <?php $__currentLoopData = $query4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($producto->nombre); ?>: $<?php echo e($producto->precio_unitario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 5: Empleados que viven en EE.UU.</h2>
    <ul>
        <?php $__currentLoopData = $query5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($empleado); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 6: Pedidos con gasto de envío > 50</h2>
    <ul>
        <?php $__currentLoopData = $query6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($pedido); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 7: Productos con precio entre 5 y 20 dólares</h2>
    <ul>
        <?php $__currentLoopData = $query7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($producto->nombre); ?>: $<?php echo e($producto->precio); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 8: Productos con precio de 18, 19 y 10 dólares</h2>
    <ul>
        <?php $__currentLoopData = $query8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($producto->nombre); ?>: $<?php echo e($producto->precio); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 9: Empresas de clientes con cargo igual a Propietario</h2>
    <ul>
        <?php $__currentLoopData = $query9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($empresa); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 10: Clientes cuyos nombres comienzan con la letra "A"</h2>
    <ul>
        <?php $__currentLoopData = $query10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($cliente->nombre); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 11: Apellidos de empleados que contienen la letra "s"</h2>
    <ul>
        <?php $__currentLoopData = $query11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($empleado->apellido); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 12: Nombres de clientes donde la región no está en blanco</h2>
    <ul>
        <?php $__currentLoopData = $query12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($nombre); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 13: Proveedores cuya columna Región es NULL</h2>
    <ul>
        <?php $__currentLoopData = $query13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($supplier); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 14: Productos ordenados por precio unitario (más barato primero)</h2>
    <ul>
        <?php $__currentLoopData = $query14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($producto->nombre); ?>: $<?php echo e($producto->precio_unitario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 15: Productos ordenados por precio unitario (más caro primero)</h2>
    <ul>
        <?php $__currentLoopData = $query15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($producto->nombre); ?>: $<?php echo e($producto->precio_unitario); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 16: Número total de empleados</h2>
    <p>TotalEmpleados: <?php echo e($query16); ?></p>

    <h2>Consulta 17: Pedido con el menor gasto de envío, promedio y máximo</h2>
    <p>Menor gasto de envío: <?php echo e($query17_min); ?></p>
    <p>Promedio gasto de envío: <?php echo e($query17_avg); ?></p>
    <p>Máximo gasto de envío: <?php echo e($query17_max); ?></p>

    <h2>Consulta 18: Nombres de ciudades y número de clientes en cada ciudad</h2>
    <ul>
        <?php $__currentLoopData = $query18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($cliente->ciudad); ?>: <?php echo e($cliente->total_clientes); ?> clientes</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 19: Nombres de ciudades con al menos 2 clientes</h2>
    <ul>
        <?php $__currentLoopData = $query19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($cliente->ciudad); ?>: <?php echo e($cliente->total_clientes); ?> clientes</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 20: Insertar nuevo cliente</h2>
    <p>Nuevo cliente insertado: <?php echo e($query20->nombre); ?></p>

    <h2>Consulta 21: Actualizar nombre del nuevo cliente</h2>
    <p>Cliente actualizado: <?php echo e($query21 ? 'Sí' : 'No'); ?></p>

    <h2>Consulta 22: Eliminar nuevo cliente</h2>
    <p>Cliente eliminado: <?php echo e($query22 ? 'Sí' : 'No'); ?></p>

    <h2>Consulta 23: Lista de empleados (EmployeeID, LastName, FirstName)</h2>
    <ul>
        <?php $__currentLoopData = $query23; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>ID: <?php echo e($empleado->EmployeeID); ?>, Apellido: <?php echo e($empleado->LastName); ?>, Nombre: <?php echo e($empleado->FirstName); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Consulta 24: Suma de las ventas del año hasta la fecha (ytd_sales)</h2>
    <p>Suma ytd_sales: <?php echo e($query24); ?></p>

    <h2>Consulta 25: Precio promedio de todos los libros</h2>
    <p>Precio promedio: <?php echo e($query25); ?></p>

    <h2>Consulta 26: Mayor valor de las ventas del año (ytd_sales)</h2>
    <p>Mayor ytd_sales: <?php echo e($query26); ?></p>

    <h2>Consulta 27: Menor valor de las ventas del año (ytd_sales)</h2>
    <p>Menor ytd_sales: <?php echo e($query27); ?></p>
</body>
</html><?php /**PATH C:\Users\tania\OneDrive\Desktop\este inte\integradora8.0\integradora\resources\views/feedback.blade.php ENDPATH**/ ?>