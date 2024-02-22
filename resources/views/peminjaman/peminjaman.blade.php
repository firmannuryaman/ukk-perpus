@extends('layouts.dasboard')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single-->
                </li>
                <span class="text-uppercase fs-5 fw-bold"> DATA PEMINJAMAN BUKU</span>
            </ol>
        </nav>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List Buku Dipinjam</div>
                    <div class="card-body">
                        <div class="mb-4">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="mb-4">
                                <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">
                                    + Tambah Data Peminjaman
                                </a>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-2 text-center">Nama Peminjam</th>
                                        <th class="px-2 py-2 text-center">Buku yang Dipinjam</th>
                                        <th class="px-2 py-2 text-center">Tanggal Peminjaman</th>
                                        <th class="px-2 py-2 text-center">Tanggal Pengembalian</th>
                                        <th class="px-2 py-2 text-center">Status</th>
                                        <th class="px-2 py-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($peminjaman as $p)
                                        <tr>
                                            <td class="px-1 py-2 text-center">{{ $p->user->name }}</td>
                                            <td class="px-1 py-2">{{ $p->buku->Judul }}</td>
                                            <td class="px-1 py-2 text-center">{{ $p->tanggal_peminjaman }}</td>
                                            <td class="px-1 py-2 text-center">{{ $p->tanggal_pengembalian }}</td>
                                            <td class="px-1 py-2">{{ $p->status }}</td>
                                            <td class="px-1 py-2">
                                                @if ($p->status === 'Dipinjam')
                                                    <form action="{{ route('peminjaman.kembalikan', $p->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Kembalikan</button>
                                                    </form>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-4 py-2 text-center">Tidak ada data buku.</td>
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
