<?php
// app/Http/Controllers/pController.php
namespace App\Http\Controllers;

use App\Models\pinjam_barang;
use App\Models\Barang;
use Illuminate\Http\Request;

class pinjam_barangController extends Controller
{
    // Menampilkan semua data peminjaman barang
    public function index()
    {
        $pinjam_barangs = pinjam_barang::all(); // Ambil semua data peminjaman barang
        return view('pinjam_barang.index', compact('pinjam_barangs')); // Kirim data ke view
    }

    // Menampilkan form untuk membuat peminjaman barang baru
    public function create()
    {
        $barangs = Barang::all(); // Ambil semua barang untuk opsi select
        return view('pinjam_barang.create', compact('barangs'));
    }

    // Menyimpan data peminjaman barang
    public function store(Request $request)
    {
        $validated = $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|exists:barang,id_barang', // id_barang harus ada di tabel barang
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'kondisi' => 'required|string|max:255',
        ]);

        pinjam_barang::create($validated); // Simpan data peminjaman barang ke tabel pinjam_barang
        return redirect()->route('pinjam_barang.index')->with('success', 'Peminjaman barang berhasil disimpan');
    }

    // Menampilkan form untuk mengedit peminjaman barang
    public function edit(pinjam_barang $pinjam_barang)
    {
        $barangs = Barang::all(); // Ambil semua barang untuk opsi select
        return view('pinjam_barang.edit', compact('pinjam_barang', 'barangs'));
    }

    // Mengupdate data peminjaman barang
    public function update(Request $request, pinjam_barang $pinjam_barang)
    {
        $validated = $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|exists:barang,id_barang', // id_barang harus ada di tabel barang
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'kondisi' => 'required|string|max:255',
        ]);

        $pinjam_barang->update($validated); // Update data peminjaman barang
        return redirect()->route('pinjam_barang.index')->with('success', 'Peminjaman barang berhasil diupdate');
    }

    // Menghapus data peminjaman barang
    public function destroy(pinjam_barang $pinjam_barang)
    {
        $pinjam_barang->delete(); // Hapus data peminjaman barang
        return redirect()->route('pinjam_barang.index')->with('success', 'Peminjaman barang berhasil dihapus');
    }
}
