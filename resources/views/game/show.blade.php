<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .game-box {
            max-width: 600px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            color: #fff;
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
            background-color: rgba(255, 255, 255, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            color: #fff;
            cursor: pointer;
        }
        .movements {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="game-box">
        <h1>El Gato Guaton</h1>
        <p>Jugador 1: {{ $game->player1->name }}</p>
        <p>Jugador 2: {{ $player2_name }}</p>
        <p>Turno de: <span id="current-turn">{{ $currentTurn }}</span></p>
        <div class="board" id="board">
            @for ($i = 0; $i < 9; $i++)
                <div class="cell" data-position="{{ $i }}">
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
                    <li>{{ $move->user->name }} Puesto {{ $move->symbol }} en la Posicion: {{ $move->position }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
       
        document.querySelectorAll('.cell').forEach(cell => {
            cell.addEventListener('click', function() {
                const position = this.dataset.position;
                const form = document.getElementById('move-form');
                const positionInput = document.getElementById('position');

                positionInput.value = position;

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({
                        position: position
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.querySelector(`.cell[data-position="${position}"]`).textContent = data.symbol;

                        const movementList = document.getElementById('movement-list');
                        const newMovement = document.createElement('li');
                        newMovement.textContent = `${data.symbol} placed at position ${position}`;
                        movementList.appendChild(newMovement);

                        document.getElementById('current-turn').textContent = data.nextTurn;

                        if (data.winner) {
                            alert(data.winner + ' wins!');
                            window.location.href = '/history'; 
                        }

                        if (data.draw) {
                            alert('Draw! The game ends.');
                            window.location.href = '/history'; 
                        }
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
</body>
</html>
