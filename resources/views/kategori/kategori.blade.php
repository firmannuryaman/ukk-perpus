@extends('layouts.dasboard')

<head>
    <title>PERPUSTAKAAN | WEB | KATEGORI</title>
</head>
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single-->
                </li>
                <span class="text-uppercase fs-5 fw-bold"> KATEGORI</span>
            </ol>
        </nav>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">List Kategori</div> --}}


                    <div class="container py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="mb-4">
                                            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                                                + Tambah Data Kategori
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead class="bg-secondary" style="color: white">
                                                <tr>
                                                    <th class="text-center text-uppercase px-4 py-2">Nama Kategori
                                                    <th class="text-center text-uppercase col-1 px-4 py-2">AKSI
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($kategori as $k)
                                                    <tr>
                                                        <td class="px-4 py-2">{{ $k->nama_kategori }}</td>
                                                        <td>
                                                            <form action="{{ route('kategori.delete', $k->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                                <a class="btn btn-primary"
                                                                    href="{{ route('kategori.edit', $k->id) }}">
                                                                    <i class="fa fa-pen-to-square"></i> </a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="px-4 py-2 text-center">Tidak ada
                                                            data kategori.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
