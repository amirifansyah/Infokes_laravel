<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return File::all();
    }

    public function show($id)
    {
        return File::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'folder_id' => 'required']);
        return File::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $file = File::findOrFail($id);
        $file->update($request->all());
        return $file;
    }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();
        return response()->json(['message' => 'File deleted successfully']);
    }
}
