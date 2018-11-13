<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
      @for ($i=0; $i < count($collection)-6; $i++)
          {{-- @for ($j=0; $j < count($collection); $j++) --}}
          @if($collection[$i]=='X'&&$collection[$i]!='0')
            <td>{{$collection[$i]}}</td>
          @else
            <td><a href="?choose={{$i}}">{{$collection[$i]}}</a></td>
          @endif
          {{-- @endfor --}}
      @endfor
      </tr>
      <tr>
        @for ($i=3; $i < count($collection)-3; $i++)
            {{-- @for ($j=0; $j < count($collection); $j++) --}}
            @if($collection[$i]=='X')
              <td>{{$collection[$i]}}</td>
            @else
              <td><a href="?choose={{$i}}">{{$collection[$i]}}</a></td>
            @endif
            {{-- @endfor --}}
        @endfor
      </tr>
      <tr>
        @for ($i=6; $i < count($collection); $i++)
            {{-- @for ($j=0; $j < count($collection); $j++) --}}
            @if($collection[$i]=='X')
              <td>{{$collection[$i]}}</td>
            @else
              <td><a href="?choose={{$i}}">{{$collection[$i]}}</a></td>
            @endif
            {{-- @endfor --}}
        @endfor
      </tr>
    </table>
    counts = {{$counts}}
    @if($counts==3)
      <br>Congrats
      <a href="/puzzle/reset">reset</a>
    @endif
  </body>
</html>
