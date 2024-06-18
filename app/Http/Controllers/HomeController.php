<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function login()
    {
        return view('login');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function examen()
    {
        return view('examen');
    }

    public function practica1()
    {
        return view('practica1');
    }

    public function practica2()
    {
        return view('practica2');
    }
}
