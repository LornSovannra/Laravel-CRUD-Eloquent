<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store | Create New Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style="max-width: 700px; margin: 20px auto; justify-content: center; align-items: center;">
        <form method="POST" action="{{ route("save-create") }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                  <h5>Create Author</h5>
                  <a href="/" class="btn btn-warning">Back</a>
              </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                    @error('title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Cover Image</label>
                    <input class="form-control" type="file" name="image">
                    @error('image')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Page" class="form-label">Page</label>
                    <input type="number" class="form-control" name="page">
                    @error('page')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price">
                    @error('price')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3" style="display: flex; flex-direction: column;">
                    <label for="Author" class="form-label">Author</label>
                    <select class="form-select" aria-label="Default select example" name="author">
                      <option selected disabled>Select Author</option>
                      @foreach ($authors as $author)
                        <option value="{{ $author->name }}">{{ $author->name }}</option>
                      @endforeach
                    </select>
                    @error('author')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                    @error('description')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</body>
</html>