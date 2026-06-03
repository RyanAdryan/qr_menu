<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Menu</title>
</head>
<body>
<h1>Tambah Menu</h1>
<form action="/menu/store" method="POST" enctype="multipart/form-data">
@csrf

Nama : <input type="text" name="name"><br><br>
Deskripsi : <input type="text" name="description"><br><br>
Kategori : 
<select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
</select><br><br>
Harga : <input type="text" name="price"><br><br>
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

<button type="submit">Simpan</button>
</form>
</body>
</html>

