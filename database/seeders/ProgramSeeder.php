<?php

namespace Database\Seeders;

use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'name' => 'Accounting',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Mahir dalam Pencatatan Transaksi dan Jurnal Umum',
                    'Keterampilan dalam Menyusun Laporan Keuangan',
                    'Keahlian dalam Analisis Lanjutan dan Pengambilan Keputusan'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/afb76a4a6bfb7b237548ee4ae46691c6.png',
                'mentor' => 'Luna Yofanda',
                'mentor_job' => 'Accounting and Finance Associate',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/592c3588008d3db09b386cb52e508a0d.png'
            ],
            [
                'name' => 'Content Writing',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Kuasai Teknik Menulis yang Efektif',
                    'Optimasi SEO',
                    'Portofolio yang Kuat'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/b78b711845bab16b1cb07372e0da86a9.png',
                'mentor' => 'Nasuha Ali',
                'mentor_job' => 'Senior Copywriter',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/71daf35f81c7b4ffc5a0385b554f9252.png'
            ],
            [
                'name' => 'Data Analytic',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Real Case dengan Big Data',
                    'Kuasai Microsoft Excel dan Dashboard',
                    'Mengembangkan Data Storytelling'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/37acaf2f68e69f70272d6d565f20c202.png',
                'mentor' => 'Putu Rika Sahriana',
                'mentor_job' => 'Data Analyst',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/aa596c4583102e6b8a96c8a65274c3d5.png'
            ],
            [
                'name' => 'Digital Marketing',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Kuasai Ads, Social Media dan Copywriting',
                    'Pahami Pasar dan Kompetitor'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/b6305eb2936b81e08de816fa8f3ad4ac.png',
                'mentor' => 'Balad Al Barokah',
                'mentor_job' => 'Digital Marketing Lead',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/2ce77301351d14de5ec72fc1f7724470.png'
            ],
            [
                'name' => 'Graphic Design',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Kuasai Software Desain Profesional',
                    'Tingkatkan Kreativitas dan Problem Solving Visual',
                    'Portofolio Desain yang Menarik Perusahaan'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/9c49b7e5f764e115c8519178b7e95972.png',
                'mentor' => 'Uli Afrilia Wahyu',
                'mentor_job' => 'Graphic Designer',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/dc01f76f7dbd9a478f97a9acf66ccab3.png'
            ],
            [
                'name' => 'Marketing Communication',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Menguasai Strategi IMC yang Efektif',
                    'Keahlian dalam Branding dan Digital Marketing',
                    'Analisis Marketing Campaign'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/c8638dd701e39b3fb413c7c8614b97aa.png',
                'mentor' => 'Larasati Ahadianingtyas',
                'mentor_job' => 'Marketing Communications Manager',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/2427f5cabfdc28c92b2524a5b17ed0c8.png'
            ],
            [
                'name' => 'Social Media Marketing',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Pahami Algoritma Media Sosial',
                    'Buat Kampanye yang Menarik',
                    'Kembangkan Strategi Media Sosial'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/c8638dd701e39b3fb413c7c8614b97aa.png',
                'mentor' => 'Laurensia Novi Oktaviani',
                'mentor_job' => 'Founder & Head of Digital Productions',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/7df809227396aeea8fcbfaaa5a99ac3b.png'
            ],
            [
                'name' => 'Software Engineering (Mobile)',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Kuasai Flutter untuk Pengembangan Aplikasi Mobile',
                    'Integrasi Backend dan Keamanan Aplikasi',
                    'Kemampuan dalam Pengujian dan Manajemen Vers'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/dddd25b2598e9f820b9a22e96571076e.png',
                'mentor' => 'Muhammad Zahid Masruri',
                'mentor_job' => 'Software Engineer',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/23633b74aab57b9a9b1148d7d17a8114.jpg'
            ],
            [
                'name' => 'UI/UX Design',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Keterampilan Prototyping dan Wireframing',
                    'Pahami Kebutuhan User'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/3ea8b706736a50eee9ed80ea0f640c56.png',
                'mentor' => 'Raden Rizqan Fadhilah',
                'mentor_job' => 'Product Designer',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/84fe9a63000f9d0daf4bfdbb9ad004d0.png'
            ],
            [
                'name' => 'Web Development',
                'deadline' => Carbon::parse('2025-09-08'),
                'descriptions' => [
                    'Kuasai Bahasa Pemrograman dan Modern Framework',
                    'Optimalkan Website untuk SEO',
                    'Kemampuan Pengembangan Website'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/4f711692fa2231e8cb0c4a0965594298.png',
                'mentor' => 'Muhammad Ilham Pasya',
                'mentor_job' => 'Software Engineer',
                'mentor_image' => 'https://pbi.belajarbekerja.com/upload/gambar_user/968dcc7eacf3f294cc668631731a3ea2.png'
            ],
        ];

        foreach ($programs as $value) {
            Program::factory()->create($value);
        }
        ;
    }
}
