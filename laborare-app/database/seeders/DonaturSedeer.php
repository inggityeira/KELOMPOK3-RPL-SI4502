<?php

namespace Database\Seeders;

use App\Models\Donatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonaturSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donaturData = [
            [
                'id_user' => '1',
                'pesan' => 'Bantu anak-anak dari keluarga kurang mampu mendapatkan pendidikan yang layak.',
                'nominal' => '20000',
                'id_donasi' => '1'
            ],
            [
                'id_user' => '2',
                'pesan' => 'Dalam situasi darurat, setiap detik sangat berharga.',
                'nominal' => '15000',
                'id_donasi' => '2'
            ],
            [
                'id_user' => '3',
                'pesan' => 'Tidak ada yang seharusnya tidur dalam keadaan lapar.',
                'nominal' => '15000',
                'id_donasi' => '3'
            ],
            [
                'id_user' => '4',
                'pesan' => 'Anak-anak yatim piatu membutuhkan cinta dan perhatian kita.',
                'nominal' => '20000',
                'id_donasi' => '4'
            ],
            [
                'id_user' => '5',
                'pesan' => 'Rumah ibadah adalah tempat kita mendekatkan diri kepada Tuhan.',
                'nominal' => '50000',
                'id_donasi' => '5'
            ],
            [
                'id_user' => '6',
                'pesan' => 'Mari kita buat kota kita lebih hijau dan sehat.',
                'nominal' => '30000',
                'id_donasi' => '6'
            ],
            [
                'id_user' => '7',
                'pesan' => 'Bencana alam dapat terjadi kapan saja dan dimana saja.',
                'nominal' => '70000',
                'id_donasi' => '7'
            ],
            [
                'id_user' => '8',
                'pesan' => 'Pemberdayaan perempuan adalah kunci kemajuan masyarakat.',
                'nominal' => '5000',
                'id_donasi' => '8'
            ]
        ];

        // Insert data ke dalam tabel 'Donatur' menggunakan model Donatur
        foreach ($donaturData as $data) {
            Donatur::create($data);
        }
    }
}
