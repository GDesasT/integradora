<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Usuarios</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción del Query</th>
                                    <th>Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pluck de nombres de usuarios</td>
                                    <td>
                                        <?php $__currentLoopData = $query1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($nombre); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saldo máximo de usuarios masculinos</td>
                                    <td><?php echo e($query2); ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Usuarios con marcas Nokia, Blackberry, Sony</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Número de usuarios con saldo 0 o inactivos</td>
                                    <td><?php echo e($query4); ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pluck de usuarios con nivel 1, 2 o 3</td>
                                    <td>
                                        <?php $__currentLoopData = $query5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Telefonos de usuarios con saldo <= 300</td>
                                    <td>
                                        <?php $__currentLoopData = $query6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($telefono); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Suma de saldo de usuarios con compañía Nextel</td>
                                    <td><?php echo e($query7); ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Conteo de usuarios agrupados por compañía</td>
                                    <td>
                                        <?php $__currentLoopData = $query8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($compañia); ?>: <?php echo e($total); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Conteo de usuarios agrupados por nivel</td>
                                    <td>
                                        <?php $__currentLoopData = $query9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            Nivel <?php echo e($nivel); ?>: <?php echo e($total); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Pluck de usuarios con nivel 2</td>
                                    <td>
                                        <?php $__currentLoopData = $query10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Emails de usuarios con dominio Gmail</td>
                                    <td>
                                        <?php $__currentLoopData = $query11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($email); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Usuarios con marcas LG, Samsung, Motorola</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Usuarios sin marcas LG, Samsung</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Usuarios con compañía Iusacell</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Usuarios sin compañía Telcel</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Promedio de saldo de usuarios con marca Nokia</td>
                                    <td><?php echo e($query16); ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Usuarios con compañías Iusacell o Axel</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Emails de usuarios que no son de Yahoo</td>
                                    <td>
                                        <?php $__currentLoopData = $query18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($email); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Usuarios sin compañías Telcel o Iusacell</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Usuarios con compañía Unefon</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Marcas de usuarios distintas</td>
                                    <td>
                                        <?php $__currentLoopData = $query21; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($marca); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Compañías distintas en orden aleatorio</td>
                                    <td>
                                        <?php $__currentLoopData = $query22; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($compañia); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Pluck de usuarios con nivel 0 o 2</td>
                                    <td>
                                        <?php $__currentLoopData = $query23; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Promedio de saldo de usuarios con marca LG</td>
                                    <td><?php echo e($query24); ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Pluck de usuarios con nivel 1 o 3</td>
                                    <td>
                                        <?php $__currentLoopData = $query25; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Usuarios sin marca Blackberry</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query26; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Pluck de usuarios con nivel 3</td>
                                    <td>
                                        <?php $__currentLoopData = $query27; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Pluck de usuarios con nivel 0</td>
                                    <td>
                                        <?php $__currentLoopData = $query28; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Pluck de usuarios con nivel 1</td>
                                    <td>
                                        <?php $__currentLoopData = $query29; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($usuario); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Conteo de usuarios agrupados por sexo</td>
                                    <td>
                                        <?php $__currentLoopData = $query30; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($sexo); ?>: <?php echo e($total); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Usuarios con compañía AT&T</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query31; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Compañías distintas en orden descendente</td>
                                    <td>
                                        <?php $__currentLoopData = $query32; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($compañia); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Usuarios inactivos</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query33; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Telefonos de usuarios con saldo 0</td>
                                    <td>
                                        <?php $__currentLoopData = $query34; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($telefono); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Saldo mínimo de usuarios masculinos</td>
                                    <td><?php echo e($query35); ?></td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Telefonos de usuarios con saldo > 300</td>
                                    <td>
                                        <?php $__currentLoopData = $query36; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefono): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($telefono); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Conteo de usuarios agrupados por marca</td>
                                    <td>
                                        <?php $__currentLoopData = $query37; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca => $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($marca); ?>: <?php echo e($total); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Usuarios sin marca LG</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query38; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Compañías distintas en orden ascendente</td>
                                    <td>
                                        <?php $__currentLoopData = $query39; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compañia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($compañia); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Suma de saldo de usuarios con compañía Unefon</td>
                                    <td><?php echo e($query40); ?></td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Emails de usuarios con dominio Hotmail</td>
                                    <td>
                                        <?php $__currentLoopData = $query41; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($email); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Usuarios con saldo 0 o inactivos</td>
                                    <td>
                                        <?php $__currentLoopData = $query42; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($nombre); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Usuarios con compañías Iusacell o Telcel</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query43; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>Marcas de usuarios distintas en orden ascendente</td>
                                    <td>
                                        <?php $__currentLoopData = $query44; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($marca); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>Marcas de usuarios distintas en orden aleatorio</td>
                                    <td>
                                        <?php $__currentLoopData = $query45; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($marca); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>Usuarios con compañías Iusacell o Unefon</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query46; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->usuario); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>Usuarios sin marcas Motorola o Nokia</td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $query47; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($usuario->nombre); ?> - <?php echo e($usuario->telefono); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>Suma de saldo de usuarios con compañía Telcel</td>
                                    <td><?php echo e($query48); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gera3\OneDrive\Documentos\GitHub\integradora\resources\views/users/index.blade.php ENDPATH**/ ?>