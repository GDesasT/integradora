@extends('layouts.app')

@section('content')
<body>
<div class="tab">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Matricula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Peso</th>
          <th scope="col">Estatura</th>
          <th scope="col">IMC</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Fecha de Nacimiento</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody id="listaAlumnos"></tbody>
    </table>
    <div class="btn-area">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Registrar Nuevo Alumno
      </button>
      <select class="form-select" aria-label="Default select example">
        <option selected>Ordenar Por:</option>
        <option value="1">Por Fecha</option>
        <option value="2">IMC Ascendente</option>
        <option value="3">IMC Descendente</option>
      </select>
      <div class="filter">
        <h4>Filtrar por fechas:</h4>
        <label for="FechaPri">Desde:</label>
        <input type="date" class="form-control filter-1" placeholder="Desde:" id="FechaPri">
        <label for="FechaFin">Hasta:</label>
        <input type="date" class="form-control filter-1" placeholder="Hasta:" id="FechaFin">
        <button type="button" class="btn btn-primary filter-1" id="btn-filter" onclick="filtrofecha()"
          disabled>Filtrar</button>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Ingresar Datos
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="number" class="form-control" placeholder="Matricula" id="Matricula">
          <input type="text" class="form-control" placeholder="Nombre" id="Nombre">
          <input type="text" class="form-control" placeholder="Apellido" id="Apellido">
          <input type="number" class="form-control" placeholder="Peso" id="Peso">
          <input type="number" class="form-control" placeholder="Estatura" id="Estatura">
          <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="Fecha">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" id="btnpopo" onclick="confirmarAgregarAlumno()" class="btn btn-primary" disabled>Save
            changes</button>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

@section('css') 
<style>
    .modal-body {
  display: flex;
}

.form-control {
  max-width: 200px;
}

.form-select{
  max-width: 200px;
  margin-left: 20px;
}

.btn-area{
  display: flex;
  max-height: 38px;
}

.filter{
  max-width: 200px;
  margin-left: 20px;
}

.filter-1{
  margin: 5px;
}

.tab {
  max-width: 80%;
  margin: 5% 10%;
}

.form-control{
  max-width: 80%;
  min-width: 80px;
}

.td-control{
  align-items: center;
  margin-right: 0;
  max-width: 200px;
}
</style>
@endsection

@section('script')
<script>
    var alumnos = [
  {
    matricula: 23170051,
    nombre: "Juan Gerardo",
    apellido: "Alcantar Torres",
    peso: 54.0,
    estatura: 1.67,
    fechanacimiento: "2001-09-04",
  },
  {
    matricula: 23170057,
    nombre: "Kevin",
    apellido: "Gonzalez",
    peso: 80,
    estatura: 1.7,
    fechanacimiento: "2004-12-09",
    },
  {
    matricula: 2,
    nombre: "Dannespino",
    apellido: "Rojo",
    peso: 82,
    estatura: 1.7,
    fechanacimiento: "2005-09-27",
  },
];

function dibujarAlumnos(lista) {
  var listaAlumnos = document.getElementById("listaAlumnos");
  listaAlumnos.innerHTML = "";

  var alumnosADibujar = lista ||  alumnos;

  alumnosADibujar.forEach(function (alumno, index) {
    var tr = document.createElement("tr");
    tr.className = "alumno";

    var td = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var td4 = document.createElement("td");
    var td5 = document.createElement("td");
    var td6 = document.createElement("td");
    var td7 = document.createElement("td");
    var td8 = document.createElement("td");
    var td9 = document.createElement("td");
    var td0 = document.createElement("td");


    td.className = "td-control";
    td2.className = "td-control";
    td3.className = "td-control";
    td4.className = "td-control";
    td5.className = "td-control";
    td6.className = "td-control";
    td7.className = "td-control";
    td8.className = "td-control";
    td9.className = "td-controlbtn";
    td0.className = "td-control";

    var height = alumno.estatura;
    var weight = alumno.peso;
    var resultado = (weight / Math.pow(height, 2)).toFixed(2);
    var imc = "";

    if (resultado < 18.5) {
      imc = "Peso bajo";
    } else if (resultado < 24.9) {
      imc = "Peso normal";
    } else if (resultado < 29.9) {
      imc = "Sobre peso";
    } else if (resultado < 30) {
      imc = "Obesidad I";
    } else if (resultado < 35) {
      imc = "Obesidad II";
    } else if (resultado >= 39.9) {
      imc = "Obesidad III";
    }

    var inputMatricula = document.createElement("input");
    inputMatricula.type = "text";
    inputMatricula.className = "form-control";
    inputMatricula.value = alumno.matricula;
    inputMatricula.setAttribute("data-index", index);
    inputMatricula.setAttribute("placeholder", "Matrícula");
    inputMatricula.disabled = true;

    var inputNombre = document.createElement("input");
    inputNombre.type = "text";
    inputNombre.className = "form-control";
    inputNombre.value = alumno.nombre;
    inputNombre.setAttribute("data-index", index);
    inputNombre.setAttribute("placeholder", "Nombre");
    inputNombre.disabled = true;

    var inputApellido = document.createElement("input");
    inputApellido.type = "text";
    inputApellido.className = "form-control";
    inputApellido.value = alumno.apellido;
    inputApellido.setAttribute("data-index", index);
    inputApellido.setAttribute("placeholder", "Apellido");
    inputApellido.disabled = true;

    var inputPeso = document.createElement("input");
    inputPeso.type = "number";
    inputPeso.className = "form-control";
    inputPeso.value = alumno.peso;
    inputPeso.setAttribute("data-index", index);
    inputPeso.setAttribute("placeholder", "Peso");
    inputPeso.disabled = true;

    var inputEstatura = document.createElement("input");
    inputEstatura.type = "number";
    inputEstatura.className = "form-control";
    inputEstatura.value = alumno.estatura;
    inputEstatura.setAttribute("data-index", index);
    inputEstatura.setAttribute("placeholder", "Estatura");
    inputEstatura.disabled = true;

    var inputFecha = document.createElement("input");
    inputFecha.type = "date";
    inputFecha.className = "form-control";
    inputFecha.value = alumno.fechanacimiento;
    inputFecha.setAttribute("data-index", index);
    inputFecha.setAttribute("placeholder", "Fecha nacimiento");
    inputFecha.disabled = true;

    var inputIMC = document.createElement("input");
    inputIMC.type = "number";
    inputIMC.className = "form-control";
    inputIMC.value = resultado;
    inputIMC.setAttribute("data-index", index);
    inputIMC.setAttribute("placeholder", "Estatura");
    inputIMC.disabled = true;

    var inputDesc = document.createElement("input");
    inputDesc.type = "text";
    inputDesc.className = "form-control";
    inputDesc.value = imc;
    inputDesc.setAttribute("data-index", index);
    inputDesc.setAttribute("placeholder", "Apellido");
    inputDesc.disabled = true;

    var buttonE = document.createElement("button");
    buttonE.className = "btn btn-outline-success";
    buttonE.textContent = "Editar";
    buttonE.onclick = function () {
      editarAlumno(index);
    }

    var buttonB = document.createElement("button");
    buttonB.className = "btn btn-outline-danger";
    buttonB.textContent = "Borrar";
    buttonB.onclick = function () {
      borrarAlumno(index);
    };

    td.appendChild(inputMatricula);
    td2.appendChild(inputNombre);
    td3.appendChild(inputApellido);
    td4.appendChild(inputPeso);
    td5.appendChild(inputEstatura);
    td6.appendChild(inputIMC);
    td7.appendChild(inputDesc);
    td8.appendChild(inputFecha);
    td9.appendChild(buttonE);
    td0.appendChild(buttonB);

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

    listaAlumnos.appendChild(tr);
  });
}

function OrdFecha() {
  alumnos.sort((a, b) => new Date(a.fechanacimiento) - new Date(b.fechanacimiento));
  dibujarAlumnos();
}

function OrdIMCAsc(){
  alumnos.sort((a,b) => a.peso / Math.pow(a.estatura, 2) - b.peso / Math.pow(b.estatura, 2));
  dibujarAlumnos();
}

function OrdIMCDes(){
  alumnos.sort((a,b) => b.peso / Math.pow(b.estatura, 2) - a.peso / Math.pow(a.estatura, 2));
  dibujarAlumnos();
}

dibujarAlumnos();

document.addEventListener("DOMContentLoaded", function () {
  var select = document.querySelector(".form-select");
  select.addEventListener("change", function () {
    ordenar();
  });
});

function filtrofecha() {
  var FechaPri = document.getElementById('FechaPri').value;
  var FechaFin = document.getElementById('FechaFin').value;

  if (FechaPri && FechaFin){
      var alumnosfiltrados = alumnos.filter(function(alumno){
          return alumno.fechanacimiento >= FechaPri && alumno.fechanacimiento <= FechaFin;
      });

      if (alumnosfiltrados.length > 0) {
        dibujarAlumnos(alumnosfiltrados);
      } else {
        alert('No se encontraron alumnos en el rango de fechas especificado.');
      }
    }
  }

function ordenar() {
  var select = document.querySelector(".form-select");
  var valorSeleccionado = select.value;
  if (valorSeleccionado === "1") {
    OrdFecha();
  } else if (valorSeleccionado === "2") {
    OrdIMCAsc();
  } else if (valorSeleccionado === "3") {
    OrdIMCDes();
  }

  dibujarAlumnos();
}

document.addEventListener("DOMContentLoaded", function() {
  var inputFechaPri = document.getElementById('FechaPri');
  var inputFechaFin = document.getElementById('FechaFin');
  var btnfilter = document.getElementById('btn-filter');

  function verificarbtnfecha () {
    if ( inputFechaPri.value.trim() !== '' &&
         inputFechaFin.value.trim() !== '')
         {
          btnfilter.disabled = false;
         } 
         
         else 
         {
          btnfilter.disabled = true;
         }
  }

  inputFechaPri.addEventListener('input', verificarbtnfecha);
  inputFechaFin.addEventListener('input', verificarbtnfecha);
});

document.addEventListener("DOMContentLoaded", function () {
  var inputMatricula = document.getElementById('Matricula');
  var inputNombre = document.getElementById('Nombre');
  var inputApellido = document.getElementById('Apellido');
  var inputPeso = document.getElementById('Peso');
  var inputEstatura = document.getElementById('Estatura');
  var inputFecha = document.getElementById('Fecha');
  var botonGuardar = document.getElementById('btnpopo');

  function verificarCampos() {   
      if (
          inputMatricula.value.trim() !== '' &&
          inputNombre.value.trim() !== '' &&
          inputApellido.value.trim() !== '' &&
          inputPeso.value.trim() !== '' &&
          inputEstatura.value.trim() !== '' &&
          inputFecha.value.trim() !== ''
      ) {
          botonGuardar.disabled = false;
      } else {
          botonGuardar.disabled = true;
      }
  }

  inputMatricula.addEventListener('input', verificarCampos);
  inputNombre.addEventListener('input', verificarCampos);
  inputApellido.addEventListener('input', verificarCampos);
  inputPeso.addEventListener('input', verificarCampos);
  inputEstatura.addEventListener('input', verificarCampos);
  inputFecha.addEventListener('input', verificarCampos);
});


function editarAlumno(index) {
  var tr = document.querySelectorAll(".alumno")[index];
  var inputs = tr.querySelectorAll("input");
  var inputimc = tr.querySelector("td:nth-child(6) input");
  var inputdes = tr.querySelector("td:nth-child(7) input");

  inputs.forEach(function(input) {
    input.disabled = false;
  });

    inputimc.disabled = true;
    inputdes.disabled = true;

  var buttonGuardar = document.createElement("button");
  buttonGuardar.className = "btn btn-outline-primary";
  buttonGuardar.textContent = "Guardar";
  buttonGuardar.onclick = function() {
    guardarCambios(index);
  };

  var tdActions = tr.querySelector(".td-controlbtn");
  tdActions.innerHTML = "";
  tdActions.appendChild(buttonGuardar);
}

function guardarCambios(index) {
  var tr = document.querySelectorAll(".alumno")[index];
  var inputs = tr.querySelectorAll("input");
  
  alumnos[index].matricula = inputs[0].value;
  alumnos[index].nombre = inputs[1].value;
  alumnos[index].apellido = inputs[2].value;
  alumnos[index].peso = inputs[3].value;
  alumnos[index].estatura = inputs[4].value;
  alumnos[index].fechanacimiento = inputs[7].value;

  var height = alumnos[index].estatura;
  var weight = alumnos[index].peso;
  var resultado = (weight / Math.pow(height, 2)).toFixed(2);
  var imc = "";

  ordenar();

  if (resultado < 18.5) {
    imc = "Peso bajo";
  } else if (resultado < 24.9) {
    imc = "Peso normal";
  } else if (resultado < 29.9) {
    imc = "Sobre peso";
  } else if (resultado < 30) {
    imc = "Obesidad I";
  } else if (resultado < 35) {
    imc = "Obesidad II";
  } else if (resultado >= 39.9) {
    imc = "Obesidad III";
  }

  inputs.forEach(function(input) {
    input.disabled = true;
  });

  var buttonEditar = document.createElement("button");
  buttonEditar.className = "btn btn-outline-success";
  buttonEditar.textContent = "Editar";
  buttonEditar.onclick = function() {
    editarAlumno(index);
  };

  var tdActions = tr.querySelector(".td-controlbtn");
  tdActions.innerHTML = "";
  tdActions.appendChild(buttonEditar);

  var inputIMC = tr.querySelector("td:nth-child(6) input");
  var inputDesc = tr.querySelector("td:nth-child(7) input");
  inputIMC.value = resultado;
  inputDesc.value = imc;
}

function borrarAlumno(index) {

  alumnos.splice(index, 1);
  
  dibujarAlumnos();
}

function confirmarAgregarAlumno() {
  var nuevaMatricula = document.getElementById("Matricula").value;
  var nuevoNombre = document.getElementById("Nombre").value;
  var nuevoApellido = document.getElementById("Apellido").value;
  var nuevoPeso = document.getElementById("Peso").value;
  var nuevaEstatura = document.getElementById("Estatura").value;
  var nuevaFecha = document.getElementById("Fecha").value;

  if (
    nuevaMatricula &&
    nuevoNombre &&
    nuevoApellido &&
    nuevoPeso &&
    nuevaEstatura &&
    nuevaFecha
  ) {
    alumnos.push({
      matricula: nuevaMatricula,
      nombre: nuevoNombre,
      apellido: nuevoApellido,
      peso: nuevoPeso,
      estatura: nuevaEstatura,
      fechanacimiento: nuevaFecha,
    });

    dibujarAlumnos();

    document.getElementById("Matricula").value = '';
    document.getElementById("Nombre").value = '';
    document.getElementById("Apellido").value = '';
    document.getElementById("Peso").value = '';
    document.getElementById("Estatura").value = '';
    document.getElementById("Fecha").value = '';
  }
}

</script>
@endsection