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

                <div class="flex gap-8 justify-center items-center mb-20">
                    <p class="italic text-sm text-[#000000]">September 2025 <span class="text-[#454545]">udah ditutup
                            nih. Tunggu kami
                            di batch selanjutnya, ya! </span> </p>
                    <a class="text-center text-sm bg-[#FFD633] rounded-md p-2.5 h-[43px] text-black leading-[1.75] shadow-[0px_8px_16px_0px_rgba(0,0,0,0.08)] flex gap-2.5 px-8"
                        href="#">
                        <span>Join Waiting list (bulan desember) sekarang</span>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                            viewBox="0 0 21 21" fill="none">
                            <path
                                d="M13.5625 1.75V4.375M5.6875 1.75V4.375M9.625 1.75V4.375M16.625 10.5V9.1875C16.625 6.3 16.625 4.85625 15.7281 3.95938C14.8313 3.0625 13.3875 3.0625 10.5 3.0625H8.75C5.8625 3.0625 4.41875 3.0625 3.52188 3.95938C2.625 4.85625 2.625 6.3 2.625 9.1875L2.625 13.125C2.625 16.0125 2.625 17.4563 3.52188 18.3531C4.41875 19.25 5.8625 19.25 8.75 19.25H9.625M6.125 13.125H9.625M6.125 9.625H13.125M13.7699 18.9464L12.25 19.25L12.5536 17.7301C12.6149 17.4221 12.7671 17.1386 12.9902 16.9164L16.5471 13.3586C16.6211 13.2845 16.7089 13.2258 16.8056 13.1857C16.9023 13.1456 17.0059 13.1249 17.1106 13.1249C17.2153 13.1249 17.3189 13.1456 17.4156 13.1857C17.5123 13.2258 17.6002 13.2845 17.6741 13.3586L18.1414 13.8259C18.2155 13.8998 18.2742 13.9877 18.3143 14.0844C18.3544 14.1811 18.3751 14.2847 18.3751 14.3894C18.3751 14.4941 18.3544 14.5977 18.3143 14.6944C18.2742 14.7911 18.2155 14.8789 18.1414 14.9529L14.5845 18.5097C14.3627 18.7335 14.079 18.8856 13.7699 18.9464Z"
                                stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>

                <div class="bg-[#FFCC00] rounded-[10px] p-4 space-y-2.5 shadow-[0px_8px_16px_0px_rgba(0,0,0,0.08)]">
                    <h2 class="font-medium text-[28px] text-[#0F0F0F] w-1/2">Masih ragu ? Kenali dulu mentornya
                        & rasakan value-nya!</h2>
                    <span class="text-sm text-[#3D3D3D] block mb-5">No worries, coba mini PBI yang langsung dibimbing
                        dengan
                        mentor kami & rasakan
                        impactnya!</span>
                    <div class="flex gap-4">
                        <a class="text-center text-sm bg-[#0F0F0F] rounded-md p-2.5 h-[43px] text-white leading-[1.75] w-[243px] flex gap-2 justify-center items-center"
                            href="#">
                            <span>Coba mini PBI</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                fill="none">
                                <path
                                    d="M3.28135 6.5625C3.1073 6.5625 2.94038 6.63164 2.81731 6.75472C2.69424 6.87779 2.6251 7.04471 2.6251 7.21875V12.4688C2.61197 13.356 3.95072 13.356 3.9376 12.4688V10.5H4.59385C5.4811 10.5131 5.4811 9.17438 4.59385 9.1875H3.9376V7.875H4.59385C5.4811 7.88813 5.4811 6.54938 4.59385 6.5625H3.28135ZM7.21885 6.5625C7.0448 6.5625 6.87788 6.63164 6.75481 6.75472C6.63174 6.87779 6.5626 7.04471 6.5626 7.21875V12.4688C6.54947 13.356 7.88822 13.356 7.8751 12.4688V10.5H7.96697L9.27422 12.7943C9.69291 13.608 10.903 12.9163 10.4135 12.1433L9.35822 10.29C9.55772 10.185 9.74147 10.0538 9.89635 9.89757C10.2468 9.54844 10.5001 9.07857 10.5001 8.53125C10.5001 7.98394 10.2468 7.51407 9.89766 7.16494C9.54853 6.81582 9.07866 6.5625 8.53135 6.5625H7.21885ZM12.4688 6.5625C12.2948 6.5625 12.1279 6.63164 12.0048 6.75472C11.8817 6.87779 11.8126 7.04471 11.8126 7.21875V12.4688C11.8126 12.6428 11.8817 12.8097 12.0048 12.9328C12.1279 13.0559 12.2948 13.125 12.4688 13.125H13.7813C14.6686 13.1381 14.6686 11.7994 13.7813 11.8125H13.1251V10.5H13.7813C14.6686 10.5131 14.6686 9.17438 13.7813 9.1875H13.1251V7.875H13.7813C14.6686 7.88813 14.6686 6.54938 13.7813 6.5625H12.4688ZM16.4063 6.5625C16.2323 6.5625 16.0654 6.63164 15.9423 6.75472C15.8192 6.87779 15.7501 7.04471 15.7501 7.21875V12.4688C15.7501 12.6428 15.8192 12.8097 15.9423 12.9328C16.0654 13.0559 16.2323 13.125 16.4063 13.125H17.7188C18.6061 13.1381 18.6061 11.7994 17.7188 11.8125H17.0626V10.5H17.7188C18.6061 10.5131 18.6061 9.17438 17.7188 9.1875H17.0626V7.875H17.7188C18.6061 7.88813 18.6061 6.54938 17.7188 6.5625H16.4063ZM7.8751 7.875H8.53135C8.91591 7.875 9.1876 8.15719 9.1876 8.53125C9.1876 8.90532 8.9251 9.1875 8.53135 9.1875H7.8751V7.875Z"
                                    fill="#FFEA9A" />
                            </svg></a>
                        <a class="text-center text-sm rounded-md p-2.5 h-[43px] text-black leading-[1.75] border w-[243px] flex gap-2 justify-center items-center"
                            href="#">
                            <span>Konsultasi dengan kami</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                                fill="none">
                                <g clip-path="url(#clip0_407_3)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.9402 3.04938C15.9664 1.08394 13.3412 0.000997181 10.5441 0C4.78047 0 0.0897435 4.66432 0.087738 10.3976C0.0867353 12.2304 0.568544 14.0194 1.48353 15.5959L0 20.9847L5.54304 19.5388C7.07017 20.3674 8.78984 20.8037 10.5396 20.8042H10.5441C16.3067 20.8042 20.998 16.1394 21 10.4061C21.001 7.62747 19.9145 5.01533 17.9402 3.04988V3.04938ZM10.5441 19.0482H10.5406C8.98135 19.0477 7.45173 18.6308 6.11712 17.8436L5.79975 17.6561L2.51032 18.5142L3.3882 15.3247L3.18163 14.9976C2.31177 13.6215 1.85202 12.031 1.85303 10.3981C1.85503 5.63308 5.75362 1.75604 10.5477 1.75604C12.8689 1.75703 15.0509 2.65699 16.6918 4.29087C18.3328 5.92426 19.2357 8.09614 19.2347 10.4051C19.2327 15.1706 15.3341 19.0477 10.5441 19.0477V19.0482ZM15.311 12.5755C15.0498 12.4453 13.7654 11.8171 13.5257 11.7304C13.2861 11.6436 13.1121 11.6002 12.9381 11.8605C12.7642 12.1208 12.2633 12.7061 12.1109 12.8791C11.9585 13.0526 11.806 13.0741 11.5448 12.9439C11.2836 12.8138 10.4418 12.5396 9.44364 11.6545C8.66705 10.9655 8.14258 10.1149 7.99021 9.85463C7.83778 9.59439 7.97417 9.45377 8.10448 9.32464C8.22179 9.20798 8.3657 9.02101 8.49654 8.86942C8.62744 8.71784 8.67055 8.60919 8.75776 8.43614C8.84502 8.26263 8.80139 8.1111 8.73623 7.98093C8.67102 7.85081 8.14864 6.5719 7.93053 6.05189C7.71843 5.54533 7.50289 5.61414 7.34294 5.60566C7.19052 5.59818 7.01657 5.59669 6.84209 5.59669C6.66762 5.59669 6.38482 5.6615 6.14518 5.92177C5.90555 6.18201 5.2307 6.81073 5.2307 8.08912C5.2307 9.36751 6.16677 10.6035 6.29761 10.7771C6.42845 10.9506 8.14007 13.5746 10.7607 14.7005C11.3839 14.9682 11.8707 15.1282 12.2502 15.2479C12.876 15.4458 13.4455 15.4179 13.8957 15.3511C14.3976 15.2763 15.4414 14.7224 15.659 14.1156C15.8766 13.5088 15.8766 12.9883 15.8114 12.8801C15.7463 12.7719 15.5718 12.7066 15.3106 12.5764L15.311 12.5755Z"
                                        fill="#111B21" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_407_3">
                                        <rect width="21" height="21" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></a>
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
                                <div class="flex items-center gap-6 mb-5">
                                    <span class="bg-[#FFF5CD] rounded-full p-1"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M7.49312 8.4922H16.4848V7.49312H7.49312V8.4922ZM5.61085 19.9816C5.16326 19.9816 4.78228 19.8244 4.4679 19.5101C4.15353 19.1957 3.99634 18.815 3.99634 18.3681V5.60985C3.99634 5.1636 4.15353 4.78295 4.4679 4.4679C4.78228 4.15353 5.16326 3.99634 5.61085 3.99634H18.3681C18.8144 3.99634 19.195 4.15353 19.5101 4.4679C19.8244 4.78228 19.9816 5.16326 19.9816 5.61085V10.0178C19.586 9.5762 19.1198 9.23085 18.5829 8.98175C18.0461 8.73265 17.4746 8.6081 16.8685 8.6081C15.9533 8.6081 15.1261 8.87252 14.3868 9.40137C13.6475 9.93021 13.1193 10.6262 12.8022 11.4894H7.49312V12.4885H12.5135C12.4542 12.9368 12.4735 13.3787 12.5714 13.8143C12.6687 14.2499 12.8269 14.6662 13.046 15.0632C12.8795 15.1271 12.7163 15.191 12.5565 15.255C12.3959 15.3196 12.2388 15.3965 12.0849 15.4858H7.49312V16.4848H10.9729C10.6432 16.8379 10.3971 17.2448 10.2346 17.7057C10.0721 18.1666 9.99082 18.6385 9.99082 19.1214V19.9816H5.61085ZM12.3736 19.9816V19.0825C12.3736 18.7727 12.4519 18.492 12.6084 18.2402C12.7656 17.9885 12.9844 17.8066 13.2648 17.6947C13.8256 17.4583 14.4074 17.2808 15.0102 17.1622C15.613 17.0437 16.2324 16.9844 16.8685 16.9844C17.4799 16.9844 18.087 17.0437 18.6898 17.1622C19.2926 17.2808 19.8871 17.4586 20.4732 17.6957C20.7536 17.807 20.9724 17.9885 21.1296 18.2402C21.2861 18.4913 21.3644 18.7721 21.3644 19.0825V19.9816H12.3736ZM16.8695 14.9862C16.3233 14.9862 15.8538 14.7897 15.4608 14.3968C15.0678 14.0038 14.8713 13.5342 14.8713 12.9881C14.8713 12.4419 15.0678 11.9723 15.4608 11.5794C15.8538 11.1864 16.3233 10.9899 16.8695 10.9899C17.415 10.9899 17.8846 11.1864 18.2782 11.5794C18.6712 11.9723 18.8677 12.4419 18.8677 12.9881C18.8677 13.5342 18.6712 14.0038 18.2782 14.3968C17.8852 14.7897 17.4157 14.9862 16.8695 14.9862Z"
                                                fill="black" />
                                        </svg></span>
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
                                <div class="flex items-center gap-6 mb-5">
                                    <span class="bg-[#FFF5CD] rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M0.999023 15.9853V15.4108C0.999023 14.4284 1.47359 13.779 2.42271 13.4626C3.37184 13.1462 4.22938 12.988 4.99535 12.988C5.76131 12.988 6.61885 13.1462 7.56798 13.4626C8.51711 13.779 8.99167 14.4284 8.99167 15.4108V15.9853H0.999023ZM4.99535 11.989C4.44585 11.989 3.97562 11.7935 3.58464 11.4025C3.19367 11.0115 2.99785 10.541 2.99719 9.9908C2.99652 9.44064 3.19234 8.9704 3.58464 8.5801C3.97695 8.18979 4.44718 7.99397 4.99535 7.99264C5.54351 7.9913 6.01408 8.18712 6.40705 8.5801C6.80002 8.97307 6.99551 9.4433 6.99351 9.9908C6.99151 10.5383 6.79602 11.0089 6.40705 11.4025C6.01807 11.7961 5.54751 11.9916 4.99535 11.989ZM9.66605 13.4127C9.46623 13.4127 9.29139 13.3377 9.14153 13.1879C8.99167 13.038 8.91674 12.8632 8.91674 12.6633C8.91674 12.5634 8.99167 12.3886 9.14153 12.1388C9.27474 11.9723 9.36633 11.7891 9.41628 11.5893C9.46623 11.3895 9.49121 11.1897 9.49121 10.9899C9.49121 10.7901 9.46623 10.5946 9.41628 10.4034C9.36633 10.2123 9.27474 10.0331 9.14153 9.86591C9.07493 9.78266 9.02098 9.6954 8.97968 9.60415C8.93839 9.5129 8.91741 9.41699 8.91674 9.31642C8.91674 9.09995 8.98767 8.92112 9.12954 8.77991C9.27141 8.63871 9.45025 8.56777 9.66605 8.56711C9.79926 8.56711 9.92015 8.60474 10.0287 8.68C10.1373 8.75527 10.2329 8.84252 10.3155 8.94176C10.5319 9.24149 10.6984 9.56619 10.815 9.91587C10.9316 10.2655 10.9898 10.6235 10.9898 10.9899C10.9898 11.3562 10.9316 11.7102 10.815 12.0519C10.6984 12.3936 10.5319 12.7223 10.3155 13.038C10.2322 13.1379 10.1366 13.2255 10.0287 13.3008C9.92082 13.376 9.79993 13.4133 9.66605 13.4127ZM11.7891 15.5607C11.5726 15.5607 11.3895 15.4901 11.2396 15.3489C11.0897 15.2077 11.0148 15.0285 11.0148 14.8114C11.0148 14.7115 11.0358 14.6159 11.0778 14.5246C11.1197 14.4334 11.1737 14.3458 11.2396 14.2619C11.6559 13.7956 11.9683 13.2794 12.1767 12.7133C12.3852 12.1471 12.4891 11.5727 12.4885 10.9899C12.4878 10.4071 12.3839 9.83661 12.1767 9.27845C11.9696 8.7203 11.6572 8.20844 11.2396 7.74287C11.173 7.65961 11.119 7.57635 11.0778 7.4931C11.0365 7.40984 11.0155 7.31826 11.0148 7.21835C11.0148 7.00188 11.0857 6.81872 11.2276 6.66885C11.3695 6.51899 11.5483 6.44406 11.7641 6.44406C11.8807 6.44406 11.9889 6.46904 12.0888 6.51899C12.1887 6.56895 12.2803 6.63555 12.3636 6.71881C12.9131 7.33491 13.321 8.00929 13.5874 8.74195C13.8539 9.47461 13.9871 10.2239 13.9871 10.9899C13.9871 11.7558 13.8495 12.5095 13.5745 13.2508C13.2994 13.9921 12.8957 14.6705 12.3636 15.2859C12.2803 15.3692 12.1931 15.4358 12.1018 15.4857C12.0106 15.5357 11.9063 15.5607 11.7891 15.5607ZM14.9862 15.9853V15.4108C14.9862 14.4284 15.4607 13.779 16.4098 13.4626C17.359 13.1462 18.2165 12.988 18.9825 12.988C19.7484 12.988 20.606 13.1462 21.5551 13.4626C22.5042 13.779 22.9788 14.4284 22.9788 15.4108V15.9853H14.9862ZM18.9825 11.989C18.433 11.989 17.9627 11.7935 17.5718 11.4025C17.1808 11.0115 16.985 10.541 16.9843 9.9908C16.9837 9.44064 17.1795 8.9704 17.5718 8.5801C17.9641 8.18979 18.4343 7.99397 18.9825 7.99264C19.5306 7.9913 20.0012 8.18712 20.3942 8.5801C20.7872 8.97307 20.9826 9.4433 20.9806 9.9908C20.9786 10.5383 20.7832 11.0089 20.3942 11.4025C20.0052 11.7961 19.5346 11.9916 18.9825 11.989Z"
                                                fill="black" />
                                        </svg>
                                    </span>
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
                                <div class="flex items-center gap-6 mb-5">
                                    <span class="bg-[#FFF5CD] rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M18.9824 6.494H15.9852V5.49492C15.9852 4.70001 15.6694 3.93764 15.1073 3.37555C14.5452 2.81346 13.7829 2.49768 12.9879 2.49768H10.9898C10.1949 2.49768 9.4325 2.81346 8.8704 3.37555C8.30831 3.93764 7.99253 4.70001 7.99253 5.49492V6.494H4.99529C4.20037 6.494 3.43801 6.80978 2.87592 7.37188C2.31383 7.93397 1.99805 8.69633 1.99805 9.49125V18.483C1.99805 19.2779 2.31383 20.0403 2.87592 20.6023C3.43801 21.1644 4.20037 21.4802 4.99529 21.4802H18.9824C19.7773 21.4802 20.5397 21.1644 21.1018 20.6023C21.6639 20.0403 21.9797 19.2779 21.9797 18.483V9.49125C21.9797 8.69633 21.6639 7.93397 21.1018 7.37188C20.5397 6.80978 19.7773 6.494 18.9824 6.494ZM9.99069 5.49492C9.99069 5.22995 10.096 4.97583 10.2833 4.78847C10.4707 4.6011 10.7248 4.49584 10.9898 4.49584H12.9879C13.2529 4.49584 13.507 4.6011 13.6944 4.78847C13.8818 4.97583 13.987 5.22995 13.987 5.49492V6.494H9.99069V5.49492ZM19.9815 18.483C19.9815 18.7479 19.8762 19.0021 19.6889 19.1894C19.5015 19.3768 19.2474 19.4821 18.9824 19.4821H4.99529C4.73032 19.4821 4.4762 19.3768 4.28883 19.1894C4.10147 19.0021 3.99621 18.7479 3.99621 18.483V13.4376H6.99345V14.4867C6.99345 14.7516 7.09871 15.0057 7.28608 15.1931C7.47344 15.3805 7.72756 15.4857 7.99253 15.4857C8.2575 15.4857 8.51162 15.3805 8.69899 15.1931C8.88635 15.0057 8.99161 14.7516 8.99161 14.4867V13.4376H14.9861V14.4867C14.9861 14.7516 15.0914 15.0057 15.2787 15.1931C15.4661 15.3805 15.7202 15.4857 15.9852 15.4857C16.2502 15.4857 16.5043 15.3805 16.6916 15.1931C16.879 15.0057 16.9843 14.7516 16.9843 14.4867V13.4376H19.9815V18.483ZM19.9815 11.4894H3.99621V9.49125C3.99621 9.22627 4.10147 8.97215 4.28883 8.78479C4.4762 8.59743 4.73032 8.49217 4.99529 8.49217H18.9824C19.2474 8.49217 19.5015 8.59743 19.6889 8.78479C19.8762 8.97215 19.9815 9.22627 19.9815 9.49125V11.4894Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <p class="text-white">Career Growth & Networking</p>
                                </div>
                                <p class="text-sm text-white">Bangun network professional dengan praktisi industri &
                                    siap masuk kerja</p>
                            </div>
                            <a class="block text-center text-sm rounded-md p-2.5 h-[43px] text-white leading-[1.75] border border-white w-[210px]"
                                href="#">Lihat Profil Mentor</a>
                        </div>
                    </div>
                    <div style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.71) 80%, rgba(0, 0, 0, 1) 100%), url('{{ asset('images/benefit-3.jpg') }}');"
                        class='bg-cover bg-center h-[218px] rounded-[10px] p-5 w-1/2'>
                        <div class="flex flex-col h-full justify-between w-3/4">
                            <div>
                                <div class="flex items-center gap-6 mb-5">
                                    <span class="bg-[#FFF5CD] rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4893 17.3041V7.50011C10.768 6.98525 9.97338 6.59893 9.10551 6.34117C8.23631 6.08407 7.36578 5.95553 6.49391 5.95553C5.89446 5.95553 5.36961 5.99116 4.91936 6.06243C4.46911 6.1337 3.96923 6.26691 3.41974 6.46206C3.26655 6.51335 3.15765 6.58728 3.09304 6.68386C3.0291 6.78043 2.99713 6.88634 2.99713 7.00156V16.0083C2.99713 16.1881 3.06107 16.3193 3.18895 16.4019C3.31683 16.4845 3.4577 16.4945 3.61156 16.4319C3.97656 16.3087 4.39851 16.2098 4.8774 16.1352C5.35629 16.0606 5.89513 16.0236 6.49391 16.0243C7.36511 16.0243 8.213 16.1242 9.03757 16.324C9.86214 16.5238 10.6794 16.8512 11.4893 17.3041ZM1.99805 16.4808V6.82473C1.99805 6.57762 2.06299 6.34817 2.19287 6.13636C2.32275 5.92455 2.50491 5.77736 2.73936 5.69477C3.32616 5.43634 3.9366 5.24884 4.57068 5.13228C5.20476 5.01572 5.84584 4.95744 6.49391 4.95744C7.58557 4.95744 8.55468 5.09565 9.40124 5.37206C10.2471 5.64848 11.1123 6.0591 11.9968 6.60393C12.154 6.69052 12.2753 6.80708 12.3605 6.95361C12.4458 7.10014 12.4884 7.26832 12.4884 7.45814V17.3031C13.2983 16.8515 14.1156 16.5251 14.9401 16.324C15.7647 16.1228 16.6126 16.0229 17.4838 16.0243C18.0832 16.0243 18.6221 16.0612 19.1003 16.1352C19.5785 16.2091 20.0005 16.3077 20.3661 16.4309C20.5193 16.4948 20.6602 16.4852 20.7888 16.4019C20.9173 16.3187 20.9812 16.1874 20.9806 16.0083V6.0884C20.9806 5.9472 21.0285 5.82864 21.1244 5.73273C21.2204 5.63682 21.3393 5.58886 21.4811 5.58886C21.623 5.58886 21.7415 5.63682 21.8368 5.73273C21.932 5.82864 21.9797 5.9472 21.9797 6.0884V16.4808C21.9797 16.8951 21.8078 17.2105 21.4641 17.427C21.1198 17.6428 20.7535 17.6784 20.3651 17.5339C19.9029 17.354 19.4317 17.2242 18.9514 17.1442C18.4712 17.0636 17.982 17.0233 17.4838 17.0233C16.6239 17.0233 15.7857 17.1342 14.9691 17.356C14.1532 17.5785 13.3762 17.9062 12.6383 18.3391C12.5417 18.3964 12.4358 18.4397 12.3205 18.469C12.2053 18.4977 12.0934 18.512 11.9849 18.512C11.8763 18.512 11.7654 18.4977 11.6522 18.469C11.5389 18.4404 11.4347 18.3971 11.3395 18.3391C10.6015 17.9062 9.82451 17.5785 9.0086 17.356C8.19268 17.1336 7.35445 17.0227 6.49391 17.0233C5.97439 17.0233 5.46353 17.0666 4.96132 17.1532C4.45978 17.2405 3.97156 17.3803 3.49667 17.5728C3.13433 17.7174 2.79398 17.6737 2.47561 17.442C2.15723 17.2102 1.99805 16.8898 1.99805 16.4808ZM15.1779 13.1499V4.58579C15.1779 4.40862 15.2299 4.24843 15.3338 4.10523C15.437 3.96203 15.5716 3.86345 15.7374 3.8095L17.5088 3.24402C17.7033 3.17342 17.8824 3.20306 18.0463 3.33294C18.2101 3.46282 18.2917 3.62967 18.2911 3.83348V12.3976C18.2911 12.5741 18.2391 12.734 18.1352 12.8772C18.032 13.0204 17.8974 13.1189 17.7316 13.1729L15.9602 13.7384C15.7657 13.809 15.5869 13.7793 15.4237 13.6494C15.2605 13.5196 15.1786 13.3537 15.1779 13.1499Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <p class="text-white">Bisa Konversi SKS & Auto Lolos!</p>
                                </div>
                                <p class="text-sm text-white">Kesempatan magang di dunia kerja, auto lolos, dan bisa
                                    konversi sks sesuai ketentuan kampus masing-masing.</p>
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

    {{-- Footer --}}
    <footer class="bg-[#FFFCEF] py-20">
        <div class="max-w-10/12 mx-auto">
            {{-- Top Footer --}}
            <div class="pb-28 grid grid-cols-5 gap-10">
                <div class="space-y-10">
                    <div>
                        <img src="{{ asset('images/Logo_BB_Putih.png') }}" alt="Logo_BB_Putih">
                    </div>
                    <p class="font-medium text-[15px]">Headquarter Centennial Tower Level 29, Jl Jend Gatot Subroto
                        No.27,
                        Karet Semanggi, Setiabudi Daerah Khusus Ibukota Jakarta 12950</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-[15px] font-medium">Produk</p>
                    <a class="text-[15px] font-medium underline" href="#">Luarsekolah</a>
                    <a class="text-[15px] font-medium underline" href="#">Project Based Internship (PBI)</a>
                    <a class="text-[15px] font-medium underline" href="#">Belajar Bekerja Bootcamp</a>
                    <a class="text-[15px] font-medium underline" href="#">Aplikasi <span
                            class="text-[#0071FF]">segera</span></a>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-[15px] font-medium">Perusahaan</p>
                    <a class="text-[15px] font-medium underline" href="#">Tentang Kami</a>
                    <a class="text-[15px] font-medium underline" href="#">FAQ</a>
                    <a class="text-[15px] font-medium underline" href="#">Gabung Komunitas</a>
                    <a class="text-[15px] font-medium underline" href="#">Blog</span></a>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-[15px] font-medium">Media Sosial</p>
                    <a class="text-[15px] font-medium underline" href="#">Instagram</a>
                    <a class="text-[15px] font-medium underline" href="#">Youtube</a>
                    <a class="text-[15px] font-medium underline" href="#">TikTok</a>
                    <a class="text-[15px] font-medium underline" href="#">LinkedIn</span></a>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-[15px] font-medium">Metode Pembayaran</p>
                    <a class="text-[15px] font-medium underline" href="#">Partner</a>
                    <a class="text-[15px] font-medium underline" href="#">Kartu Kredit</a>
                    <a class="text-[15px] font-medium underline" href="#">Bank Transfer</a>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="border-t pt-20">
                <p class="font-medium text-[15px]">Belajar Bekerja merupakan program untuk mempersiapkan individu
                    menjadi lebih siap secara
                    profesional. Dimana peserta dapat mengerjakan kasus nyata yang terjadi di dunia industri dengan
                    memanfaatkan pemahaman digital transformasi serta teknologi Kecerdasan Buatan (AI) yang langsung
                    didampingi oleh praktisi berpengalaman. Pada program ini semua orang memiliki kesempatan untuk
                    berpengalaman di industri!</p>
            </div>
        </div>
    </footer>
</body>

</html>
