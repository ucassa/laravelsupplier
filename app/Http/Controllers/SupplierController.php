<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    // Menampilkan semua data supplier
        public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }


    // Menampilkan form untuk membuat supplier baru
    public function create()
    {
        return view('supplier.create');  // Ensure 'supplier.create' view exists
    }

    // Menyimpan data supplier ke database
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'id_supplier' => 'required|integer|unique:supplier',  // Ensure uniqueness for id_supplier
            'nama_supplier' => 'required|string|max:255',
            'alamat_supplier' => 'nullable|string',
            'telepon_supplier' => 'nullable|string|max:15',
        ]);

        // Create a new supplier using validated data
        supplier::create($validated);

        // Redirect to the supplier index route with success message
        return redirect()->route('supplier.index')->with('success', 'supplier berhasil ditambahkan.');
    }

    // Menghapus data supplier dari database
    public function destroy(Supplier $supplier)
    {
        // Delete the specified supplier
        $supplier->delete();

        // Redirect to the supplier index route with success message
        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil dihapus.');
    }

    // Show the edit form for a specific supplier
    public function edit($id)
    {
        // Find the supplier by ID or fail with 404 error
        $supplier = supplier::findOrFail($id);  // Using findOrFail to return a 404 if not found

        return view('supplier.edit', compact('supplier'));  // Ensure 'supplier.edit' view exists
    }

    // Update data supplier
    public function update(supplier $supplier, Request $request)
    {
        // Validate the incoming request data for updating
        $validatedData = $request->validate([
            'nama_supplier' => 'required|string|max:255',
            'alamat_supplier' => 'nullable|string',
            'telepon_supplier' => 'nullable|string|max:15',
        ]);

        // Update the supplier with the validated data
        $supplier->update($validatedData);

        // Redirect to the supplier index route with success message
        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil diperbarui.');
    }
}