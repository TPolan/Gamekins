<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RollingController extends Controller
{
    public function index(Request $request)
    {
        $players = User::all();
        $roll = rand(0, $players->count()-1);
        $RollingView = view ('randomFirstPlayer.index', compact('players','roll','request'));
        return $RollingView;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function roll(Request $request)
    {
        $players = User::all();
        $pool = [];
        $mixedPool = $request->input();
        foreach ($mixedPool as $key => $input)
        {
            if ($input === 'x')
            {array_push($pool, $key);}
        }

        $roll = $pool[rand(0, count($pool)-1)];
        $RollingView = view ('randomFirstPlayer.index', compact('players','roll','request'));
        return $RollingView;
    }

}
