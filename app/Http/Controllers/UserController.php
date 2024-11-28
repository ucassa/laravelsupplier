<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan semua data User
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Menampilkan form untuk membuat User baru
    public function create()
    {
        return view('User.create');
    }

    // Menyimpan data User ke database
    public function store(Request $request)
    {
        // Validasi request yang masuk
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user,username',  // Pastikan 'username' sesuai
            'password' => 'required|string|min:8',
           'level' => 'required|string|in:admin,User',
        ]);

        // Enkripsi password sebelum menyimpannya
        $validated['password'] = bcrypt($validated['password']);

        // Simpan data user baru
        User::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    // Menghapus data User dari database
    public function destroy(User $User)
    {
        $User->delete();
        return redirect()->route('user.index')->with('success', 'Data User berhasil dihapus.');
    }

    // Menampilkan form untuk mengedit User
    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('User.edit', compact('User'));
    }

    // Memperbarui data User
    public function update(User $User, Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',  // Pastikan 'username' sesuai
            'password' => 'required|string|min:8',
            'level' => 'required|string|in:admin,user',
        ]);

        // Enkripsi password jika diubah
        if ($validatedData['password']) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $User->update($validatedData);

        return redirect()->route('user.index')->with('success', 'Data User berhasil diperbarui.');
    }
}
