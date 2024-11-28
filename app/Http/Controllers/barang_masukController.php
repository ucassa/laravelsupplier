<?php

namespace App\Http\Controllers;

use App\Models\barang_masuk;
use Illuminate\Http\Request;

class barang_masukController extends Controller
{
    // Menampilkan semua data barang_masuk
        public function index()
    {
        $barang_masuks = barang_masuk::all();
        return view('barang_masuk.index', compact('barang_masuks'));
    }


    // Menampilkan form untuk membuat barang_masuk baru
    public function create()
    {
        return view('barang_masuk.create');  // Ensure 'barang_masuk.create' view exists
    }

    // Menyimpan data barang_masuk ke database
    public function store(Request $request)
    {
      // Validate the incoming request
$validated = $request->validate([
    'id_barang' => 'required|integer',
    'nama_barang' => 'required|string|max:255', 
    'tgl_masuk' => 'required|date', 
    'jml_masuk' => 'required|integer', 
    'id_supplier' => 'required|integer', 
]);


        // Create a new barang_masuk using validated data
        barang_masuk::create($validated);

        // Redirect to the barang_masuk index route with success message
        return redirect()->route('barang_masuk.index')->with('success', 'barang_masuk berhasil ditambahkan.');
    }

    // Menghapus data barang_masuk dari database
    public function destroy(barang_masuk $barang_masuk)
    {
        // Delete the specified barang_masuk
        $barang_masuk->delete();

        // Redirect to the barang_masuk index route with success message
        return redirect()->route('barang_masuk.index')->with('success', 'Data barang_masuk berhasil dihapus.');
    }

    // Show the edit form for a specific barang_masuk
    public function edit($id)
    {
        // Find the barang_masuk by ID or fail with 404 error
        $barang_masuk = barang_masuk::findOrFail($id);  // Using findOrFail to return a 404 if not found

        return view('barang_masuk.edit', compact('barang_masuk'));  // Ensure 'barang_masuk.edit' view exists
    }

    // Update data barang_masuk
    public function update(barang_masuk $barang_masuk, Request $request)
    {
        // Validate the incoming request data for updating
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255', 
            'tgl_masuk' => 'required|date', 
            'jml_masuk' => 'required|integer', 
            'id_supplier' => 'required|integer',
        ]);

        // Update the barang_masuk with the validated data
    
        $barang_masuk->update($validated);

        // Redirect to the barang_masuk index route with success message
        return redirect()->route('barang_masuk.index')->with('success', 'Data barang masuk berhasil diperbarui.');
    }
}