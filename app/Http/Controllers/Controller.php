<?php

namespace App\Http\Controllers;

abstract class Controller
{
<<<<<<< Updated upstream
    //
}
=======
//     public function index()
//     {
//     $tblusuarios = tblusuarios::where('age', '>', 25)->get();
//     return view('users.index', compact('users'));
// }
public function users()
    {
        return view('users');
    }
}


>>>>>>> Stashed changes
