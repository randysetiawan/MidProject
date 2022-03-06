<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form class="p-5" action="{{route('createBook')}}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="Input title">Title</label>
    62
    <input type="text" name="title" class="form-control"
    id="Input title">
    </div>
    <div class="form-group">
    <label for="Input author">Author</label>
    <textarea name="author" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <label for="Input pages number">Pages Number</label>
    <input type="int" name="pagesNumber" class="form-control"
    id="Input pages number">
    </div>
    <div class="form-group">
    <label for="Input Year">Year</label>
    <input type="int" name="year" class="form-control-file"
    id="Input Year">
    </div>
    <button type="submit">Submit</button>
    </form>
</body>
</html>