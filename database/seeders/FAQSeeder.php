<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faq = [
            [
                'question' => 'Kenapa program Project-based Internship ini berbayar?',
                'answer' => 'Program Project-based Internship ini berbayar untuk menunjang pembelajaran peserta seperti materi yang dipelajari, LMS, dan Supervisor yang akan membimbing peserta sampai program berakhir.'
            ],
            [
                'question' => 'Apakah ada tes atau seleksi untuk mengikuti program Project-based Internship?',
                'answer' => 'Tidak ada tes atau seleksi, peserta akan "Auto Lolos" untuk mengikuti program Project-based Internship ini, karena kami yakin bahwa semua individu berhak memiliki pengalaman industri.'
            ],
            [
                'question' => 'Mengapa program ini dikatakan "Internship"? Lalu, apakah diperlukan latar belakang berkaitan untuk mengikuti program ini?',
                'answer' => 'Program ini dikatakan "Internship" dikarenakan kurikulum yang dibuat mengacu pada tugas magang (project-based) yang sesungguhnya dilakukan di industri. Peserta tidak perlu memiliki latar belakang yang berkaitan untuk mengikuti program ini, karena kurikulum yang kami siapkan akan membantumu dari NOL.'
            ],
            [
                'question' => 'Adakah perangkat atau tools khusus yang harus dipersiapkan oleh peserta?',
                'answer' => 'Peserta wajib memiliki laptop untuk mengikuti program Project-based Internship dikarenakan pembelajaran dan pengerjaan tugas akan lebih mudah jika dikerjakan menggunakan laptop. Untuk tools tambahan setiap okupasinya akan menyesuaikan silabus dan arahan dari Supervisor.'
            ],
            [
                'question' => 'Bagaimana saya bisa mendapatkan sertifikat setelah mengikuti program Project-based Internship ini?',
                'answer' => 'Kamu akan mendapatkan sertifikat apabila memenuhi jumlah kehadiran dan kelengkapan tugas, dengan ketentuan sebagai berikut: <br>
<ul class="list-disc pl-6">
    <li>Durasi 1 bulan : Maksimal 1 kali tidak hadir dan tidak mengerjakan tugas dengan keterangan jelas</li>
    <li>Durasi 2 bulan : Maksimal 2 kali tidak hadir dan tidak mengerjakan tugas dengan keterangan jelas</li>
    <li>Durasi 3 bulan : Maksimal 2 kali tidak hadir dan tidak mengerjakan tugas dengan keterangan jelas</li>
</ul>'
            ],
            [
                'question' => 'Bagaimana cara saya dapat melakukan konversi SKS?',
                'answer' => 'Konversi SKS yang dimaksud pada program Project-based Internship ini adalah konversi SKS untuk mata kuliah Wajib Magang/PKL/KKL/Kerja Praktik dan sejenisnya sesuai dengan kebijakan masing - masing perguruan tinggi. Tidak berarti setara dengan nominal SKS tertentu. Peserta dapat mengajukan konversi SKS ini ke tim Talent Management di channel Discord program.'
            ],
        ];

        foreach ($faq as $value) {
            FAQ::factory()->create($value);
        }
    }
}
