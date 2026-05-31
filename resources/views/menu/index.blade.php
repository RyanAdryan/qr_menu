@extends('layouts.app')

@section('content')

<!-- Page Heading -->

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800 mb-0">{{ $title }}</h1>

<a href="/menu/create" class="btn btn-primary shadow-sm">
    + Tambah Menu
</a>

</div>

<div class="row">


@foreach ($data as $menu)

<div class="col-md-6 col-lg-4 mb-4">

    <div class="card shadow border-0 h-100">

        <!-- Header Card -->
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $menu->name }}</h5>
        </div>

        <!-- Body Card -->
        <div class="card-body">

            <div class="mb-3 text-center">
                <img src="{{ asset('storage/' . $menu->image) }}"
                    alt="{{ $menu->name }}"
                    class="img-fluid rounded shadow-sm"
                    style="height:200px; width:100%; object-fit:cover;">
            </div>    

            <p class="mb-2">
                <strong>Kategori :</strong>
                {{ $menu->category->name }}
            </p>

            <p class="mb-2">
                <strong>Deskripsi :</strong><br>
                {{ $menu->description }}
            </p>

            <p class="mb-2">
                <strong>Harga :</strong><br>
                Rp {{ number_format($menu->price, 0, ',', '.') }}
            </p>

            

            <p class="mb-0">
                <strong>Status :</strong>

                @if($menu->status)
                    <span class="badge badge-success">
                        {{ $menu->status }}
                    </span>
                @else
                    <span class="badge badge-secondary">
                        Tidak Aktif
                    </span>
                @endif
            </p>

        </div>

        <!-- Footer Card -->
        <div class="card-footer bg-white">

            <div class="row">

                <div class="col-6">
                    <a href="/menu/edit/{{ $menu->id }}"
                       class="btn btn-warning btn-block">
                        Edit
                    </a>
                </div>

                <div class="col-6">
                    <a href="/menu/delete/{{ $menu->id }}"
                       class="btn btn-danger btn-block">
                        Hapus
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection