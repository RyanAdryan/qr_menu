<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Kategori</title>
</head>
<body>
<h1>Edit Kategori</h1>
<form action="/category/update/{{ $category->id }}" method="POST">
@csrf
Nama: <input type="text" name="name" value="{{ $category->name }}"><br>
Deskripsi <input type="text" name="description" value="{{ $category->description }}"><br>
<button type="submit">Update</button>
</form>
</body>
</html>