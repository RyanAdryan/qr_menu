<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Menu</title>
</head>
<body>
<h1>Edit Menu</h1>
<form action="/menu/update/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
@csrf

Nama: <input type="text" name="name" value="{{ $menu->name }}"><br><br>
Deskripsi <input type="text" name="description" value="{{ $menu->description }}"><br><br>
Kategori : 
<select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
</select><br><br>
Harga : <input type="text" name="price" value="{{ $menu->price }}"><br><br>
<div class="form-group">
    <label>Gambar Menu</label>
    <input type="file"
           name="image"
           class="form-control">
</div>
Status : <select name="status">
        <option value="active">
            Active
        </option>

        <option value="inactive">
            Inactive
        </option>
    </select><br><br>
<button type="submit">Update</button>
</form>
</body>
</html>