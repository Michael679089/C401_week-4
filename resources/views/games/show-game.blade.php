@extends('layouts.app')

@section('content')
<div class="h-screen mx-[30px]">
    
    <table class="text-[5px] md:text-[8px] lg:text-[15px] table-auto md:table-fixed mx-auto border border-collapse game-table">
        <thead class="bg-gray-500 text-white border border-black">
            <tr>
                <th class="text-[9px]">id</th>
                <th>title</th>
                <th>release date</th>
                <th>developer</th>
                <th>publisher</th>
                <th>genre</th>
                <th>platform</th>
                <th>price</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $game['id'] }}</td>
                <td>{{ $game['title'] }}</td>
                <td>{{ $game['releaseDate'] }}</td>
                <td>{{ $game['developer'] }}</td>
                <td>{{ $game['publisher'] }}</td>
                <td>{{ $game['genre'] }}</td>
                <td>{{ $game['platform'] }}</td>
                <td>{{ $game['price'] }}</td>
                <td>{{ $game['created_at'] }}</td>
                <td>{{ $game['updated_at'] }}</td>
            </tr>
        </tbody>
    </table>
</div>



@endsection
