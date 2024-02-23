@extends('layouts.dasboard')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3 text-2xl font-semibold mb-4">Formulir Edit Buku</h1>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <p class="text-success">{{ session('success') }}</p>
                        @endif

                        <form action="{{ route('buku.update', $buku->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-4">
                                <label for="Judul" class="form-label">Nama buku:</label>
                                <input type="text" name="Judul" value="{{ $buku->Judul }}" class="form-control"
                                    required="required">
                            </div>
                            <div class="mb-4">
                                <label for="Penulis" class="form-label">Penulis:</label>
                                <input type="text" name="Penulis" value="{{ $buku->Penulis }}" class="form-control"
                                    required="required">
                            </div>
                            <div class="mb-4">
                                <label for="Penerbit" class="form-label">Penerbit:</label>
                                <input type="text" name="Penerbit" value="{{ $buku->Penerbit }}" class="form-control"
                                    required="required">
                            </div>
                            <div class="mb-4">
                                <label for="Tahun_terbit" class="form-label">Tahun terbit:</label>
                                <input type="number" name="Tahun_terbit" value="{{ $buku->Tshun_terbit }}"
                                    class="form-control" required="required">
                            </div>
                            <button type=" submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
