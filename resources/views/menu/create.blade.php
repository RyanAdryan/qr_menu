<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Menu</title>
</head>
<body>
<h1>Tambah Menu</h1>
<form action="/menu/store" method="POST">
@csrf

<select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
</select>

Nama : <input type="text" name="name"><br><br>
Deskripsi : <input type="text" name="description"><br><br>
Harga : <input type="text" name="price"><br><br>
Foto : <input type="text" name="image"><br><br>
<select name="status">
        <option value="active">
            Active
        </option>

        <option value="inactive">
            Inactive
        </option>
    </select>

<button type="submit">Simpan</button>
</form>
</body>
</html>

