<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblusuarios;

class UserController extends Controller
{
        public function index()
        {
        $tblusuarios = tblusuarios::where('nombre', 'BRENDA')->get();
        return view('users.index', compact('tblusuarios'));
        }
    }
