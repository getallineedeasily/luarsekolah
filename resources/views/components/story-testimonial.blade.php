<div class="w-full lg:max-w-10/12 mx-auto pb-8">
    <h4 class="font-medium text-lg lg:text-2xl pb-8">Testimoni Nyata dari Alumni yang Berhasil Berkembang di Dunia
        Tech
    </h4>

    <div class="flex gap-5 flex-nowrap overflow-x-scroll scrollbar-hide">
        @foreach (collect($storyTestimonials)->take(3) as $story)
            <a href="#"
                class="w-[calc(100%-3rem)] min-w-[425px]:w-[calc(100%-10rem)] sm:w-[calc(100%/3-3rem)] lg:w-[calc(25%-1.25rem)] border-2 border-solid border-[#B0B0B0] shrink-0 rounded-md h-[382px] flex flex-col carousel-card bg-[#564500]">
                <div style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 42.89%, rgba(0, 0, 0, 0.5) 68.75%), url('{{ $story->image }}');"
                    class="flex flex-col justify-end bg-no-repeat bg-cover bg-center h-[147px] p-4 rounded-t-md shrink-0">
                    <span class="font-semibold text-lg lg:text-[22px] text-white line-clamp-1">{{ $story->name }}</span>
                    <span class="font-medium text-xs lg:text-sm text-white line-clamp-1">{{ $story->program_name }}</span>
                </div>
                <div class="bg-[#564500] p-4 h-full flex flex-col justify-between rounded-b-md">
                    <div class="space-y-4">
                        <p class="font-medium text-xs text-white">Benefit utama</p>
                        <p class="font-medium text-xs text-white">Hasil belajar</p>
                        <p class="font-medium text-xs text-white">Kalimat singkat testimoni</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <img class="w-[33px] h-[33px] rounded-[10px]" src="{{ $story->university_image }}"
                            alt="{{ $story->university }}">
                        <span class="font-medium text-xs text-white line-clamp-2">{{ $story->university }}</span>
                    </div>
                </div>
            </a>
        @endforeach

        <a href="#"
            class="w-[calc(100%-3rem)] min-w-[425px]:w-[calc(100%-10rem)] sm:w-[calc(100%/3-3rem)] lg:w-[calc(25%-1.25rem)] border-2 border-solid border-[#B0B0B0] shrink-0 rounded-md h-[382px] flex flex-col carousel-card relative bg-[#564500]">
            <div style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 42.89%, rgba(0, 0, 0, 0.5) 68.75%), url('{{ $story->image }}');"
                class="flex flex-col justify-end bg-no-repeat bg-cover bg-center h-[147px] p-4 rounded-t-md shrink-0">
                <span class="font-semibold text-lg lg:text-[22px] text-white line-clamp-1">{{ $story->name }}</span>
                <span class="font-medium text-xs lg:text-sm text-white line-clamp-1">{{ $story->program_name }}</span>
            </div>
            <div class="bg-[#564500] p-4 h-full flex flex-col justify-between rounded-b-md">
                <div class="space-y-4">
                    <p class="font-medium text-xs text-white">Benefit utama</p>
                    <p class="font-medium text-xs text-white">Hasil belajar</p>
                    <p class="font-medium text-xs text-white">Kalimat singkat testimoni</p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-[33px] h-[33px] rounded-[10px]" src="{{ $story->university_image }}"
                        alt="{{ $story->university }}">
                    <span class="font-medium text-xs text-white line-clamp-2">{{ $story->university }}</span>
                </div>
            </div>
            <div style="background-color: rgba(15, 15, 15, 0.42); backdrop-filter: blur(7.199px);"
                class="h-full w-full absolute top-0 right-0 z-10 rounded-md flex justify-center items-center flex-col gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 15 25"
                    fill="none">
                    <path
                        d="M0.548859 24.3913C0.197351 24.0397 -0.000116288 23.5629 -0.000116266 23.0657C-0.000116245 22.5685 0.197351 22.0917 0.548859 21.7401L9.83011 12.4588L0.54886 3.17758C0.207314 2.82395 0.0183239 2.35032 0.0225964 1.8587C0.0268679 1.36709 0.224059 0.896812 0.571699 0.549171C0.91934 0.20153 1.38961 0.00434056 1.88123 6.81193e-05C2.37285 -0.00420241 2.84648 0.184787 3.20011 0.526332L13.807 11.1332C14.1585 11.4848 14.356 11.9616 14.356 12.4588C14.356 12.956 14.1585 13.4328 13.807 13.7845L3.20011 24.3913C2.84849 24.7428 2.37167 24.9403 1.87448 24.9403C1.3773 24.9403 0.900474 24.7428 0.548859 24.3913Z"
                        fill="white" />
                </svg>
                <span class="text-xl text-white">Lihat Lainnya</span>
            </div>
        </a>
    </div>
</div>

<div style="background-image: linear-gradient(0deg, #DCB000 14.9%, #FFFFFF 100%);"
    class="w-full h-[69px] rounded-b-[20px]">
</div>
