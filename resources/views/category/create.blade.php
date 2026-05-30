<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Kategori</title>
</head>
<body>
<h1>Tambah Kategori</h1>
<form action="/category/store" method="POST">
@csrf
Nama : <input type="text" name="name"><br><br>
Deskripsi : <input type="text" name="description"><br><br>
<button type="submit">Simpan</button>
</form>
</body>
</html>