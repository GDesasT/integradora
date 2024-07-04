@extends('layouts.app')

@section('css')
<style>
    .boton {
        padding: 10px 20px;
        margin-top: 20px;
        margin-left: 20px; 
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .select {
        margin-top: 20px;
        margin-left: 20px;
    }
    .input {
        margin-top: 20px;
        margin-left: 20px;
    }
</style>
@endsection

@section('content')
<div>
    <div>
        <button id="boton" class="btn btn-outline-primary boton">Picame</button>
    </div>
    <div>
        <select class="select" name="colorop" id="colorop">
            <option value="" disabled selected>Elige una opción</option>
            <option value="1">Color Random</option>
            <option value="2">Color Texto</option>
        </select>
    </div>
    <div>
        <input class="input" type="text" id="inputop" placeholder="Introduce el color del texto">
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#boton').click(function() {
            var selectcol = $('#colorop').val();
            var inputcol = $('#inputop');

            if (selectcol === '1') {
                var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
                $('body').css('background-color', randomColor);
            } else if (selectcol === '2') {
                inputcol.focus(); 
            }
        });

        $('#inputop').on('change', function() {
            var colorTexto = $(this).val();
            $('body').css('background-color', colorTexto);
        });
    });
</script>
@endsection
