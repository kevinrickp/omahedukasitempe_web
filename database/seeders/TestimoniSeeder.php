<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Bu Lulis Irsyad Yusuf',
                'jabatan' => 'Mantan Bupati Pasuruan',
                'pesan' => 'Tempenya enak dan gurih.',
            ],
            [
                'nama' => 'Bu Muna',
                'jabatan' => 'Kepala TK Mambaul Khoir, Purwodadi',
                'pesan' => 'Setiap ada kegiatan sekolah, tempe mendoan Zico selalu menjadi goodie bag.',
            ],
            [
                'nama' => 'Bu Mita Devi',
                'jabatan' => 'Kepala Puskesmas Kecamatan Purwodadi',
                'pesan' => 'Suka dengan produk Omah Edukasi Tempe, terutama penyedap rasa tempe semangit untuk alergi udang dan vegetarian.',
            ],
            [
                'nama' => 'Umi Azka',
                'jabatan' => 'Ibu rumah tangga asal Surabaya',
                'pesan' => 'Keripik tempenya beneran enaaaak! Anakku sekali makan langsung habis.',
            ],
            [
                'nama' => 'Mama Jessie',
                'jabatan' => 'Ibu rumah tangga yang tinggal di Rotterdam, Belanda',
                'pesan' => 'Keripik tempenya rasanya original dan rempahnya terasa banget. Kalau berkunjung ke Indonesia, pasti mampir ke Omah Edukasi Tempe untuk borong keripik tempe.',
            ],
            [
                'nama' => 'Agha',
                'jabatan' => 'Siswa SD Tapas Arrohman, Sidoarjo',
                'pesan' => 'Aku suka tempe bacem Zico. Mau makan terus, tempenya enak manis.',
            ],
        ];

        foreach ($data as $item) {
            Testimoni::create($item);
        }
    }
}
