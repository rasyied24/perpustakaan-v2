<?php

namespace Database\Seeders;

use App\Models\Rack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $racks = [
            ['code' => '001', 'name' => 'Rak A - Fiksi', 'location' => 'Lantai 1'],
            ['code' => '002', 'name' => 'Rak B - Nonfiksi', 'location' => 'Lantai 1'],
            ['code' => '003', 'name' => 'Rak C - Sains', 'location' => 'Lantai 2'],
            ['code' => '004', 'name' => 'Rak D - Sejarah', 'location' => 'Lantai 2'],
            ['code' => '005', 'name' => 'Rak E - Teknologi', 'location' => 'Lantai 3'],
            ['code' => '006', 'name' => 'Rak F - Referensi', 'location' => 'Lantai 3'],
            ['code' => '007', 'name' => 'Rak G - Komik', 'location' => 'Lantai 1'],
            ['code' => '008', 'name' => 'Rak H - Biografi', 'location' => 'Lantai 2'],
            ['code' => '009', 'name' => 'Rak I - Agama', 'location' => 'Lantai 2'],
            ['code' => '010', 'name' => 'Rak J - Anak-anak', 'location' => 'Lantai 1 (Kids)'],
        ];

        foreach ($racks as $rack) {
            Rack::create($rack);
        }
    }
}
