<?php $__env->startSection('css'); ?>
<style>
        .alumno {
            margin-bottom: 10px;
        }
        .alumno input {
            margin-right: 10px;
        }
        /* Estilos para el modal */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: purple; 
            background-color: silver; 
            padding-top: 60px;
        }
        .modal-content {
            /* background-color: #fefefe; */
            background: whitesmoke;
            font-family: 'Lucida Console';
            color: black;
            margin: 1% auto;
            padding: 10px;
            border: 2px solid black;
            width: 50%;
        }
        .close {
            color: black;
            float: right;
            font-size: 20px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    
</head>
<body>
    <h1 style=" color: white; font-family: 'Lucida Console'">Gestión de Alumnos</h1>

    <!-- <div id="listaAlumnos"></div> -->

    <table class="table table-success table-striped-columns" >
        <thead >
            <tr >
                <th scope="col"class="table-danger"> Matricula:</th>
                <th scope="col"class="table-danger"> Nombre:</th>
                <th scope="col"class="table-danger"> Apellido:</th>
                <th scope="col"class="table-danger"> Edad:</th>
                <th scope="col"class="table-danger"> Fecha Nacimiento:</th>
                <th scope="col"class="table-danger"> Accion:</th>
            </tr>
        </thead >
        <tbody id="listaAlumnos">

                
        </tbody>
    </table>
    
    <button onclick="mostrarModal()" class="btn btn-outline-primary">Agregar Alumno</button>
    <button onclick="ordenarFecha()" class="button_slide slide_down btn btn-outline-success">Ordenar con la fecha</button>
    <button onclick="ordenarAscendente()" class="button_slide slide_down btn btn-outline-success">Ordenar con la edad</button>

    <!-- Modal para agregar alumnos --> 
    <div id="modalAgregar" class="modal">
        <div class="modal-content d-flex justify-content-center">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <h2>Agregar Alumno</h2>
            <label for="matricula" >Matrícula:</label>
            <input type="text" id="matricula" class="form-control"><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre"class="form-control"><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido"class="form-control"><br><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad"class="form-control"><br><br>
            <label for="fechaNac">Fecha nacimiento:</label>
            <input type="date" id="fechaNac" class="form-control "><br><br>
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-info " onclick="confirmarAgregarAlumno()">Guardar</button>
            </div>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
        // Inicializamos un arreglo con objetos de alumnos
        var alumnos = [
            { matricula: 23170057, nombre: 'Kevin', apellido:'Gonzalez', edad: 19, fechaNac: '2004-12-09'},
            { matricula: 23170051, nombre: "Gerardo", apellido: "Alcantar", edad: 22, fechaNac: "2001-09-04",},
            { matricula: 23170049, nombre: "Neztor", apellido: "Cabrera", edad: 15, fechaNac: "2008-09-27",},
            {  matricula: 23330025, nombre: "Ricardo", apellido: "Villarreal", edad: 23, fechaNac: "2000-12-02",}
        ];
        function dibujarAlumnos() {
            var listaAlumnos = document.getElementById('listaAlumnos');
            listaAlumnos.innerHTML = ''; // Limpiamos el contenido anterior

            alumnos.forEach(function(alumno, index) {
                
                var tr = document.createElement('tr');
                
                var td = document.createElement('td');
                var td2 = document.createElement('td');
                var td3 = document.createElement('td');
                var td4 = document.createElement('td');
                var td5 = document.createElement('td');
                var td6 = document.createElement('td');

                
                var inputMatricula = document.createElement('input');
                inputMatricula.type = 'text';
                inputMatricula.className = 'form-control';
                inputMatricula.value = alumno.matricula;
                inputMatricula.setAttribute('data-index', index);
                inputMatricula.setAttribute('placeholder', 'Matrícula');
                inputMatricula.disabled=true;

                var inputNombre = document.createElement('input');
                inputNombre.type = 'text';
                inputNombre.className = 'form-control';
                inputNombre.value = alumno.nombre;
                inputNombre.setAttribute('data-index', index);
                inputNombre.setAttribute('placeholder', 'Nombre');
                inputNombre.disabled=true;

                var inputApellido = document.createElement('input');
                inputApellido.type = 'text';
                inputApellido.className = 'form-control';
                inputApellido.value = alumno.apellido;
                inputApellido.setAttribute('data-index', index);
                inputApellido.setAttribute('placeholder', 'Apellido');
                inputApellido.disabled=true;

                var inputEdad = document.createElement('input');
                inputEdad.type = 'text';
                inputEdad.className = 'form-control';
                inputEdad.value = alumno.edad;
                inputEdad.setAttribute('data-index', index);
                inputEdad.setAttribute('placeholder', 'Edad');
                inputEdad.disabled=true;
                
                var inputFecha = document.createElement('input');
                inputFecha.type = 'date';
                inputFecha.value = alumno.fechaNac;
                inputFecha.setAttribute('data-index', index);
                inputFecha.setAttribute('placeholder', 'Fecha nacimiento');
                inputFecha.disabled=true;

                var button = document.createElement('button');
                button.className = 'btn btn-outline-danger';
                button.textContent = 'Borrar';
                button.onclick = function() {
                    borrarAlumno(index);
                };

                td.appendChild(inputMatricula);
                td2.appendChild(inputNombre);
                td3.appendChild(inputApellido);
                td4.appendChild(inputEdad);
                td5.appendChild(inputFecha);
                td6.appendChild(button);
                
                tr.appendChild(td);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tr.appendChild(td5);
                tr.appendChild(td6);
                   
                listaAlumnos.appendChild(tr);
                
            });
        }

        // Función para mostrar el modal de agregar alumno
        function mostrarModal() {
            document.getElementById('modalAgregar').style.display = 'block';
        }

        // Función para cerrar el modal
        function cerrarModal() {
            document.getElementById('modalAgregar').style.display = 'none';
        }

        // Función para confirmar y agregar un nuevo alumno
        function confirmarAgregarAlumno() {
            var nuevaMatricula = document.getElementById('matricula').value;
            var nuevoNombre = document.getElementById('nombre').value;
            var nuevoApellido = document.getElementById("apellido").value;
            var nuevaEdad = document.getElementById("edad").value;
            var nuevaFechaNac = document.getElementById("fechaNac").value;
            if (nuevaMatricula && nuevoNombre && nuevoApellido && nuevaEdad && nuevaFechaNac) {
                alumnos.push({ matricula: nuevaMatricula, nombre: nuevoNombre, apellido: nuevoApellido, edad: nuevaEdad, fechaNac: nuevaFechaNac });
                // a.push(nuevaFechaNac);
                dibujarAlumnos();
                cerrarModal();
            } else {
                alert('Por favor, complete todos campos.');
            }
        }

        // Función para borrar un alumno
        function borrarAlumno(index) {
            alumnos.splice(index, 1);
            dibujarAlumnos();
        }

        function ordenarFecha(){

            for(var i=0; i<4; i++){
                a = new Date(alumnos[i].fechaNac);
                console.log(a);
            }
            alumnos.sort(compararFecha);

            dibujarAlumnos();
        }

        function compararFecha(a,b){
            d1 = new Date(a.fechaNac);
            d2 = new Date(b.fechaNac);
            return d2 - d1;
        }


        function ordenarAscendente(){

            // alumnos.sort(function(a,b){
            //         if(parseInt(a.edad.value) - parseInt(b.edad.value)){
            //             return -1;
            //         }

            //         if(parseInt(a.edad.value) - parseInt(b.edad.value)){
            //             return 1;
            //         }

            // return 0;
            // })

            alumnos.sort(compararEdad);
                
            dibujarAlumnos();

            console.log(alumnos);
            
        }

        function compararEdad(a,b){
           return a.edad - b.edad;
        }

        

        // Dibujamos inicialmente los alumnos
        dibujarAlumnos();

        // Cerrar el modal cuando se hace clic fuera del contenido
        window.onclick = function(event) {
            var modal = document.getElementById('modalAgregar');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevin\OneDrive\Documentos\GitHub\integradora\resources\views/practica2.blade.php ENDPATH**/ ?>