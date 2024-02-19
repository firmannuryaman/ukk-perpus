@extends('layouts.dasboard')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-white">
                        <h1 class="h3 font-weight-bold mb-4">Data Peminjaman</h1>
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
                                    <th class="px-4 py-2">Nama Peminjam</th>
                                    <th class="px-4 py-2">Buku yang Dipinjam</th>
                                    <th class="px-4 py-2">Tanggal Peminjaman</th>
                                    <th class="px-4 py-2">Tanggal Pengembalian</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($peminjaman as $p)
                                    <tr>
                                        <td class="px-4 py-2">{{ $p->user->name }}</td>
                                        <td class="px-4 py-2">{{ $p->buku->judul }}</td>
                                        <td class="px-4 py-2">{{ $p->tanggal_peminjaman }}</td>
                                        <td class="px-4 py-2">{{ $p->tanggal_pengembalian }}</td>
                                        <td class="px-4 py-2">{{ $p->status }}</td>
                                        <td class="px-4 py-2">
                                            @if ($p->status === 'Dipinjam')
                                                <form action="{{ route('peminjaman.kembalikan', $p->id) }}" method="post">
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
