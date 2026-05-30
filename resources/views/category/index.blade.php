<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Daftar Kategory</title>
    </head>
    <body>

        <div><a href="/category/create">Tambah Kategori</a></div>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="/category/edit/{{ $category->id }}">Edit</a>
                    <a href="/catrgory/delete/{{ $category->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>