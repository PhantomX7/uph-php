<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <table border="1">
            <tbody>
            @for ($i=0; $i < 3; $i++)
                <tr>
                    @for ($j=0; $j < 3; $j++)
                    <td>
                        @if ($table[($i*3+$j)] && in_array(($i*3+$j), $randomNumber) )
                            B
                        @else 
                            X
                        @endif
                    </td>
                    @endfor
                </tr>
            @endfor
            </tbody>
        </table>
        <form action="/game" method="POST">
            @csrf
            <label >R:</label>
            <input type="text" name="r">
            <label >C:</label>
            <input type="text" name="c">
            <input type="submit">
        </form>
        
    </body>
</html>
