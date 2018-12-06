<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="POST" action="/student">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Identity Card Number</label>
                <input type="text" class="form-control" placeholder="Enter ID Card number" name="identity_card">
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                        <label class="form-check-label" for="gridRadios1">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                        <label class="form-check-label" for="gridRadios2">
                        Female
                        </label>
                    </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="exampleInputEmail1">Birthday</label>
                <input type="date" class="form-control" name="birthdate">
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Hobby</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobby[]" value="socials">
                        <label class="form-check-label" for="gridCheck1">
                            Socials
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobby[]" value="sports">
                        <label class="form-check-label" for="gridCheck1">
                            Sports
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobby[]" value="games">
                        <label class="form-check-label" for="gridCheck1">
                            Games
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" placeholder="Enter address" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
        
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
        <a href="/student/pdf">export pdf</a>
    </div>
</body>
</html>