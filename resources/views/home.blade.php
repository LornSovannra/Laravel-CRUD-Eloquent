<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div style="max-width: 1000px; margin: 20px auto; justify-content: center; align-items: center;">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h5>Information</h5>
                <a href="{{ route("create") }}" class="btn btn-warning">Create New Book</a>
            </div>
            <div style="margin: 10px;">
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Page</th>
                        <th scope="col">Price</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)    
                            <tr style="align-items: center;">
                                <td>{{ $book->title }}</td>
                                <td><img src="uploads/{{ $book->image }}" alt="{{ $book->image }}" style="width: 100px"></td>
                                <td>{{ $book->page }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->description }}</td>
                                <td>
                                    <a href={{ route("edit", $book->id) }}>Edit</a> | 
                                    <a href={{ route("remove", $book->id) }} class="show_confirm">Remove</a> |
                                    <a href={{ route("show", $book->id) }}>Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if(!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>