@extends('layouts.app')

@section('css')
<style>
.container {
    margin-top: 30px;
}

.card {
    border: none;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 15px;
}

.btn-outline-info{
    border-radius: 25px;
    padding: 8px 20px;
    margin-top: 20px;
    margin-left: 20px; 
}

.btn-outline-warning{
    border-radius: 25px;
    padding: 8px 20px;
    margin-top: 20px;
    margin-left: 20px; 
}

.table {
    width: 100%;
    margin-top: 20px;
    border: none;
    border-radius: 10px;
    overflow: hidden;
    background-color: #ffffff;
}

.table th,
.table td {
    padding: 12px;
    text-align: center;
    border: 1px;
}

.table th {
    background-color: #f8f9fa;
    border-bottom: 2px;
}
</style>
@endsection

@section('content')
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">Agregar Clave y Valor</h4>
                    <div class="form-group">
                        <label for="key">Key</label>
                        <input type="text" class="form-control" id="key" name="key">
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="text" class="form-control" id="value" name="value">
                    </div>
                    <button type="button" class="btn btn-outline-info" onclick="addKeyValue()">Insertar datos</button>
                    <button type="button" class="btn btn-outline-warning" onclick="createObject()">Crear objeto</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">Datos del objeto</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Key</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
@endsection

@section('script')
<script>
let object=[];
        let currentObjectIndex = -1;

        function addKeyValue(){
            let key=document.getElementById('key').value;
            let value=document.getElementById('value').value;

            if(key&&value){
                if(currentObjectIndex  !== -1)
                {
                    object[currentObjectIndex][key]=value;
                    document.getElementById('key').value="";
                    document.getElementById('value').value="";
                    objectData();
                }
            }
        }

        function createObject(){
            let newObject={};
            object.push(newObject);
            currentObjectIndex =object.lenght - 1;
            updateData();
            objectData();
        }

        function updateData(){
            let select = document.getElementById('selectObject');
            select.innerHTML='';
            object.forEach((obj,index)=>{
                let option = document.createElement('option');
                option.value=index;
                option.text = `objeto ${index + 1}`;
                select.add(option);
            });
            select.value=currentObjectIndex ;

        }

        function objectData(){
        let select = document.getElementById('selectObject');
        currentObjectIndex  = select.value;

        let tbody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
        tbody.innerHTML = '';

        let selectedObject = object[currentObjectIndex ];
        for (let key in selectedObject) {
            let row = tbody.insertRow();
            let cellKey = row.insertCell(0);
            let cellValue = row.insertCell(1);
            cellKey.textContent = key;
            cellValue.textContent = selectedObject[key];
        }

        }
</script>
@endsection