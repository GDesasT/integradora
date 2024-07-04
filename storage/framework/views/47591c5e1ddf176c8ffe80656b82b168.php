<?php $__env->startSection('css'); ?>
<style>
.container {
    margin-top: 30px;
}

.btn-outline-info {
    margin-left: 15px;
    margin-top: 20px;
    
}

.btn-outline-warning {
    margin-right: 15px;
    margin-top: 20px;
    
}

.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    border: 2px solid #ccc;
}

.table th,
.table td {
    padding: 10px;
    text-align: center;
}

.table th {
    background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" class="form-control" id="key" name="key">
            </div>
            <div class="form-group">
                <label for="value">Value</label>
                <input type="text" class="form-control" id="value" name="value">
            </div>
            <button type="button" class="btn btn-outline-info" onclick="addKeyValue()">Insertar</button>
            <button type="button" class="btn btn-outline-warning" onclick="createObject()">Crear</button>

            <select id="selectObject" class="form-control mt-3" onchange="objectData()">
                <option value="-1">Selecciona un objeto</option>
            </select>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Datos del objeto</h3>
            <table id="dataTable" class="table table-bordered">
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevin\OneDrive\Documentos\GitHub\integradora\resources\views/practica1.blade.php ENDPATH**/ ?>