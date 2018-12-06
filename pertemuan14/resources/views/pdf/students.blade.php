<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
        <table class="table mt-4">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Identity Card Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Hobby</th>
                    <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th>{{ $student->fullname }}</th>
                        <th>{{ $student->identity_card }}</th>
                        <th>{{ $student->gender }}</th>
                        <th>{{ $student->birthdate }}</th>
                        <th>{{ $student->hobby }}</th>
                        <th>{{ $student->address }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>
