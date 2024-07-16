<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .game-box {
            max-width: 600px;
            padding: 40px;
            background-color: #ffffff;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .board {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            margin-top: 20px;
        }
        .cell {
            width: 100px;
            height: 100px;
            background-color: #007bff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .cell:hover {
            background-color: #0056b3;
        }
        .movements {
            margin-top: 20px;
        }
        .movements h2 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        .movements ul {
            list-style-type: none;
            padding: 0;
        }
        .movements li {
            font-size: 1.2em;
            margin-bottom: 5px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="game-box">
        <h1>Tic Tac Toe</h1>
        <p>Jugador 1: {{ $game->player1->name }}</p>
        <p>Jugador 2: {{ $player2_name }}</p>
        <p>Turno de: <span id="current-turn">{{ $currentTurn }}</span></p>
        <div class="board" id="board">
            @for ($i = 0; $i < 9; $i++)
                <div class="cell" data-position="{{ $i }}" role="button" aria-label="Posición {{ $i + 1 }}">
                    {{ $game->board[$i] }}
                </div>
            @endfor
        </div>
        <form id="move-form" action="{{ route('game.move', $game->id) }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="position" id="position">
        </form>
        <div class="movements">
            <h2>Movimientos Recientes</h2>
            <ul id="movement-list">
                @foreach ($moves as $move)
                    <li>{{ $move->user->name }} puso {{ $move->symbol }} en la posición: {{ $move->position }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.cell').click(function() {
                const position = $(this).data('position');
                $('#position').val(position);

                $.ajax({
                    url: $('#move-form').attr('action'),
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    data: {
                        position: position
                    },
                    success: function(data) {
                        if (data.success) {
                            $(`.cell[data-position="${position}"]`).text(data.symbol);
                            $('#current-turn').text(data.nextTurn);

                            if (data.winner) {
                                alert(data.winner + ' gana!');
                                window.location.href = '/history';
                            }

                            if (data.draw) {
                                alert('¡Empate! El juego ha terminado.');
                                window.location.href = '/history';
                            }

                            const newMovement = `<li>${data.symbol} puesto en la posición ${position}</li>`;
                            $('#movement-list').append(newMovement);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Hubo un error al realizar el movimiento. Por favor, inténtalo nuevamente.');
                    }
                });
            });
        });
    </script>
</body>
</html>
