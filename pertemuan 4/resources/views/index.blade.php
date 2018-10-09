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
          <label>Angka 3</label>
          <input type="text" id="angka3" value="">
          <label>Angka 4</label>
          <input type="text" id="angka4" value="">
          <label>Angka 5</label>
          <input type="text" id="angka5" value="">
          <button id="button" type="button" name="button">Submit</button>
          <input type="submit" value="Calculator" onclick="window.location='/calculator';" />
        </div>
        <div>
          <div id="min"></div>
          <div id="max"></div>
          <div id="total"></div>
          <div id="prime"></div>
          <div id="count"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $("#button").click(function() {
              function prime(n,m) {
                function isPrime(num) {
                    if ( num === 0 || num === 1 ) {
                        return false;
                    }
                    for ( var i = 2; i < num; i++ ) {
                        if ( num % i === 0 ) {
                            return false;
                        }
                    }
                    return true;
                }
                var arr = [];
                for ( var i = n; i <= m; i++ ) {
                    if ( isPrime(i) ) {
                        arr.push(i);
                    }
                }
                return arr;
              }

              let a1 = $('#angka1').val();
              let a2 = $('#angka2').val();
              let a3 = $('#angka3').val();
              let a4 = $('#angka4').val();
              let a5 = $('#angka5').val();
              let min = Math.min(a1,a2,a3,a4,a5);
              let max = Math.max(a1,a2,a3,a4,a5);
              let primeNumbers = prime(min,max);
              let total = (min+max)/2;
              let count = max - min + 1;
              $('#min').text('Min : ' + min);
              $('#max').text('Max : ' + max);
              $('#total').text('Total : ' + total);
              $('#prime').text('Prime : ' + primeNumbers.join(', '));
              $('#count').text('Count : ' + count);
            });

        </script>
    </body>
</html>
