<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videoTestimonials = [
            [
                'type' => 'video',
                'name' => 'Raka Yogaswara Pratama Husaini',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/85b48487366aca443810b4172406a639.png',
                'university' => 'STIMIK Mardira Indonesia',
                'video_title' => 'Kuliah Sambil Magang Jadi Web Developer? Bisa Banget!',
                'video_url' => 'https://youtu.be/RpmfGqOvvew'
            ],
            [
                'type' => 'video',
                'name' => 'Muhammad Arsyaddatama',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/795fe52da14d118c8c98175860ba49c5.png',
                'university' => 'Telkom University',
                'video_title' => 'Kebantu Banget Magang Di Sini Karena Bisa Konversi SKS',
                'video_url' => 'https://youtu.be/Wkc_2rTXiHE'
            ],
            [
                'type' => 'video',
                'name' => 'Siti Anzhanny Marwa',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/f1ef649c9286984baec8ec8089f97932.png',
                'university' => 'Universitas Nasional PASIM',
                'video_title' => 'Belajar Ngoding Bareng Mentor dan Temen, Seru & Gak Gampang Stuck',
                'video_url' => 'https://youtu.be/VmOH6rpBuhE'
            ],
            [
                'type' => 'video',
                'name' => 'Jerry Erlangga Setiadi',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/dc7c7599930fcce60fdb8a8fbf96ce9b.png',
                'university' => 'Universitas Nasional PASIM',
                'video_title' => 'Ngerjain Project Kolaborasi, Langsung Dapet Pengalaman Kerja Nyata',
                'video_url' => 'https://youtu.be/AH0_qdvU_f0'
            ],
            [
                'type' => 'video',
                'name' => 'Aria Sin',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/4b6f5b80561d8c69ebd57d6c400366a7.png',
                'university' => 'STIMIK Mardira Indonesia',
                'video_title' => 'Setelah Belajar Teori di Kampus, Akhirnya Ngerasain Praktiknya di PBI',
                'video_url' => 'https://youtu.be/YYKAr4-nywE'
            ],
            [
                'type' => 'video',
                'name' => 'Bunga Faisa Nariswari',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/ff227f1c66b1299bfee4608dbd74af5b.png',
                'university' => 'Telkom University',
                'video_title' => 'Belajar Social Media Marketing Biar Join Top Global Company',
                'video_url' => 'https://youtu.be/AtJshJQttGc'
            ],
            [
                'type' => 'video',
                'name' => 'Afrizal Adi Nugroho',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/3e425ac9a22483fe4766af442e476231.png',
                'university' => 'Universitas Pendidikan Indonesia',
                'video_title' => 'Kurang Puas Sama Materi di Kampus, Bikin Aku Ikut Program Ini',
                'video_url' => 'https://youtu.be/DcHHCHU1_RQ'
            ],
            [
                'type' => 'video',
                'name' => 'Faturahman Fadillah',
                'program_name' => null,
                'image' => 'https://pbi.belajarbekerja.com/upload/cerita_alumni/3fb60414cf919b2862e0c1edd5f8ebd2.png',
                'university' => 'SMKN 5 Bandung',
                'video_title' => 'Struggle Cari Kerja Pas Lulus SMA, Jadi Motivasi Buat upgrade Skill',
                'video_url' => 'https://youtu.be/MmJHshX7UAk'
            ],
        ];

        $storyTestimonials = [
            [
                'type' => 'story',
                'name' => 'Iffa Amalia Sabrina',
                'program_name' => 'Web Development Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/f2dcf1eebb38e4c8db5621ad7e85494a.png',
                'university' => 'Institut Teknologi Sepuluh Nopember',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/41e9233bd6b9c2ec188903c6097878b1.png',
                'story_content' => 'Sangat baik. Saya dapat belajar banyak dari mentor dan teman-teman yang memiliki passion di bidang yang sama dengan saya. 3 bulan yang sangat mengesankan!'
            ],
            [
                'type' => 'story',
                'name' => 'Andhika Septian Septian Prayoga',
                'program_name' => 'Web Development Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/9c2d19c32d378bfc4fc096378da001e1.png',
                'university' => 'Universitas Pendidikan Indonesia',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/5da0b14f7765c823a758752f1c0cca15.jpg',
                'story_content' => 'Selama di PBI, Saya ngerasa kayak beneran kerja di tech company. Dari bikin fitur-fitur real buat web, belajar teamwork lewat daily stand-up meeting, sampai ngulik error bareng. Mentornya juga asik dan ngebantu banget. Gak cuma ngasih tau ""caranya"", tapi juga ""kenapanya"". Kita jadi makin paham cara kerja developer sesungguhnya bukan cuma ngoding doang, tapi juga komunikasi, planning, dan problem-solving.'
            ],
            [
                'type' => 'story',
                'name' => 'Grace Tofer Claudius Close One Prinsen Wahyudiono',
                'program_name' => 'UI/UX Design Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/3ba78f326501ab9c15af731ef5587640.png',
                'university' => 'Universitas Negeri Surabaya',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/3d99a561e63e076f5ce2dd1e0a17ae0f.png',
                'story_content' => 'Kesannya sangat menyenangkan , dapat menambah portofolio ui/ux design, beberapa teman baru dan juga mendapatkan mentor yang profesional di bidangnya'
            ],
            [
                'type' => 'story',
                'name' => 'Rifqi Fauzan Adzikra',
                'program_name' => 'Software Engineering (Mobile) Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/b9650e5549cc0f9ef53bf3d74e69471a.png',
                'university' => 'Universitas Pendidikan Indonesia',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/b7da5abe7718cab306b0f6f73dd008d2.jpg',
                'story_content' => 'Kesan saya, program ini sangat terstruktur, pembelajarannya bertahap dan mudah diikuti, bahkan untuk pemula. Mentor dan tim supportnya juga sangat responsif dan membantu. Program ini bukan hanya menambah skill, tapi juga melatih kedisiplinan, tanggung jawab, dan kesiapan untuk bekerja secara profesional. Terima kasih Belajar Bekerja dan seluruh tim penyelenggara. Semoga program ini terus berjalan dan bisa memberikan manfaat lebih luas bagi mahasiswa di seluruh Indonesia.'
            ],
            [
                'type' => 'story',
                'name' => 'Dzaru Rizky Fathan Fortuna',
                'program_name' => 'Software Engineering (Mobile) Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/78a57b64ac6703778cf12dda20b900f7.png',
                'university' => 'Universitas Pembangunan Nasional "Veteran" Jawa Timur',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/f7efa5665aef4e72135ce973c2dd72c4.png',
                'story_content' => 'Selama mengikuti program PBI, saya mendapatkan banyak ilmu, terutama di bidang mobile development dengan Flutter. Sebelumnya, selama kuliah saya belum pernah memegang langsung pengembangan aplikasi mobile. Tapi lewat program ini, saya jadi punya dasar yang kuat, bahkan menambah bidang keahlian saya. Saya juga merasa waktu senggang saat pengerjaan skripsi jadi lebih bermanfaat karena bisa belajar hal baru yang aplikatif langsung dari mentor industri. Terima kasih PBI! Program ini benar-benar membuka wawasan dan sangat membantu pengembangan diri saya. '
            ],
            [
                'type' => 'story',
                'name' => 'Najma Jauharah Anwar',
                'program_name' => 'Graphic Design Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/d34a861e7fac5f1834a6c18d6cb4e666.png',
                'university' => 'Universitas Padjadjaran',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/a1d142aa25dfab545f8c776b86eb6eb5.png',
                'story_content' => 'Kesannya selama mengikuti PBI sangat berkesan. Saya merasa mendapat pengalaman langsung yang nyata. Trs juga mentornya yang sangat membimbing dari awal hingga akhir. Saya dapat wawasan yang baru juga. Serta saya jadi lebih percaya diri, terlatih berpikir kreatif, dan meningkatkan keterampilan teknis juga dalam menggunakan softwarenya  '
            ],
            [
                'type' => 'story',
                'name' => 'Alif Fahrunisa',
                'program_name' => 'Digital Marketing Batch 6',
                'image' => 'https://pbi.belajarbekerja.com/upload/review_user/00e854ca8bce10cd50bb39938a219d5d.png',
                'university' => 'Telkom University Purwokerto',
                'university_image' => 'https://pbi.belajarbekerja.com/upload/review_user/company/a0a08079e917fc53c8e2b03a82bd7d23.png',
                'story_content' => 'Halo! Saya Alif Fahrunisa, salah satu peserta program Project-Based Internship selama 3 bulan terakhir. selama program Project-Based Internship ini saya diberi kepercayaan menjadi Captain of Class. Dan Ini bukan hanya sekedar soal memimpin, tapi tentang belajar bersama, mendengarkan, dan menjadi jembatan komunikasi antara peserta dan mentor. program ini jadi pengalaman yang berarti untuk saya. Saya belajar banyak hal, mulai dari kerja tim, manajemen waktu, sampai bagaimana menyelesaikan proyek dengan standar industri yang sesungguhnya. Bimbingan dari mentor, suasana kerja yang suportif, dan tantangan real-project membuat saya tumbuh bukan cuma secara skill, tapi juga mental kerja. Terima kasih PBI Luarsekolah, sudah menjadi jembatan belajar dan bertumbuh yang luar biasa! Saya bangga pernah jadi bagian dari PBI. Luarsekolah!'
            ],
        ];

        $testimonials = [...$videoTestimonials, ...$storyTestimonials];

        foreach ($testimonials as $value) {
            Testimonial::factory()->create($value);
        }
    }
}
