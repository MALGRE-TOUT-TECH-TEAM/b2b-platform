<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF</h2>

        <div class="d-flex justify-content-end mb-4">
          <a class="btn btn-secondary" href="/">Annuller</a>
            <a class="btn btn-primary" href="{{ URL::to('/user/pdf') }}">Export to PDF</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->firstname }}</td>
                    <td>{{ $data->surname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->birthdate }}</td>
                    <td>{{ $data->telephone }}</td>
                    <td>{{ $data->gender }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>