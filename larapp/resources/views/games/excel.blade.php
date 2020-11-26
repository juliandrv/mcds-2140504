<table>
    <thead>
    <tr>        
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CATEGORIA</th>
        <th>IMAGEN</th>        
    </tr>
    </thead>
    <tbody>
    @foreach($games as $game)
        <tr>
            <td>{{ $game->id}}</td>
            <td>{{ $game->name}}</td>            
            <td><img src="{{ public_path().'/'.$game->category->image }}" width="50px"></td>
            <td><img src="{{ public_path().'/'.$game->image }}" width="50px"></td>
        </tr>
    @endforeach
    </tbody>
</table>