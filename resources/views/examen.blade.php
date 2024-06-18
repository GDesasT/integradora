@extends('layouts.app')

@section('content')
<body>
    <h1 style="text-align: center;">Registro de alumnos</h1>    


    <div style="margin-left: 12%; margin-right: 12%;">
        <table class="table table-success table-striped-columns">
            <thead>
                <tr>
                    <th>Matricula:</th>
                    <th>Nombre:</th>
                    <th>Apellido:</th>
                    <th>Edad:</th>
                    <th>Fecha de Nacimiento:</th>
                    <th>Peso:</th>
                    <th>Estatura:</th>
                    <th>IMC:</th>
                    <th>Clasificacion:</th>
                    <th>Editar:</th>
                    <th>Borrar:</th>
                </tr>
            </thead>
            <tbody id="listaAlumnos"></tbody>
        </table>
    </div>
    <div style="margin-left: 12%;" class="btn-area">
        <button onclick="mostrarModal()" class="btn btn-outline-primary">Agregar Alumno</button>
    </div>
    <select class="form-select mt-3" style="margin-left: 12%; max-width: 220px;" onchange="ordenar()">
        <option value="1">Ordenar por fecha - a +</option>
        <option value="2">Ordenar por fecha + a -</option>
        <option value="3">Ordenar por IMC - a +</option>
        <option value="4">Ordenar por IMC + a -</option>
    </select>
    <div class="search" style="margin-top: 15px; margin-left: 12%;">
        <h4>Buscar alumnos por fecha</h4>
        <div style="margin-left: 2%;">
        <label for="fecha">De:</label>
        <input type="date" id="FechaPrin" class="form-control">
        <label for="fecha">Hasta:</label>
        <input type="date" id="FechaFinal" class="form-control">
        <div style="margin-top: 10px;">
        <button class="btn btn-outline-secondary" id="Buscar" onclick="filtrofecha()">Buscar</button>
    </div>
    </div>
    </div>
    <div id="modalAgregar" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <div>
                <h2>Agregar Alumno</h2>
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" class="form-control"><br><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="form-control"><br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" class="form-control"><br><br>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" class="form-control"><br><br>
                <label for="fecha">Fecha nacimiento:</label>
                <input type="date" id="fecha" class="form-control"><br><br>
                <label for="peso">Peso:</label>
                <input type="number" id="peso" class="form-control"><br><br>
                <label for="altura">Altura:</label>
                <input type="number" id="altura" class="form-control"><br><br>
                <button class="btn btn-outline-info" onclick="confirmarAgregarAlumno()">Guardar</button><br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

        function mostrarModal() {
            document.getElementById('modalAgregar').style.display = 'block';
        }

        function cerrarModal() {
            document.getElementById('modalAgregar').style.display = 'none';
        }

        window.onclick = function(event) {
            var modal = document.getElementById('modalAgregar');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        var alumnos = [
            { matricula: 23170057, nombre: 'Kevin', apellido:'Gonzalez', edad: 19, fecha: '2004-12-09', peso: 332, altura: 1.75, ...calcularIMC(80, 1.75)},
            { matricula: 23170051, nombre: "Gerardo", apellido: "Alcantar", edad: 22, fecha: "2001-09-04", peso: 110, altura: 1.75, ...calcularIMC(110, 1.75)},
            { matricula: 23170049, nombre: "Neztor", apellido: "Cabrera", edad: 15, fecha: "2008-09-27", peso: 150, altura: 1.75, ...calcularIMC(150, 1.75)},
            { matricula: 23330025, nombre: "Ricardo", apellido: "Villarreal", edad: 23, fecha: "2000-12-02", peso: 95, altura: 1.75, ...calcularIMC(95, 1.75)}
        ];

        function borrarAlumno(index) {
            alumnos.splice(index, 1);
            dibujarAlumnos();
        }

        function calcularIMC(peso, altura) {
            var resultado = peso / (altura * altura);
            var clasificacion = "";
            
            if (resultado < 18.5) {
                clasificacion = "Peso bajo";
            } else if (resultado < 24.9) {
                clasificacion = "Peso normal";
            } else if (resultado < 29.9) {
                clasificacion = "Sobrepeso";
            } else if (resultado < 34.9) {
                clasificacion = "Obesidad I";
            } else if (resultado < 39.9) {
                clasificacion = "Obesidad II";
            } else {
                clasificacion = "Obesidad III";
            }

            return {
                IMC: resultado,
                clasificacion: clasificacion
            };
        }

        function dibujarAlumnos(lista) {
            var listaAlumnos = document.getElementById('listaAlumnos');
            listaAlumnos.innerHTML = ''; // Limpiamos el contenido anterior

            var alumnosDibujar=lista||alumnos;

            alumnosDibujar.forEach(function(alumno, index) {
                var tr = document.createElement('tr');
                tr.className = "alumno";
                
                var td = document.createElement('td');
                var td2 = document.createElement('td');
                var td3 = document.createElement('td');
                var td4 = document.createElement('td');
                var td5 = document.createElement('td');
                var td6 = document.createElement('td');
                var td7 = document.createElement('td');
                var td8 = document.createElement('td');
                var td9 = document.createElement('td');
                var td0 = document.createElement('td');
                var td01 = document.createElement('td');

                var inputMatricula = document.createElement('input');
                inputMatricula.type = 'number';
                inputMatricula.className = 'form-control';
                inputMatricula.value = alumno.matricula;
                inputMatricula.setAttribute('data-index', index);
                inputMatricula.setAttribute('placeholder', 'Matrícula');
                inputMatricula.disabled = true;

                var inputNombre = document.createElement('input');
                inputNombre.type = 'text';
                inputNombre.className = 'form-control';
                inputNombre.value = alumno.nombre;
                inputNombre.setAttribute('data-index', index);
                inputNombre.setAttribute('placeholder', 'Nombre');
                inputNombre.disabled = true;

                var inputApellido = document.createElement('input');
                inputApellido.type = 'text';
                inputApellido.className = 'form-control';
                inputApellido.value = alumno.apellido;
                inputApellido.setAttribute('data-index', index);
                inputApellido.setAttribute('placeholder', 'Apellido');
                inputApellido.disabled = true;

                var inputEdad = document.createElement('input');
                inputEdad.type = 'text';
                inputEdad.className = 'form-control';
                inputEdad.value = alumno.edad;
                inputEdad.setAttribute('data-index', index);
                inputEdad.setAttribute('placeholder', 'Edad');
                inputEdad.disabled = true;
                
                var inputFecha = document.createElement('input');
                inputFecha.type = 'date';
                inputFecha.value = alumno.fecha;
                inputFecha.className = 'form-control';
                inputFecha.setAttribute('data-index', index);
                inputFecha.setAttribute('placeholder', 'Fecha');
                inputFecha.disabled = true;

                var inputPeso = document.createElement('input');
                inputPeso.type = 'number';
                inputPeso.className = 'form-control';
                inputPeso.value = alumno.peso;
                inputPeso.setAttribute('data-index', index);
                inputPeso.setAttribute('placeholder', 'Peso');
                inputPeso.disabled = true;

                var inputAltura = document.createElement('input');
                inputAltura.type = 'number';
                inputAltura.className = 'form-control';
                inputAltura.value = alumno.altura;
                inputAltura.setAttribute('data-index', index);
                inputAltura.setAttribute('placeholder', 'Altura');
                inputAltura.disabled = true;

                var inputIMC = document.createElement('input');
                inputIMC.type = 'number';
                inputIMC.className = 'form-control';
                inputIMC.value = alumno.IMC;
                inputIMC.setAttribute('data-index', index);
                inputIMC.setAttribute('placeholder', 'IMC');
                inputIMC.disabled = true;

                var inputClasificacion = document.createElement('input');
                inputClasificacion.type = 'text';
                inputClasificacion.className = 'form-control';
                inputClasificacion.value = alumno.clasificacion;
                inputClasificacion.setAttribute('data-index', index);
                inputClasificacion.setAttribute('placeholder', 'Clasificación');
                inputClasificacion.disabled = true;

                var botonEditar = document.createElement('button');
                botonEditar.className = 'btn btn-outline-warning';
                botonEditar.setAttribute('onclick', 'editarAlumno(' + index + ')');
                botonEditar.textContent = 'Editar';
                botonEditar.id='editb';

                var botonBorrar = document.createElement('button');
                botonBorrar.className = 'btn btn-outline-danger';
                botonBorrar.setAttribute('onclick', 'borrarAlumno(' + index + ')');
                botonBorrar.textContent = 'Eliminar';

                td.appendChild(inputMatricula);
                td2.appendChild(inputNombre);
                td3.appendChild(inputApellido);
                td4.appendChild(inputEdad);
                td5.appendChild(inputFecha);
                td6.appendChild(inputPeso);
                td7.appendChild(inputAltura);
                td8.appendChild(inputIMC);
                td9.appendChild(inputClasificacion);
                td0.appendChild(botonEditar);
                td01.appendChild(botonBorrar);

                tr.appendChild(td);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tr.appendChild(td5);
                tr.appendChild(td6);
                tr.appendChild(td7);
                tr.appendChild(td8);
                tr.appendChild(td9);
                tr.appendChild(td0);
                tr.appendChild(td01);
                
                listaAlumnos.appendChild(tr);
                
            });
        }
        
        dibujarAlumnos();

        function confirmarAgregarAlumno() {
            var nuevaMatricula = document.getElementById('matricula').value;
            var nuevoNombre = document.getElementById('nombre').value;
            var nuevoApellido = document.getElementById("apellido").value;
            var nuevaEdad = document.getElementById("edad").value;
            var nuevaFecha = document.getElementById("fecha").value;
            var nuevoPeso = document.getElementById("peso").value;
            var nuevoAltura = document.getElementById("altura").value;

            if (nuevaMatricula && nuevoNombre && nuevoApellido && nuevaEdad && nuevaFecha && nuevoPeso && nuevoAltura) {
                var imcResult = calcularIMC(nuevoPeso, nuevoAltura);
                alumnos.push({ 
                    matricula: nuevaMatricula, 
                    nombre: nuevoNombre, 
                    apellido: nuevoApellido, 
                    edad: nuevaEdad, 
                    fecha: nuevaFecha, 
                    peso: nuevoPeso, 
                    altura: nuevoAltura, 
                    IMC: imcResult.IMC, 
                    clasificacion: imcResult.clasificacion
                });
                dibujarAlumnos();
                cerrarModal();
            } else {
                alert('Por favor, complete todos los campos.');
            }
        }


        
        function editarAlumno(index) {

            var inputs = document.querySelectorAll('input[data-index="' + index + '"]');
            var btnEd = document.getElementById('editb');
            inputs.forEach(input => input.disabled = false);

            btnEd.onclick = btnEd.disabled = true;

            var td = inputs[0].parentNode;
            var buttonGuardarE = document.createElement('button');
            
            buttonGuardarE.textContent = 'Guardar edicion';
            buttonGuardarE.className = 'btn btn-outline-success';
            buttonGuardarE.onclick = function() {
                guardarCambios(index, inputs, buttonGuardarE);
                btnEd.disabled = false;
            };
            td.appendChild(buttonGuardarE);
        }
        

        function guardarCambios(index, inputs, buttonGuardarE) {
            var alumnoEditado = {
                matricula: inputs[0].value,
                nombre: inputs[1].value,
                apellido: inputs[2].value,
                edad: inputs[3].value,
                fecha: inputs[4].value,
                peso: parseFloat(inputs[5].value),
                altura: parseFloat(inputs[6].value)
            };

            var imcResult = calcularIMC(alumnoEditado.peso, alumnoEditado.altura);
            alumnoEditado.IMC = imcResult.IMC;
            alumnoEditado.clasificacion = imcResult.clasificacion;

            alumnos[index] = alumnoEditado;
            inputs.forEach(input => input.disabled = true);
            buttonGuardarE.remove();

            dibujarAlumnos();
        }

        document.getElementById("confirmarAgregar").addEventListener("click", confirmarAgregarAlumno);

        function ordenar() {
            var select = document.querySelector(".form-select");
            var valorSeleccionado = select.value;
            if (valorSeleccionado === "1") {
                oFecha1();
            } else if (valorSeleccionado === "2") {
                oFecha2();
            } else if (valorSeleccionado === "3") {
                imcAsc();
            }else if (valorSeleccionado === "4") {
                imcDes();
            }

            dibujarAlumnos();
        }

        function filtrofecha() {
var FechaPrin = document.getElementById('FechaPrin').value;
var FechaFinal = document.getElementById('FechaFinal').value;
console.log(FechaPrin);
console.log(FechaFinal);
if (FechaPrin && FechaFinal){
    var alumnosfiltrados = alumnos.filter(function(alumno){
        return alumno.fecha >= FechaPrin && alumno.fecha <= FechaFinal;
    });
    console.log(alumnosfiltrados);
    
    if (alumnosfiltrados.length > 0) {
        dibujarAlumnos(alumnosfiltrados);
    } else {
        alert('No hay alumnos en ese rengo.');
    }
    } else {
    alert('Por favor, complete los rangos.');
    }
  }
        function oFecha1() {
            alumnos.sort((a, b) => new Date(a.fecha) - new Date(b.fecha));
            dibujarAlumnos();
        }

        function oFecha2() {
            alumnos.sort((a, b) => new Date(b.fecha) - new Date(a.fecha));
            dibujarAlumnos();
        }

        function imcAsc() {
            alumnos.sort(function(a, b) {
                return parseFloat(a.IMC) - parseFloat(b.IMC);
            });
            dibujarAlumnos();
        }

        function imcDes() {
            alumnos.sort(function(a, b) {
                return parseFloat(b.IMC) - parseFloat(a.IMC);
            });
            dibujarAlumnos();
        }

        window.onload = function() {
            dibujarAlumnos();
        };
    </script>
</body>
@endsection

