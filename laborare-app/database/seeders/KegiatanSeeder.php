<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kegiatanData = [
            [
                'nama_kegiatan' => 'Gendong Untuk Kesetaraan',
                'deskripsi_kegiatan' => 'Kegiatan pembelajaran online pertama untuk siswa.',
                'tanggal_kegiatan' => '2024-04-10',
                'kategori_kegiatan' => 'Pendidikan',
                'sampul_kegiatan' => 'pembelajaran1.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Sukarelawan Sinar Kebaikan',
                'deskripsi_kegiatan' => 'Kegiatan pembelajaran online kedua untuk siswa.',
                'tanggal_kegiatan' => '2024-04-11',
                'kategori_kegiatan' => 'Pendidikan',
                'sampul_kegiatan' => 'pembelajaran2.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Hati Yang Rela Berbagi',
                'deskripsi_kegiatan' => 'Kegiatan donasi pertama untuk korban bencana alam.',
                'tanggal_kegiatan' => '2024-05-15',
                'kategori_kegiatan' => 'Lingkungan',
                'sampul_kegiatan' => 'donasi1.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Beri Waktu, Raih Perubahan',
                'deskripsi_kegiatan' => 'Kegiatan donasi kedua untuk korban bencana alam.',
                'tanggal_kegiatan' => '2024-05-16',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'donasi2.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Cinta Dalam Aksi Sinar',
                'deskripsi_kegiatan' => 'Seminar teknologi pertama di kota Anda.',
                'tanggal_kegiatan' => '2024-06-20',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'seminar1.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Menebar Kebaikan, Meraih Bahagia',
                'deskripsi_kegiatan' => 'Seminar teknologi kedua di kota Anda.',
                'tanggal_kegiatan' => '2024-06-21',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'seminar2.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Sukacita Penuh Kebahagiaan',
                'deskripsi_kegiatan' => 'Pameran seni pertama di galeri Anda.',
                'tanggal_kegiatan' => '2024-07-05',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'seni1.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Bertabur Cita Harapan Suka',
                'deskripsi_kegiatan' => 'Pameran seni kedua di galeri Anda.',
                'tanggal_kegiatan' => '2024-07-06',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'seni2.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Sukacita Bersama',
                'deskripsi_kegiatan' => 'Pameran seni kedua di galeri Anda.',
                'tanggal_kegiatan' => '2024-07-06',
                'kategori_kegiatan' => 'Sosial',
                'sampul_kegiatan' => 'seni3.jpg',
                'status_kegiatan' => 'Belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data ke dalam tabel 'kegiatan' menggunakan model Kegiatan
        foreach ($kegiatanData as $data) {
            Kegiatan::create($data);
        }

    }
}
