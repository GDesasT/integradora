@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Usuarios</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción del Query</th>
                                    <th>Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pluck de nombres de usuarios</td>
                                    <td>
                                        @foreach ($query1 as $nombre)
                                            {{ $nombre }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saldo máximo de usuarios masculinos</td>
                                    <td>{{ $query2 }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Usuarios con marcas Nokia, Blackberry, Sony</td>
                                    <td>
                                        <ul>
                                            @foreach ($query3 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Número de usuarios con saldo 0 o inactivos</td>
                                    <td>{{ $query4 }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pluck de usuarios con nivel 1, 2 o 3</td>
                                    <td>
                                        @foreach ($query5 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Telefonos de usuarios con saldo <= 300</td>
                                    <td>
                                        @foreach ($query6 as $telefono)
                                            {{ $telefono }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Suma de saldo de usuarios con compañía Nextel</td>
                                    <td>{{ $query7 }}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Conteo de usuarios agrupados por compañía</td>
                                    <td>
                                        @foreach ($query8 as $compañia => $total)
                                            {{ $compañia }}: {{ $total }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Conteo de usuarios agrupados por nivel</td>
                                    <td>
                                        @foreach ($query9 as $nivel => $total)
                                            Nivel {{ $nivel }}: {{ $total }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Pluck de usuarios con nivel 2</td>
                                    <td>
                                        @foreach ($query10 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Emails de usuarios con dominio Gmail</td>
                                    <td>
                                        @foreach ($query11 as $email)
                                            {{ $email }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Usuarios con marcas LG, Samsung, Motorola</td>
                                    <td>
                                        <ul>
                                            @foreach ($query12 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Usuarios sin marcas LG, Samsung</td>
                                    <td>
                                        <ul>
                                            @foreach ($query13 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Usuarios con compañía Iusacell</td>
                                    <td>
                                        <ul>
                                            @foreach ($query14 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Usuarios sin compañía Telcel</td>
                                    <td>
                                        <ul>
                                            @foreach ($query15 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Promedio de saldo de usuarios con marca Nokia</td>
                                    <td>{{ $query16 }}</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Usuarios con compañías Iusacell o Axel</td>
                                    <td>
                                        <ul>
                                            @foreach ($query17 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Emails de usuarios que no son de Yahoo</td>
                                    <td>
                                        @foreach ($query18 as $email)
                                            {{ $email }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Usuarios sin compañías Telcel o Iusacell</td>
                                    <td>
                                        <ul>
                                            @foreach ($query19 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Usuarios con compañía Unefon</td>
                                    <td>
                                        <ul>
                                            @foreach ($query20 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Marcas de usuarios distintas</td>
                                    <td>
                                        @foreach ($query21 as $marca)
                                            {{ $marca }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Compañías distintas en orden aleatorio</td>
                                    <td>
                                        @foreach ($query22 as $compañia)
                                            {{ $compañia }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Pluck de usuarios con nivel 0 o 2</td>
                                    <td>
                                        @foreach ($query23 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Promedio de saldo de usuarios con marca LG</td>
                                    <td>{{ $query24 }}</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Pluck de usuarios con nivel 1 o 3</td>
                                    <td>
                                        @foreach ($query25 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Usuarios sin marca Blackberry</td>
                                    <td>
                                        <ul>
                                            @foreach ($query26 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Pluck de usuarios con nivel 3</td>
                                    <td>
                                        @foreach ($query27 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Pluck de usuarios con nivel 0</td>
                                    <td>
                                        @foreach ($query28 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Pluck de usuarios con nivel 1</td>
                                    <td>
                                        @foreach ($query29 as $usuario)
                                            {{ $usuario }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Conteo de usuarios agrupados por sexo</td>
                                    <td>
                                        @foreach ($query30 as $sexo => $total)
                                            {{ $sexo }}: {{ $total }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Usuarios con compañía AT&T</td>
                                    <td>
                                        <ul>
                                            @foreach ($query31 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Compañías distintas en orden descendente</td>
                                    <td>
                                        @foreach ($query32 as $compañia)
                                            {{ $compañia }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Usuarios inactivos</td>
                                    <td>
                                        <ul>
                                            @foreach ($query33 as $usuario)
                                                <li>{{ $usuario }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Telefonos de usuarios con saldo 0</td>
                                    <td>
                                        @foreach ($query34 as $telefono)
                                            {{ $telefono }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Saldo mínimo de usuarios masculinos</td>
                                    <td>{{ $query35 }}</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Telefonos de usuarios con saldo > 300</td>
                                    <td>
                                        @foreach ($query36 as $telefono)
                                            {{ $telefono }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Conteo de usuarios agrupados por marca</td>
                                    <td>
                                        @foreach ($query37 as $marca => $total)
                                            {{ $marca }}: {{ $total }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Usuarios sin marca LG</td>
                                    <td>
                                        <ul>
                                            @foreach ($query38 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Compañías distintas en orden ascendente</td>
                                    <td>
                                        @foreach ($query39 as $compañia)
                                            {{ $compañia }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Suma de saldo de usuarios con compañía Unefon</td>
                                    <td>{{ $query40 }}</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Emails de usuarios con dominio Hotmail</td>
                                    <td>
                                        @foreach ($query41 as $email)
                                            {{ $email }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Usuarios con saldo 0 o inactivos</td>
                                    <td>
                                        @foreach ($query42 as $nombre)
                                            {{ $nombre }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Usuarios con compañías Iusacell o Telcel</td>
                                    <td>
                                        <ul>
                                            @foreach ($query43 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>Marcas de usuarios distintas en orden ascendente</td>
                                    <td>
                                        @foreach ($query44 as $marca)
                                            {{ $marca }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>Marcas de usuarios distintas en orden aleatorio</td>
                                    <td>
                                        @foreach ($query45 as $marca)
                                            {{ $marca }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>Usuarios con compañías Iusacell o Unefon</td>
                                    <td>
                                        <ul>
                                            @foreach ($query46 as $usuario)
                                                <li>{{ $usuario->usuario }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>Usuarios sin marcas Motorola o Nokia</td>
                                    <td>
                                        <ul>
                                            @foreach ($query47 as $usuario)
                                                <li>{{ $usuario->nombre }} - {{ $usuario->telefono }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>Suma de saldo de usuarios con compañía Telcel</td>
                                    <td>{{ $query48 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
