<?php

namespace App\Http\Controllers;

use App\Models\Subfolder;
use Illuminate\Http\Request;

class SubfolderController extends Controller
{
    public function index()
    {
        return Subfolder::with('folder')->get(); // Mengambil semua subfolder dengan folder terkait
    }

    public function show($id)
    {
        return Subfolder::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'folder_id' => 'required']);
        return Subfolder::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $subfolder = Subfolder::findOrFail($id);
        $subfolder->update($request->all());
        return $subfolder;
    }

    public function destroy($id)
    {
        $subfolder = Subfolder::findOrFail($id);
        $subfolder->delete();
        return response()->json(['message' => 'Subfolder deleted successfully']);
    }
}
