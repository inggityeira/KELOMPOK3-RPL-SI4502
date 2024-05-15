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
                'pesan' => 'Bantu anak-anak dari keluarga kurang mampu mendapatkan pendidikan yang layak. Dengan donasi Anda, kita dapat memberikan beasiswa dan alat tulis bagi mereka. Mari bersama kita wujudkan mimpi mereka untuk meraih masa depan yang cerah.',
                'nominal' => '20000',
                'id_donasi' => '1'
            ],
            [
                'id_user' => '2',
                'pesan' => 'Dalam situasi darurat, setiap detik sangat berharga. Donasi Anda dapat menyelamatkan nyawa dengan menyediakan perawatan medis, obat-obatan, dan dukungan kesehatan bagi mereka yang membutuhkan. Bersama, kita dapat memberikan pertolongan pertama yang cepat dan efektif.',
                'nominal' => '15000',
                'id_donasi' => '2'
            ],
            [
                'id_user' => '3',
                'pesan' => 'Tidak ada yang seharusnya tidur dalam keadaan lapar. Donasi Anda akan membantu menyediakan paket makanan dan kebutuhan pokok bagi keluarga miskin. Mari berbagi rezeki dan ciptakan senyuman di wajah mereka yang membutuhkan.',
                'nominal' => '15000',
                'id_donasi' => '3'
            ],
            [
                'id_user' => '4',
                'pesan' => 'Anak-anak yatim piatu membutuhkan cinta dan perhatian kita. Dengan donasi Anda, kita dapat memastikan mereka mendapatkan kebutuhan sehari-hari, pendidikan, dan perawatan yang layak. Jadilah bagian dari keluarga besar yang peduli pada masa depan mereka.',
                'nominal' => '20000',
                'id_donasi' => '4'
            ],
            [
                'id_user' => '5',
                'pesan' => 'Rumah ibadah adalah tempat kita mendekatkan diri kepada Tuhan. Donasi Anda akan membantu membangun dan merenovasi rumah ibadah sehingga masyarakat dapat beribadah dengan nyaman. Mari bersama-sama kita bangun tempat suci yang penuh berkah.',
                'nominal' => '50000',
                'id_donasi' => '5'
            ],
            [
                'id_user' => '6',
                'pesan' => 'Mari kita buat kota kita lebih hijau dan sehat. Donasi Anda akan digunakan untuk menanam pohon dan menjaga kelestarian lingkungan perkotaan. Bersama-sama, kita bisa mengurangi polusi dan meningkatkan kualitas udara untuk generasi mendatang.',
                'nominal' => '30000',
                'id_donasi' => '6'
            ],
            [
                'id_user' => '7',
                'pesan' => 'Bencana alam dapat terjadi kapan saja dan dimana saja. Donasi Anda sangat berarti bagi korban bencana yang membutuhkan tempat tinggal sementara, makanan, dan obat-obatan. Bersama, kita bisa memberikan harapan baru bagi mereka yang terdampak.',
                'nominal' => '70000',
                'id_donasi' => '7'
            ],
            [
                'id_user' => '8',
                'pesan' => 'Pemberdayaan perempuan adalah kunci kemajuan masyarakat. Donasi Anda akan membantu menyediakan pelatihan keterampilan, pendidikan, dan bantuan modal usaha kecil bagi perempuan. Mari dukung kemandirian dan keberhasilan mereka.',
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
