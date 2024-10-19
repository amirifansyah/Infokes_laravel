<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Folder;
use App\Models\Subfolder;
use App\Models\File;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat folder root
        $root1 = Folder::create(['name' => 'Folder 1']);
        $root2 = Folder::create(['name' => 'Folder 2']);

        // Buat sub-folder untuk Folder 1
        $sub1 = Subfolder::create(['name' => 'Subfolder 1.1', 'folder_id' => $root1->id]);
        $sub2 = Subfolder::create(['name' => 'Subfolder 1.2', 'folder_id' => $root1->id]);
        $sub3 = Subfolder::create(['name' => 'Subfolder 2.1', 'folder_id' => $root2->id]);

        // Buat sub-folder untuk Subfolder 1.1
        Subfolder::create(['name' => 'Subfolder 1.1.1', 'folder_id' => $sub1->id]);
        Subfolder::create(['name' => 'Subfolder 1.1.2', 'folder_id' => $sub1->id]);

        // Buat file di dalam Subfolder 1.1
        File::create(['name' => 'File 1.1.txt', 'subfolder_id' => $sub1->id]);
        File::create(['name' => 'File 1.2.txt', 'subfolder_id' => $sub2->id]);
        File::create(['name' => 'File 1.2.txt', 'subfolder_id' => $sub3->id]);
    }
}
