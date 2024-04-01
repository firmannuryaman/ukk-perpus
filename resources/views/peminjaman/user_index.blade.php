@extends('layouts.dasboard')

<head>
    <title>PERPUSTAKAAN | WEB | PEMINJAMAN</title>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Buku yang Dipinjam</div>
                    <br>
                    {{-- <div class="d-flex justify-content-end">
                        <a href="{{ route('print') }}" class="btn btn-primary">
                            <i class="fa  fa-download" style="font-size: 1pt"> &nbsp;Ekspor PDF</i></a>
                    </div> --}}
                    <div class="card-body">
                        @if ($peminjaman->isEmpty())
                            <p>Anda belum meminjam buku.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-secondary" style="color: white">
                                        <tr>
                                            <th class="px-2 py-2 text-center">NO</th>
                                            <th class="px-2 py-2 text-center">JUDUL BUKU</th>
                                            <th class="px-2 py-2 text-center">TANGGAL PEMINJAMAN</th>
                                            <th class="px-2 py-2 text-center">TANGGAL PENGEMBALIAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $index => $pinjam)
                                            <tr>
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td class="text-center">{{ $pinjam->buku->judul }}</td>
                                                <td class="text-center">{{ $pinjam->tanggal_peminjaman }}</td>
                                                <td class="text-center">{{ $pinjam->tanggal_pengembalian }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
