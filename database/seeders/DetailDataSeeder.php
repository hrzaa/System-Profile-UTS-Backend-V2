<?php

namespace Database\Seeders;

use App\Models\Detail_data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail_data::factory()->create([
            'id_user'=>1,
            'alamat'=>'Matesih',
            'tempat_lahir'=>'Karanganyar',
            'tanggal_lahir'=>"2002-6-02",
            'id_agama'=>1,
            'foto_ktp'=>'admin.png',
            'umur'=>20
        ]);
    }
}
