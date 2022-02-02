<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store | {{ $book -> title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style="max-width: 1000px; margin: 20px auto; justify-content: center; align-items: center;">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h5>Information</h5>
                <a href="{{ route("create") }}" class="btn btn-warning">Create New Book</a>
            </div>
            <div style="margin: 10px;">
              <div style="display: flex; justify-content: center; align-items: center;">
                <img src="../uploads/{{ $book->image }}" alt="{{ $book->image }}" style="width: 30%;" class="card-img-top">
              </div>
                <table class="table">
                    <tbody>
                      <tr>
                        <td style="font-weight: bold; width: 100px">ID</td>
                        <td>{{ $book -> id }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Title</td>
                        <td>{{ $book -> title }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Page</td>
                        <td>{{ $book -> page }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Price</td>
                        <td>{{ $book -> price }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Author</td>
                        <td>{{ $book -> author_id }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Description</td>
                        <td>{{ $book -> descripion }}</td>
                      </tr>
                    </tbody>
                </table>
                <a href={{ route("edit", $book->id) }}>Edit</a> |
                <a href="/">Back</a>
            </div>
        </div>
    </div>
</body>
</html>