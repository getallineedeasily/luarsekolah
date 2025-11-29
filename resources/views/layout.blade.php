<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magang Oleh Luarsekolah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body class="font-poppins">
    <header></header>
    <main>
        {{-- Hero --}}
        <section class="bg-[#0F0F0F] text-white h-dvh pt-30">
            <div class="max-w-10/12 mx-auto">
                <div class="w-[547px]">
                    <h1 class="text-[42px] font-medium">Belajar Langsung dari Praktisi Berbagai Industri - bukan
                        Sekedar Teori!
                    </h1>
                    <h5 class="text-sm pb-6">Dibimbing mentor profesional dari berbagai Industri & real
                        project
                    </h5>
                </div>
                <div class="space-x-2.5 mb-18">
                    <a class="inline-block text-center text-sm bg-[#FFD633] rounded-md p-2.5 w-[162px] h-[43px] text-black leading-[1.75]"
                        href="#">Daftar Sekarang</a>
                    <a class="inline-block text-center text-sm rounded-md p-2.5 w-[162px] h-[43px] border leading-[1.75]"
                        href="#">Lihat
                        Mentor</a>
                </div>
                <div class="grid grid-cols-4 text-center">
                    <div class="flex flex-col">
                        <span class="text-[42px] font-medium leading-none">700+</span>
                        <span class="text-base font-medium">Talenta Bergabung</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[42px] font-medium leading-none">100+</span>
                        <span class="text-base font-medium">Portofolio Tersedia</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[42px] font-medium leading-none">88%</span>
                        <span class="text-base font-medium">Kepuasan Talenta</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[42px] font-medium leading-none">20+</span>
                        <span class="text-base font-medium">Universitas & Ormawa Bekerjasama</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- List PBI --}}
        <section class="pt-30">
            <div class="max-w-10/12 mx-auto">
                <h3 class="font-medium text-2xl text-[#0F0F0F] text-center pb-2">Project-Based Internship</h3>
                <h5 class="text-[#5D5D5D] text-xl text-center">Pilih program Project-Based Internship yang sesuai dengan
                    kebutuhanmu
                </h5>
                <div class="flex mt-8 gap-6 overflow-x-scroll mb-10">
                    @foreach ($programs as $program)
                        <div class="rounded-[10px] shadow-[0px_2px_6px_0px_rgba(0,0,0,0.08)] w-[247px] shrink-0">
                            <div class="">
                                <img class="rounded-t-[10px]" src="{{ $program->image }}" alt="">
                            </div>
                            <div class="p-4">
                                <h4 class="text-[#1E1E1E] font-medium mb-4">
                                    {{ $program->name }}
                                </h4>
                                <p class="text-sm text-[#4F4F4F]">Luna Yofanda -
                                </p>
                                <p class="text-xs text-[#4F4F4F] mb-4">Accounting and Finance
                                    Associate at Shopee
                                    Indonesia</p>
                                <p class="text-sm font-medium text-[#4F4F4F] mb-8">Berpengalaman 5 tahun dalam bidangnya
                                </p>
                                <a class="inline-block text-center text-sm bg-[#FFD633] rounded-md p-2.5 h-[43px] text-black leading-[1.75] w-full"
                                    href="#">Lihat Detail Program</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex gap-4 justify-center items-center mb-20">
                    <p class="italic text-sm text-[#000000]">September 2025 <span class="text-[#454545]">udah ditutup
                            nih. Tunggu kami
                            di batch selanjutnya, ya! </span> </p>
                    <a class="inline-block text-center text-sm bg-[#FFD633] rounded-md p-2.5 h-[43px] text-black leading-[1.75] shadow-[0px_8px_16px_0px_rgba(0,0,0,0.08)]"
                        href="#">Join Waiting list (bulan desember) sekarang</a>
                </div>

                <div class="bg-[#FFCC00] rounded-[10px] p-4 space-y-2.5 shadow-[0px_8px_16px_0px_rgba(0,0,0,0.08)]">
                    <h2 class="font-medium text-[28px] text-[#0F0F0F] w-1/2">Masih ragu ? Kenali dulu mentornya
                        & rasakan value-nya!</h2>
                    <span class="text-sm text-[#3D3D3D] block mb-5">No worries, coba mini PBI yang langsung dibimbing
                        dengan
                        mentor kami & rasakan
                        impactnya!</span>
                    <div class="space-x-4">
                        <a class="inline-block text-center text-sm bg-[#0F0F0F] rounded-md p-2.5 h-[43px] text-white leading-[1.75] w-[243px]"
                            href="#">Coba mini PBI</a>
                        <a class="inline-block text-center text-sm rounded-md p-2.5 h-[43px] text-black leading-[1.75] border w-[243px]"
                            href="#">Konsultasi dengan kami</a>
                    </div>
                </div>
            </div>
        </section>


        {{-- Benefit --}}
        <section class="py-20">
            <div class="max-w-10/12 mx-auto">
                <h3 class="text-[#0F0F0F] font-medium text-2xl text-center pb-2.5">Bangun Portfolio dari kasus Industri
                    dipandu
                    dengan mentor dari
                    berbagai perusahaan</h3>
                <h5 class="text-[#5D5D5D] text-center">Grup mentoring dari mentor expert memastikan kamu memahami
                    standar industri & hasil bisa konversi
                    SKS</h5>

                <div class="mt-10 flex gap-6 items-center">
                    <div style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.71) 80%, rgba(0, 0, 0, 1) 100%), url('{{ asset('images/benefit-1.jpg') }}');"
                        class='bg-cover bg-center h-[218px] rounded-[10px] p-5 w-1/2'>
                        <div class="flex flex-col h-full justify-between w-3/4">
                            <div>
                                <div class="flex gap-6 mb-5">
                                    <span class="bg-white">icon</span>
                                    <p class="text-white">Real Project Portfolio</p>
                                </div>
                                <p class="text-sm text-white">Bangun Portfolio dari real-case industri
                                    yang divalidasi oleh mentor expert</p>
                            </div>
                            <a class="block text-center text-sm rounded-md p-2.5 h-[43px] text-white leading-[1.75] border border-white w-[210px]"
                                href="#">Lihat Portofolio</a>
                        </div>
                    </div>
                    <div style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.71) 80%, rgba(0, 0, 0, 1) 100%), url('{{ asset('images/benefit-2.png') }}');"
                        class='bg-cover bg-center h-[218px] rounded-[10px] p-5 w-1/2'>
                        <div class="flex flex-col h-full justify-between w-3/4">
                            <div>
                                <div class="flex gap-6 mb-5">
                                    <span class="bg-white">icon</span>
                                    <p class="text-white">Dibimbing Expert Mentor</p>
                                </div>
                                <p class="text-sm text-white">Sesi review, feedback, dan diskusi
                                    bersama praktisi expert 4-10 tahun
                                    berpengalaman</p>
                            </div>
                        </div>
                    </div>
                    <svg width="98" height="101" viewBox="0 0 98 101" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M59.8994 22.3414C59.8994 34.6803 55.367 44.6828 49.7759 44.6828C44.1849 44.6828 39.6525 34.6803 39.6525 22.3414C39.6525 10.0026 44.1849 0 49.7759 0C55.367 0 59.8994 10.0026 59.8994 22.3414Z"
                            fill="#FFD633" />
                        <path
                            d="M75.3963 61.0712C63.3673 61.0712 53.6159 56.5387 53.6159 50.9477C53.6159 45.3566 63.3673 40.8242 75.3963 40.8242C87.4252 40.8242 97.1766 45.3566 97.1766 50.9477C97.1766 56.5387 87.4252 61.0712 75.3963 61.0712Z"
                            fill="#FFD633" />
                        <path
                            d="M75.9388 30.4308C72.1185 34.0007 67.5847 35.3571 65.8122 33.4603C64.0397 31.5636 65.6998 27.1319 69.5201 23.562C73.3403 19.9921 77.8741 18.6357 79.6466 20.5325C81.4191 22.4292 79.759 26.8609 75.9388 30.4308Z"
                            fill="#FFD633" />
                        <path
                            d="M31.204 23.7032C34.8672 27.4342 36.3351 31.9331 34.4827 33.7519C32.6302 35.5706 28.159 34.0205 24.4958 30.2896C20.8326 26.5586 19.3647 22.0597 21.2171 20.2409C23.0696 18.4221 27.5408 19.9723 31.204 23.7032Z"
                            fill="#FFD633" />
                        <path
                            d="M24.4971 69.6159C28.1365 65.8617 32.5978 64.2831 34.4618 66.0901C36.3257 67.897 34.8865 72.4052 31.2471 76.1594C27.6078 79.9136 23.1464 81.4921 21.2825 79.6852C19.4185 77.8782 20.8578 73.37 24.4971 69.6159Z"
                            fill="#FFD633" />
                        <path
                            d="M69.343 76.3621C65.6948 72.6165 64.245 68.1118 66.1047 66.3004C67.9643 64.4891 72.4294 66.0571 76.0776 69.8027C79.7258 73.5483 81.1757 78.0531 79.316 79.8644C77.4563 81.6757 72.9912 80.1077 69.343 76.3621Z"
                            fill="#FFD633" />
                        <path
                            d="M39.375 78.3342C39.375 65.8542 44.0317 55.7372 49.7759 55.7372C55.5202 55.7372 60.1769 65.8542 60.1769 78.3342C60.1769 90.8141 55.5202 100.931 49.7759 100.931C44.0317 100.931 39.375 90.8141 39.375 78.3342Z"
                            fill="#FFD633" />
                        <path
                            d="M22.3414 40.8242C34.6803 40.8242 44.6828 45.3566 44.6828 50.9477C44.6828 56.5387 34.6803 61.0712 22.3414 61.0712C10.0026 61.0712 0 56.5387 0 50.9477C0 45.3566 10.0026 40.8242 22.3414 40.8242Z"
                            fill="#FFD633" />
                    </svg>

                </div>

                <div class="mt-10 flex flex-row-reverse gap-6 items-center">
                    <div style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.71) 80%, rgba(0, 0, 0, 1) 100%), url('{{ asset('images/benefit-4.jpg') }}');"
                        class='bg-cover bg-center h-[218px] rounded-[10px] p-5 w-1/2'>
                        <div class="flex flex-col h-full justify-between w-3/4">
                            <div>
                                <div class="flex gap-6 mb-5">
                                    <span class="bg-white">icon</span>
                                    <p class="text-white">Career Growth & Networking</p>
                                </div>
                                <p class="text-sm text-white">Bangun network professional dengan praktisi industri  & siap masuk kerja</p>
                            </div>
                            <a class="block text-center text-sm rounded-md p-2.5 h-[43px] text-white leading-[1.75] border border-white w-[210px]"
                                href="#">Lihat Profil Mentor</a>
                        </div>
                    </div>
                    <div style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.71) 80%, rgba(0, 0, 0, 1) 100%), url('{{ asset('images/benefit-3.jpg') }}');"
                        class='bg-cover bg-center h-[218px] rounded-[10px] p-5 w-1/2'>
                        <div class="flex flex-col h-full justify-between w-3/4">
                            <div>
                                <div class="flex gap-6 mb-5">
                                    <span class="bg-white">icon</span>
                                    <p class="text-white">Bisa Konversi SKS & Auto Lolos!</p>
                                </div>
                                <p class="text-sm text-white">Kesempatan magang di dunia kerja, auto lolos, dan bisa konversi sks sesuai ketentuan kampus masing-masing.</p>
                            </div>
                            <a class="block text-center text-sm rounded-md p-2.5 h-[43px] text-white leading-[1.75] border border-white w-[210px]"
                                href="#">Hubungi Admin</a>
                        </div>
                    </div>
                    <svg width="98" height="101" viewBox="0 0 98 101" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M59.8994 22.3414C59.8994 34.6803 55.367 44.6828 49.7759 44.6828C44.1849 44.6828 39.6525 34.6803 39.6525 22.3414C39.6525 10.0026 44.1849 0 49.7759 0C55.367 0 59.8994 10.0026 59.8994 22.3414Z"
                            fill="#FFD633" />
                        <path
                            d="M75.3963 61.0712C63.3673 61.0712 53.6159 56.5387 53.6159 50.9477C53.6159 45.3566 63.3673 40.8242 75.3963 40.8242C87.4252 40.8242 97.1766 45.3566 97.1766 50.9477C97.1766 56.5387 87.4252 61.0712 75.3963 61.0712Z"
                            fill="#FFD633" />
                        <path
                            d="M75.9388 30.4308C72.1185 34.0007 67.5847 35.3571 65.8122 33.4603C64.0397 31.5636 65.6998 27.1319 69.5201 23.562C73.3403 19.9921 77.8741 18.6357 79.6466 20.5325C81.4191 22.4292 79.759 26.8609 75.9388 30.4308Z"
                            fill="#FFD633" />
                        <path
                            d="M31.204 23.7032C34.8672 27.4342 36.3351 31.9331 34.4827 33.7519C32.6302 35.5706 28.159 34.0205 24.4958 30.2896C20.8326 26.5586 19.3647 22.0597 21.2171 20.2409C23.0696 18.4221 27.5408 19.9723 31.204 23.7032Z"
                            fill="#FFD633" />
                        <path
                            d="M24.4971 69.6159C28.1365 65.8617 32.5978 64.2831 34.4618 66.0901C36.3257 67.897 34.8865 72.4052 31.2471 76.1594C27.6078 79.9136 23.1464 81.4921 21.2825 79.6852C19.4185 77.8782 20.8578 73.37 24.4971 69.6159Z"
                            fill="#FFD633" />
                        <path
                            d="M69.343 76.3621C65.6948 72.6165 64.245 68.1118 66.1047 66.3004C67.9643 64.4891 72.4294 66.0571 76.0776 69.8027C79.7258 73.5483 81.1757 78.0531 79.316 79.8644C77.4563 81.6757 72.9912 80.1077 69.343 76.3621Z"
                            fill="#FFD633" />
                        <path
                            d="M39.375 78.3342C39.375 65.8542 44.0317 55.7372 49.7759 55.7372C55.5202 55.7372 60.1769 65.8542 60.1769 78.3342C60.1769 90.8141 55.5202 100.931 49.7759 100.931C44.0317 100.931 39.375 90.8141 39.375 78.3342Z"
                            fill="#FFD633" />
                        <path
                            d="M22.3414 40.8242C34.6803 40.8242 44.6828 45.3566 44.6828 50.9477C44.6828 56.5387 34.6803 61.0712 22.3414 61.0712C10.0026 61.0712 0 56.5387 0 50.9477C0 45.3566 10.0026 40.8242 22.3414 40.8242Z"
                            fill="#FFD633" />
                    </svg>

                </div>
            </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>
