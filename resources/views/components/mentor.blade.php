<div class="w-full lg:max-w-10/12 mx-auto text-white pt-16 sm:pt-0 fade-in">
    <div class="w-full sm:max-w-10/12 mb-9">
        <h2 class="text-[#FFD633] text-2xl lg:text-[36px] font-semibold pb-6">Kenali Mentor Kami!</h2>
        <h3 class="font-medium text-lg lg:text-[24px]">Belajar dengan Mentor Profesional dari Berbagai
            Perusahaan Teknologi & Kreatif</h3>
        <span class="font-lexend text-[#E7E7E7] text-xs lg:text-base">Dari kampus ke dunia kerja, bangun portofolio bersama mentor ahli yang
            sudah
            berpengalaman
            di industri</span>
        <a href="#"
            class="font-medium text-xs lg:text-sm w-full sm:w-[519px] rounded-md border border-white block p-2.5 text-center mt-8">Mulai
            dengan Mentor
            Sekarang</a>
    </div>
    <div class="text-center flex gap-2.5 justify-between overflow-x-scroll scrollbar-hide">
        @foreach ($mentor as $m)
            <div class="w-[150px] h-[280px] shrink-0">
                <div class="w-[150px] h-[150px] mb-2">
                    <img src="{{ $m->mentor_image }}" alt="{{ $m->mentor }}" class="w-full h-full object-cover">
                </div>
                <div class="space-y-2">
                    <p class="text-base lg:text-xl text-[#FFE066]">{{ $m->mentor }}</p>
                    <p class="font-medium text-xs">{{ $m->mentor_job }}</p>
                    <p class="text-xs">di Perusahaan X</p>
                </div>
            </div>
        @endforeach
        <div class="w-[150px] h-[280px] shrink-0">
            <div class="w-[150px] h-[150px] mb-2">
                <img src="https://pbi.belajarbekerja.com/upload/gambar_user/9d202a962b66f385f9f5b2fad1697b93.png"
                    alt="Moh Aufal Marom Arrozi" class="w-full h-full object-cover">
            </div>
            <div class="space-y-2">
                <p class="text-base lg:text-xl text-[#FFE066]">Moh Aufal Marom Arrozi</p>
                <p class="font-medium text-xs">Senior Software Engineer</p>
                <p class="text-xs">di Perusahaan X</p>
            </div>
        </div>
        <div class="w-[150px] h-[280px] relative shrink-0">
            <div style="background: radial-gradient(105.58% 50% at 50% 50%, rgba(211, 211, 211, 0.25) 0%, rgba(109, 109, 109, 0.25) 100%); backdrop-filter: blur(4px)"
                class="h-full w-full absolute top-0 right-0 z-10 rounded-md flex justify-center items-center flex-col gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 15 25"
                    fill="none">
                    <path
                        d="M0.548859 24.3913C0.197351 24.0397 -0.000116288 23.5629 -0.000116266 23.0657C-0.000116245 22.5685 0.197351 22.0917 0.548859 21.7401L9.83011 12.4588L0.54886 3.17758C0.207314 2.82395 0.0183239 2.35032 0.0225964 1.8587C0.0268679 1.36709 0.224059 0.896812 0.571699 0.549171C0.91934 0.20153 1.38961 0.00434056 1.88123 6.81193e-05C2.37285 -0.00420241 2.84648 0.184787 3.20011 0.526332L13.807 11.1332C14.1585 11.4848 14.356 11.9616 14.356 12.4588C14.356 12.956 14.1585 13.4328 13.807 13.7845L3.20011 24.3913C2.84849 24.7428 2.37167 24.9403 1.87448 24.9403C1.3773 24.9403 0.900474 24.7428 0.548859 24.3913Z"
                        fill="white" />
                </svg>
                <span class="text-white font-lexend font-light text-sm lg:text-base">Lihat Lainnya</span>
            </div>
        </div>
    </div>
</div>
