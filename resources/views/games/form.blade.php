
@extends('layouts.app')


@section('content')
<div class="mx-10 mt-1 bg-red-400 border border-red-500 p-10">
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <form action="{{ route('games.destroy_game', ['id' => $game->id]) }}" method="POST" class="mb-5">
        @csrf
        @method('DELETE')
        
        <h1 class="text-bold">WARNING: You sure you want to delete this game?</h1>
        <ul class="mx-10 m-5 p-5 border border-white2">
            <li><strong>ID:</strong> {{ $game->id }}</li>
            <li><strong>Title:</strong> {{ $game->title }}</li>
            <li><strong>Developer:</strong> {{ $game->developer }}</li>
            <li><strong>Publisher:</strong> {{ $game->publisher }}</li>
            <li><strong>Genre:</strong> {{ $game->genre }}</li>
            <li><strong>Release Date:</strong> {{ $game->releaseDate }}</li>
            <li><strong>Platform:</strong> {{ $game->platform }}</li>
            <li><strong>Price:</strong> ${{ $game->price }}</li>
        </ul>
        <button type="submit" class="bg-red-500 border border-red-900 px-2 py-1">Delete</button>
    </form>

    <div class="border border-white flex">
        <p class="px-6 py-2">💡</p>
        <p>If you ever see a json file, just click the redirect route. The JSON response is for the REST CLIENT</p>
    </div>
</div>
@endsection