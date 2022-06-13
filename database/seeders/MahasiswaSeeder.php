<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nrp' => '200411100127',
            'nama' => 'Siti Ulun Nuha Karimah',
            'email' => 'siti@gmail.com',
            'alamat' => 'Sidoarjo',
        ]);
    }
}
