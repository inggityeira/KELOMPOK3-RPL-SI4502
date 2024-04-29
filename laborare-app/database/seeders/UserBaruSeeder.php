<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [

            [
                'nama_user'=>'Nikita Gradiana Shahiesa',
                'alamat_user'=>'Jl. Alam Sutera Boulevard No. 1 Alam Sutera Serpong Tangerang 15325',
                'foto_profil'=>'Nikita.jpg',
                'nomor_telepon'=>89876789097,
                'email'=>'nikita@laborare.com',
                'password'=>bcrypt('nikita1234'),
                'peran_user'=>'Individu',
                'usia_user'=>21,
                'jenis_kelamin'=>'Wanita'
            ],

            [
                'nama_user'=>'Lucky Akbari Handojo',
                'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'foto_profil'=>'Lucky.jpeg',
                'nomor_telepon'=>62123456789,
                'email'=>'lucky@laborare.com',
                'password'=>bcrypt('lucky1234'),
                'peran_user'=>'Individu',
                'usia_user'=>21,
                'jenis_kelamin'=>'Pria'
            ],

            [
                'nama_user'=>'Shobarna Ibadurrahman',
                'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'foto_profil'=>'Ibad.jpeg',
                'nomor_telepon'=>62123456789,
                'email'=>'shobarna@laborare.com',
                'password'=>bcrypt('shobarna1234'),
                'peran_user'=>'Individu',
                'usia_user'=>20,
                'jenis_kelamin'=>'Pria'
            ],

            [
                'nama_user'=>'Raihan Aryoseno',
                'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'foto_profil'=>'Seno.jpeg',
                'nomor_telepon'=>62123456789,
                'email'=>'seno@laborare.com',
                'password'=>bcrypt('seno1234'),
                'peran_user'=>'Individu',
                'usia_user'=>22,
                'jenis_kelamin'=>'Pria'
            ],

            [
                'nama_user'=>'Hendrickus Balzano Hermansah',
                'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'foto_profil'=>'Zano.jpg',
                'nomor_telepon'=>62123456789,
                'email'=>'zano@laborare.com',
                'password'=>bcrypt('zano1234'),
                'peran_user'=>'Individu',
                'usia_user'=>22,
                'jenis_kelamin'=>'Pria'
            ],

            [
                'nama_user'=>'Dummy Anggota Individu',
                'alamat_user'=>'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257',
                'nomor_telepon'=>62123456789,
                'email'=>'dummy@laborare.com',
                'password'=>bcrypt('individu1234'),
                'peran_user'=>'Individu',
                'usia_user'=>20,
                'jenis_kelamin'=>'Wanita'
            ],
        ];

        foreach ($userData as $val){
            User::insert($val);
        }
    }
    
}
