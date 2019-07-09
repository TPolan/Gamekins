@extends('layouts.Wrapper')

@section('content')
    <h1>Choose Players:</h1>
    <ul>
        @foreach($players as $player)
            <li><input type="checkbox" name="player{{}}"> {{$player->nickname}}</li>
        @endforeach
    </ul>

    <h2>The first player is {{}}</h2>
@endsection
