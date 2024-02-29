<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Kategoribukurelasi;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $kategori = Kategoribukurelasi::all();
        return view('buku.buku', compact('buku', 'kategori'));
    }
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit_buku', ['buku' => $buku]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Tahun_terbit' => 'required',

        ]);
        Buku::find($id)->update([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'Tahun_terbit' => $request->Tahun_terbit,
        ]);
        return redirect('/buku');
    }

    public function create()
    {
        $kategori = Kategori::distinct()->get();
        return view('buku.buku_create', compact('kategori'));
    }

    public function delete($id)
    {
        Buku::find($id)->delete();
        return redirect('/buku');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2043',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'kategori_id' => 'required',
        ]);
        $fotopatch = $request->file('foto')->store('buku_images', 'public');
        // Cari kategori berdasarkan ID
        $kategori = Buku::find($request->id);

        //Tambah buku baru beserta kategori
        $buku = Buku::create([
            'foto' => $fotopatch,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        $buku->kategori()->attach($kategori);

        return redirect('/buku')->with('success', 'Buku berhasil ditambahkan!');
    }
}
