<link rel="stylesheet" href="{{ asset('css/stylelog.css') }}">
@extends('layouts.app')

@section('content')
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
    
@endsection

@section('style')
@endsection

