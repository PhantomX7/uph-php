<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if($week == 'Weekdays')
      @if($day == 'Morning')
        <h1>Studying</h1>
      @elseif ($day == 'Afternoon')
        <h1>Watching</h1>
      @elseif ($day == 'Evening')
        <h1>Cycling</h1>
      @elseif ($day == 'Night')
        <h1>Studying</h1>
      @endif
    @elseif ($week == 'Weekends')
      @if($day == 'Morning')
        <h1>Watching</h1>
      @elseif ($day == 'Afternoon')
        <h1>Playing</h1>

      @elseif ($day == 'Evening')
        <h1>Cycling</h1>

      @elseif ($day == 'Night')
        <h1>Playing</h1>

      @endif
    @endif
  </body>
</html>
