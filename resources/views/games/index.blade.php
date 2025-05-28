@extends('layouts.app')

@section('content')
<div>
    <div class="text-center py-20">
        <h1 class="text-2xl font-stretch-extra-expanded the-word">The</h1>
        <h1 class="text-4xl games-list-word glow">Games List</h1>
    </div>
    
    <table class="text-[5px] md:text-[10px] md:table-auto mx-auto border border-collapse game-table">
        <thead class="bg-gray-500 text-white border border-black">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Developer</th>
                <th>Genre</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr>
                <td>{{$game['id']}}</td>
                <td>{{$game['title']}}</td>
                <td>{{$game['developer']}}</td>
                <td>{{$game['genre']}}</td>
                <td>${{$game['price']}}</td>
                <td>
                    <a class="bg-green-500 px-auto py-1" href="{{ url('games/' . $game['id']) }}">Show Game</a>
                </td>
                <td>
                    <a class="bg-red-500 px-2 py-1" href="{{ url('games/' . $game['id'] . '/form') }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection