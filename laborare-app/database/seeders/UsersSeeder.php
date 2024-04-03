<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $userData = [
                [
                    'nama_user'=>'Inggit Yeira Budi A.',
                    'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                    'foto_profil'=>'inggit.jpg',
                    'nomor_telepon'=>62123456789,
                    'email'=>'individu@laborare.com',
                    'password'=>bcrypt('individu1234'),
                    'peran_user'=>'Individu',
                    'usia_user'=>20,
                    'jenis_kelamin'=>'Wanita'
                ],

                [
                    'nama_user'=>'Unicef Indonesia',
                    'alamat_user'=>'Jl. Jenderal Sudirman No.Kav. 29-31, RT.8/RW.3, Kuningan, Karet, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12920',
                    'foto_profil'=>'unicef.png',
                    'nomor_telepon'=>628987654321,
                    'email'=>'organisasi@laborare.com',
                    'password'=>bcrypt('organisasi1234'),
                    'peran_user'=>'Organisasi',
                    'penanggung_jawab'=>'Maniza Zaman',
                    'situs_web'=>'https://www.unicef.org/indonesia/id'
                ],
            ];

            foreach ($userData as $key =>$val){
                User::create($val);
            }
        }
    }
}
