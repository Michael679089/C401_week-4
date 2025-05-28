<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

    <form action="{{ route('games.destroy_game', ['id' => $game->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <h1>Are you sure you want to delete this game?</h1>
        <ul>
            <li><strong>ID:</strong> {{ $game->id }}</li>
            <li><strong>Title:</strong> {{ $game->title }}</li>
            <li><strong>Developer:</strong> {{ $game->developer }}</li>
            <li><strong>Publisher:</strong> {{ $game->publisher }}</li>
            <li><strong>Genre:</strong> {{ $game->genre }}</li>
            <li><strong>Release Date:</strong> {{ $game->releaseDate }}</li>
            <li><strong>Platform:</strong> {{ $game->platform }}</li>
            <li><strong>Price:</strong> ${{ $game->price }}</li>
        </ul>
        <button type="submit">Delete</button>

        <p>If you ever see a json file, just click the redirect route. The JSON response is for the REST CLIENT</p>
    </form>
</div>