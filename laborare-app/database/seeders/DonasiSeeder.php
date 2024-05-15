<?php

namespace Database\Seeders;

use App\Models\Donasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donasiData = [
            [
                'nama_donasi' => 'Donasi Pendidikan Untuk Semua',
                'target_donasi' => '1200000',
                'sampul_donasi' => 'donasi1.jpeg',
                'deskripsi_donasi' => 'Donasi ini bertujuan untuk menyediakan beasiswa dan alat tulis bagi anak-anak dari keluarga kurang mampu, sehingga mereka dapat melanjutkan pendidikan mereka tanpa hambatan.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Bantuan Medis Darurat',
                'target_donasi' => '500000',
                'sampul_donasi' => 'donasi2.jpeg',
                'deskripsi_donasi' => 'Donasi ini digunakan untuk menyediakan perawatan medis darurat, obat-obatan, dan dukungan kesehatan bagi korban bencana alam dan krisis kemanusiaan.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Donasi Pangan Untuk Kaum Dhuafa',
                'target_donasi' => '2500000',
                'sampul_donasi' => 'donasi3.jpeg',
                'deskripsi_donasi' => 'Donasi ini membantu menyediakan paket makanan dan kebutuhan pokok bagi keluarga miskin dan mereka yang hidup di bawah garis kemiskinan.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Dukungan Panti Asuhan',
                'target_donasi' => '3000000',
                'sampul_donasi' => 'donasi4.jpeg',
                'deskripsi_donasi' => 'Donasi ini mendukung panti asuhan dengan menyediakan kebutuhan sehari-hari, pendidikan, dan perawatan bagi anak-anak yatim piatu.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Pembangunan Rumah Ibadah',
                'target_donasi' => '1800000',
                'sampul_donasi' => 'donasi5.jpeg',
                'deskripsi_donasi' => 'Donasi ini bertujuan untuk membangun dan merenovasi rumah ibadah seperti masjid, gereja, dan pura, sehingga masyarakat dapat beribadah dengan nyaman.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Penghijauan Kota',
                'target_donasi' => '2500000',
                'sampul_donasi' => 'donasi6.jpeg',
                'deskripsi_donasi' => 'Donasi ini mendukung proyek penghijauan dengan menanam pohon di daerah perkotaan untuk mengurangi polusi dan memperbaiki kualitas udara.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Bantuan Bencana Alam',
                'target_donasi' => '4500000',
                'sampul_donasi' => 'donasi7.jpeg',
                'deskripsi_donasi' => 'Donasi ini digunakan untuk membantu korban bencana alam seperti gempa bumi, banjir, dan tsunami dengan menyediakan tempat tinggal sementara, makanan, dan obat-obatan.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Pemberdayaan Perempuan',
                'target_donasi' => '10000000',
                'sampul_donasi' => 'donasi8.jpeg',
                'deskripsi_donasi' => 'Donasi ini mendukung program pemberdayaan perempuan melalui pelatihan keterampilan, pendidikan, dan bantuan modal usaha kecil untuk meningkatkan kemandirian ekonomi mereka.',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Dukungan Kesehatan Mental',
                'target_donasi' => '800000',
                'sampul_donasi' => 'donasi9.jpeg',
                'deskripsi_donasi' => 'Donasi ini digunakan untuk menyediakan layanan konseling, terapi, dan dukungan kesehatan mental bagi individu yang mengalami stres, depresi, dan gangguan mental lainnya.                ',
                'status_donasi' => 'Belum'
            ],
            [
                'nama_donasi' => 'Pelestarian Satwa Liar',
                'target_donasi' => '900000',
                'sampul_donasi' => 'donasi10.jpeg',
                'deskripsi_donasi' => 'Donasi ini mendukung upaya pelestarian satwa liar dan habitatnya melalui program konservasi, rehabilitasi satwa yang terluka, dan edukasi masyarakat tentang pentingnya menjaga keanekaragaman hayati.',
                'status_donasi' => 'Belum'
            ]
            
        ];

        // Insert data ke dalam tabel '' menggunakan model Kegiatan
        foreach ($donasiData as $data) {
            Donasi::create($data);
        }
    }
}
