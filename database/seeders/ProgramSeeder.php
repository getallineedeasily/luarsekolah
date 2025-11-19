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
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Mahir dalam Pencatatan Transaksi dan Jurnal Umum',
                    'Keterampilan dalam Menyusun Laporan Keuangan',
                    'Keahlian dalam Analisis Lanjutan dan Pengambilan Keputusan'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/afb76a4a6bfb7b237548ee4ae46691c6.png'
            ],
            [
                'name' => 'Content Writing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Teknik Menulis yang Efektif',
                    'Optimasi SEO',
                    'Portofolio yang Kuat'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/b78b711845bab16b1cb07372e0da86a9.png'
            ],
            [
                'name' => 'Data Analytic',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Real Case dengan Big Data',
                    'Kuasai Microsoft Excel dan Dashboard',
                    'Mengembangkan Data Storytelling'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/37acaf2f68e69f70272d6d565f20c202.png'
            ],
            [
                'name' => 'Digital Marketing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Kuasai Ads, Social Media dan Copywriting',
                    'Pahami Pasar dan Kompetitor'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/b6305eb2936b81e08de816fa8f3ad4ac.png'
            ],
            [
                'name' => 'Graphic Design',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Software Desain Profesional',
                    'Tingkatkan Kreativitas dan Problem Solving Visual',
                    'Portofolio Desain yang Menarik Perusahaan'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/9c49b7e5f764e115c8519178b7e95972.png'
            ],
            [
                'name' => 'Marketing Communication',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Menguasai Strategi IMC yang Efektif',
                    'Keahlian dalam Branding dan Digital Marketing',
                    'Analisis Marketing Campaign'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/c8638dd701e39b3fb413c7c8614b97aa.png'
            ],
            [
                'name' => 'Social Media Marketing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Pahami Algoritma Media Sosial',
                    'Buat Kampanye yang Menarik',
                    'Kembangkan Strategi Media Sosial'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/c8638dd701e39b3fb413c7c8614b97aa.png'
            ],
            [
                'name' => 'Software Engineering (Mobile)',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Flutter untuk Pengembangan Aplikasi Mobile',
                    'Integrasi Backend dan Keamanan Aplikasi',
                    'Kemampuan dalam Pengujian dan Manajemen Vers'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/dddd25b2598e9f820b9a22e96571076e.png'
            ],
            [
                'name' => 'UI/UX Design',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Keterampilan Prototyping dan Wireframing',
                    'Pahami Kebutuhan User'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/3ea8b706736a50eee9ed80ea0f640c56.png'
            ],
            [
                'name' => 'Web Development',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Bahasa Pemrograman dan Modern Framework',
                    'Optimalkan Website untuk SEO',
                    'Kemampuan Pengembangan Website'
                ],
                'image' => 'https://pbi.belajarbekerja.com/upload/project/gambar_project/4f711692fa2231e8cb0c4a0965594298.png'
            ],
        ];

        foreach ($programs as $value) {
            Program::factory()->create($value);
        }
        ;
    }
}
