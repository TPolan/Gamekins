@extends('layouts.Wrapper')

@section('content')
    <h1>Choose Players:</h1>
    <form method="GET" action="{{action("RollingController@roll")}}">
        @csrf
            @foreach($players as $player)
                <input type="checkbox" name="{{$player->id}}" value="x">{{$player->nickname}} <br>
            @endforeach
        <button type="submit" value="roll">Roll for the Player</button>
    </form>
    @if(count($roll) > 0)
        <h2>The first player is {{$players[($roll - 1)]->nickname}}</h2>
    @else
        <h2>You did not choose any Players</h2>
    @endif

@endsection
