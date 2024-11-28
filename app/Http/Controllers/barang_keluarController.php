<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use Illuminate\Http\Request;

class barang_keluarController extends Controller
{
    // Menampilkan semua data barang_keluar
    public function index()
    {
        $barang_keluars = barang_keluar::all();
        return view('barang_keluar.index', compact('barang_keluars'));
    }

    // Menampilkan form untuk membuat barang_keluar baru
    public function create()
    {
        return view('barang_keluar.create');  // Ensure 'barang_keluar.create' view exists
    }

    // Menyimpan data barang_keluar ke database
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        // Create a new barang_keluar using validated data
        barang_keluar::create($validated);

        // Redirect to the barang_keluar index route with success message
        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    // Menghapus data barang_keluar dari database
    public function destroy(barang_keluar $barang_keluar)
    {
        // Delete the specified barang_keluar
        $barang_keluar->delete();

        // Redirect to the barang_keluar index route with success message
        return redirect()->route('barang_keluar.index')->with('success', 'Data barang keluar berhasil dihapus.');
    }

    // Show the edit form for a specific barang_keluar
    public function edit($id)
    {
        // Find the barang_keluar by ID or fail with 404 error
        $barang_keluar = barang_keluar::findOrFail($id);  // Using findOrFail to return a 404 if not found

        return view('barang_keluar.edit', compact('barang_keluar'));  // Ensure 'barang_keluar.edit' view exists
    }

    // Update data barang_keluar
    public function update(barang_keluar $barang_keluar, Request $request)
    {
        // Validate the incoming request data for updating
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        // Update the barang_keluar with the validated data
        $barang_keluar->update($validated);

        // Redirect to the barang_keluar index route with success message
        return redirect()->route('barang_keluar.index')->with('success', 'Data barang keluar berhasil diperbarui.');
    }
}
