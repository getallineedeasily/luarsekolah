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
            <div class="max-w-3/4 mx-auto">
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
            <div class="max-w-3/4 mx-auto">
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
    </main>
    <footer></footer>
</body>

</html>
