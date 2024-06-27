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

    public function usersByGenderM()
    {
        $tblusuarios = tblusuarios::where('sexo', 'M')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByGenderH()
    {
        $tblusuarios = tblusuarios::where('sexo', 'H')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByLevel2()
    {
        $tblusuarios = tblusuarios::where('nivel', 2)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByLevel3()
    {
        $tblusuarios = tblusuarios::where('nivel', 3)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByEmailGmail()
    {
        $tblusuarios = tblusuarios::where('email', 'like', '%gmail.com%')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByEmailOutlook()
    {
        $tblusuarios = tblusuarios::where('email', 'like', '%outlook.com%')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByPhonePrefix655()
    {
        $tblusuarios = tblusuarios::where('telefono', 'like', '655%')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByBrandSamsung()
    {
        $tblusuarios = tblusuarios::where('marca', 'SAMSUNG')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByBrandLG()
    {
        $tblusuarios = tblusuarios::where('marca', 'LG')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByCompanyTelcel()
    {
        $tblusuarios = tblusuarios::where('compañia', 'TELCEL')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByCompanyMovistar()
    {
        $tblusuarios = tblusuarios::where('compañia', 'MOVISTAR')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByBalanceGreaterThan100()
    {
        $tblusuarios = tblusuarios::where('saldo', '>', 100)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersByBalanceLessThan50()
    {
        $tblusuarios = tblusuarios::where('saldo', '<', 50)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function activeUsers()
    {
        $tblusuarios = tblusuarios::where('activo', 1)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function inactiveUsers()
    {
        $tblusuarios = tblusuarios::where('activo', 0)->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersWithNameLuis()
    {
        $tblusuarios = tblusuarios::where('nombre', 'LUIS')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersWithNameJessica()
    {
        $tblusuarios = tblusuarios::where('nombre', 'JESSICA')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersWithPhoneContains143()
    {
        $tblusuarios = tblusuarios::where('telefono', 'like', '%143%')->get();
        return view('users.index', compact('tblusuarios'));
    }

    public function usersWithEmailLive()
    {
        $tblusuarios = tblusuarios::where('email', 'like', '%live.com%')->get();
        return view('users.index', compact('tblusuarios'));
    }
}
