<link rel="stylesheet" href="<?php echo e(asset('css/stylelog.css')); ?>">


<?php $__env->startSection('content'); ?>
<body>
  
<div class="wrapper">
          <div class="fondito">
              <form class="login-form">
                  <h1>LOGIN</h1>
                  <div class="input-group">
                      <input type="text"  id="usuario" placeholder="Usuario" name="Usuario" required>
                  </div>
                  <div class="input-group">
                      <input type="password" id="contraseña" placeholder="Contraseña" name="Contraseña" required>
              
                  </div>
                  <div class="entrar" id="btn-entrar"> <button type="submit"  id="boton" class="btn btn-outline-light">Entrar</button>
                  
                    </div>
              
                  <div class="options">
                      <label><input type="checkbox" id="recordar"> Recordarme</label>
                 </div>
                 <div class="olvide"><button type="submit" a href="#" id="recuperar" class="btn btn-outline-light">Olvide mi contraseña</button>

                </div>
          </div>
                 </div> 
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gera3\OneDrive\Documentos\GitHub\integradora\resources\views/login.blade.php ENDPATH**/ ?>