<!-- 
This is what the PDF document actualy is, the index has a button and <h1>title
that dosen't want to be on the pdf document
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table table-bordered">
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
  </body>
</html>