@extends('layouts.dasboard')

<head>
    <title>PERPUSTAKAAN | WEB | BUKU</title>
</head>
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single-->
                </li>
                <span class="text-uppercase fs-5 fw-bold"> DATA BUKU</span>
            </ol>
        </nav>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">List Buku</div> --}}

                    <div class="card-body">
                        <div class="mb-4">
                            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                                + Tambah Data Buku
                            </a>
                        </div>

                        <table class="table table-bordered">
                            <thead class="bg-secondary" style="color: white">
                                <tr>
                                    <th class="col-2 px-1 py-2 text-center">FOTO BUKU</th>
                                    <th class="col-2 px-1 py-2 text-center">JUDUL BUKU</th>
                                    <th class="px-1 py-2 text-center">PENULIS</th>
                                    <th class="px-1 py-2 text-center">PENERBIT</th>
                                    <th class="col-2 px-1 py-2 text-center">TAHUN TERBIT</th>
                                    <th class="col-1 px-1 py-2 text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $b->foto) }}" alt="Foto Buku" width="100" />
                                        </td>
                                        <td class="px-1 py-2 text-center">{{ $b->judul }}</td>
                                        <td class="px-1 py-2 text-center">{{ $b->penulis }}</td>
                                        <td class="px-1 py-2 text-center">{{ $b->penerbit }}</td>
                                        <td class="px-1 py-2 text-center">{{ $b->tahun_terbit }}</td>
                                        <td>
                                            <form action="{{ route('buku.delete', $b->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a class="btn btn-primary" href="{{ route('buku.edit', $b->id) }}">
                                                    <i class="fa fa-pen-to-square"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
