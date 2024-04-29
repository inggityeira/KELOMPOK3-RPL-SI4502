<?php

namespace Database\Seeders;

use App\Models\Sukarelawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SukarelawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sukarelawanData = [
            [
                'id_user'=>1,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Nicholas.png',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin membantu dan berguna bagi sesama.',
                'id_kegiatan'=>1,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif1.png',
                'poin'=>5
            ],
            [
                'id_user'=>3,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Gita.png',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin menghabiskan waktu untuk kegiatan yang bermanfaat.',
                'id_kegiatan'=>2,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif2.png',
                'poin'=>10
            ],
            [
                'id_user'=>4,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Siwon.png',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin menghabiskan uang untuk hal positif.',
                'id_kegiatan'=>3,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif3.png',
                'poin'=>50
            ],
            [
                'id_user'=>5,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Selena.png',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin menghibur teman teman.',
                'id_kegiatan'=>4,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif4.png',
                'poin'=>5
            ],
            [
                'id_user'=>6,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Audrey.jpeg',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin bisa bertanggung jawab.',
                'id_kegiatan'=>5,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif5.png',
                'poin'=>15
            ],
            [
                'id_user'=>7,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'David.jpg',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin membantu dan berguna bagi sesama.',
                'id_kegiatan'=>6,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif6.png',
                'poin'=>5
            ],
            [
                'id_user'=>8,
                'notelpon_sukarelawan'=>62123456789,
                'kontak_wali'=>62123456789,
                'pas_foto'=>'Messi.jpg',
                'alamat_sukarelawan'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'motivasi'=>'Ingin membagikan semangat yang luar biasa.',
                'id_kegiatan'=>7,
                'status_sukarelawan'=>'Tidak Diterima',
                'sertifikat'=>'Sertif7.png',
                'poin'=>10
            ],
        ];

        // Insert data ke dalam tabel 'kegiatan' menggunakan model Kegiatan
        foreach ($sukarelawanData as $data) {
            Sukarelawan::create($data);
        }
    }
}
