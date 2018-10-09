<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div>
          <label>Angka 1</label>
          <input type="text" id="angka1" value="">
          <label>Angka 2</label>
          <input type="text" id="angka2" value="">
          <button id="plus" type="button" name="button">+</button>
          <button id="minus" type="button" name="button">-</button>
          <button id="multiply" type="button" name="button">X</button>
          <button id="divide" type="button" name="button">/</button>
          <br>
          <div>
            <div id="hasil"></div>
          </div>
          <input type="submit" value="Back" onclick="window.location='/';" />
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $("#plus").click(function() {
              let a1 = parseInt($('#angka1').val());
              let a2 = parseInt($('#angka2').val());
              $('#hasil').text('Hasil : '+ (a1+a2));
            });
            $("#minus").click(function() {
              let a1 = parseInt($('#angka1').val());
              let a2 = parseInt($('#angka2').val());
              $('#hasil').text('Hasil : '+ (a1-a2));
            });
            $("#multiply").click(function() {
              let a1 = parseInt($('#angka1').val());
              let a2 = parseInt($('#angka2').val());
              $('#hasil').text('Hasil : '+ (a1*a2));
            });
            $("#divide").click(function() {
              let a1 = parseInt($('#angka1').val());
              let a2 = parseInt($('#angka2').val());
              $('#hasil').text('Hasil : '+ (a1/a2));
            });

        </script>
    </body>
</html>
