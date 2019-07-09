<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RollingController extends Controller
{
    public function index()
    {
        $players = User::All();
        $roll = view ('randomFirstPlayer.rfp', compact('players'));
        return $roll;
    }
}
