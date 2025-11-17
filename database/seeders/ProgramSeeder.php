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
                ]
            ],
            [
                'name' => 'Content Writing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Teknik Menulis yang Efektif',
                    'Optimasi SEO',
                    'Portofolio yang Kuat'
                ]
            ],
            [
                'name' => 'Data Analytic',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Real Case dengan Big Data',
                    'Kuasai Microsoft Excel dan Dashboard',
                    'Mengembangkan Data Storytelling'
                ]
            ],
            [
                'name' => 'Digital Marketing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Kuasai Ads, Social Media dan Copywriting',
                    'Pahami Pasar dan Kompetitor'
                ]
            ],
            [
                'name' => 'Graphic Design',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Software Desain Profesional',
                    'Tingkatkan Kreativitas dan Problem Solving Visual',
                    'Portofolio Desain yang Menarik Perusahaan'
                ]
            ],
            [
                'name' => 'Marketing Communication',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Menguasai Strategi IMC yang Efektif',
                    'Keahlian dalam Branding dan Digital Marketing',
                    'Analisis Marketing Campaign'
                ]
            ],
            [
                'name' => 'Social Media Marketing',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Pahami Algoritma Media Sosial',
                    'Buat Kampanye yang Menarik',
                    'Kembangkan Strategi Media Sosial'
                ]
            ],
            [
                'name' => 'Software Engineering (Mobile)',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Flutter untuk Pengembangan Aplikasi Mobile',
                    'Integrasi Backend dan Keamanan Aplikasi',
                    'Kemampuan dalam Pengujian dan Manajemen Vers'
                ]
            ],
            [
                'name' => 'UI/UX Design',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Tingginya Permintaan Industri',
                    'Keterampilan Prototyping dan Wireframing',
                    'Pahami Kebutuhan User'
                ]
            ],
            [
                'name' => 'Web Development',
                'deadline' => Carbon::parse('2025-12-08'),
                'descriptions' => [
                    'Kuasai Bahasa Pemrograman dan Modern Framework',
                    'Optimalkan Website untuk SEO',
                    'Kemampuan Pengembangan Website'
                ]
            ],
        ];

        foreach ($programs as $value) {
            Program::factory()->create($value);
        }
        ;
    }
}
