<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Subfolder;

class FolderController extends Controller
{
    // Mendapatkan semua folder (root dan subfolder)
    public function index()
    {
        return Folder::all(); // Mengambil semua folder
    }

    // Mendapatkan folder berdasarkan ID
    public function show($id)
    {
        return Folder::findOrFail($id); // Mengambil folder berdasarkan ID
    }

    // Menyimpan folder baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $folder = Folder::create($request->all());
        return response()->json($folder, 201); // Mengembalikan folder yang baru dibuat
    }

    // Memperbarui folder yang ada
    public function update(Request $request, $id)
    {
        $folder = Folder::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $folder->update($request->all());
        return response()->json($folder); // Mengembalikan folder yang diperbarui
    }

    // Menghapus folder
    public function destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->delete();
        return response()->json(['message' => 'Folder deleted successfully']); // Mengembalikan pesan sukses
    }
}
