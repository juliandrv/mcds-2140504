<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="badge-dark">
        <h1>Example conditional if</h1>
        @if ($show === 'both')
        <p class="text-primary"> My name is Manuel Alejandro</p>
        @elseif ($show === 'one' )
        <p class="text-primary">Mi name is Alejandro</p>
        @else
        <p class="text-primary">I'm sorry, but i don't say my name</p>
        @endif
    </div>

    <div class="badge-dark">
        <h1>Example Switch</h1>
        @switch($day)
        @case('monday')
        <p class="text-primary"> Today is the first class with OFAC</p>
        @break
        @case('wednesday')
        <p class="text-primary"> Today is the second class with OFAC</p>
        @break
        @default
        <p class="text-primary"> Today don't have class with OFAC</p>
        @endswitch
    </div>

    <div class="badge-dark">
        <h1>Example Loops</h1>
        <h3>number from 1 to 5</h3>
        @for ($i = 0; $i < 5; $i++) <tr>
            <td>
                <p class="text-primary"> {{ $i + 1}}</p>
            </td>
            </tr>
            @endfor

            <h3>email of first five users</h3>
            @foreach ($users as $user)
            <tr>
                <td>
                    <p class="text-primary"> {{ $user->email }}</p>
                </td>
            </tr>
            @endforeach

            <h3>name of first five users</h3>
            @forelse ($users as $user)
            <tr>
                <td>
                    <p class="text-primary"> {{ $user->fullname }}</p>
                    @empty
                    <p class="text-primary">empty fullname</p>                    
                </td>
            @endforelse
            </tr>
    </div>
</body>

</html>