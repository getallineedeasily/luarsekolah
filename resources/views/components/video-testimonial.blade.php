 <div class="w-full lg:max-w-10/12 mx-auto">
     <div class="w-full sm:w-10/12 space-y-5 mb-10">
         <h3 class="font-medium text-xl sm:text-3xl lg:text-[42px] text-white leading-tight">Intip Keseruan Project-Based
             Internship
             Luarsekolah</h3>
         <h4 class="font-medium text-base sm:text-lg lg:text-2xl text-[#E7E7E7]">Dokumentasi Alumni - Luarsekolah</h4>
         <a href="#" class="rounded-[38px] bg-white flex justify-center items-center gap-1 w-[169px] p-2.5">
             <span class="text-xs lg:text-sm">Mulai nonton</span>
             <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                 <path d="M7 4.49756V16.7476L16.625 10.6226L7 4.49756Z" fill="black" />
             </svg>
         </a>
     </div>

     <div class="relative" data-carousel>

         {{-- previous button --}}
         <button id="videoTestimonialCarouselPrevBtn"
             style="background: linear-gradient(268.51deg, rgba(115, 115, 115, 0.0658) 1.26%, rgba(70, 70, 70, 0.3196) 31.87%, rgba(15, 15, 15, 0.47) 98.74%);"
             class="carousel-prev cursor-pointer absolute left-0  -translate-y-1/2 z-10 w-10 h-full flex items-center justify-center rounded-md">
             <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                 viewBox="0 0 15 25" fill="none">
                 <path
                     d="M0.548859 24.3913C0.197351 24.0397 -0.000116288 23.5629 -0.000116266 23.0657C-0.000116245 22.5685 0.197351 22.0917 0.548859 21.7401L9.83011 12.4588L0.54886 3.17758C0.207314 2.82395 0.0183239 2.35032 0.0225964 1.8587C0.0268679 1.36709 0.224059 0.896812 0.571699 0.549171C0.91934 0.20153 1.38961 0.00434056 1.88123 6.81193e-05C2.37285 -0.00420241 2.84648 0.184787 3.20011 0.526332L13.807 11.1332C14.1585 11.4848 14.356 11.9616 14.356 12.4588C14.356 12.956 14.1585 13.4328 13.807 13.7845L3.20011 24.3913C2.84849 24.7428 2.37167 24.9403 1.87448 24.9403C1.3773 24.9403 0.900474 24.7428 0.548859 24.3913Z"
                     fill="white" />
             </svg>
         </button>

         {{-- next button --}}
         <button id="videoTestimonialCarouselNextBtn"
             style="background: linear-gradient(268.51deg, rgba(115, 115, 115, 0.0658) 1.26%, rgba(70, 70, 70, 0.3196) 31.87%, rgba(15, 15, 15, 0.47) 98.74%);"
             class="carousel-next cursor-pointer absolute right-0  -translate-y-1/2 z-10 w-10 h-full flex items-center justify-center rounded-md">
             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                 <path
                     d="M0.548859 24.3913C0.197351 24.0397 -0.000116288 23.5629 -0.000116266 23.0657C-0.000116245 22.5685 0.197351 22.0917 0.548859 21.7401L9.83011 12.4588L0.54886 3.17758C0.207314 2.82395 0.0183239 2.35032 0.0225964 1.8587C0.0268679 1.36709 0.224059 0.896812 0.571699 0.549171C0.91934 0.20153 1.38961 0.00434056 1.88123 6.81193e-05C2.37285 -0.00420241 2.84648 0.184787 3.20011 0.526332L13.807 11.1332C14.1585 11.4848 14.356 11.9616 14.356 12.4588C14.356 12.956 14.1585 13.4328 13.807 13.7845L3.20011 24.3913C2.84849 24.7428 2.37167 24.9403 1.87448 24.9403C1.3773 24.9403 0.900474 24.7428 0.548859 24.3913Z"
                     fill="white" />
             </svg>
         </button>

         <div id="videoTestimonialCarouselContainer"
             class="carousel-track flex gap-4 overflow-x-auto items-stretch scrollbar-hide">
             @foreach ($videoTestimonials as $video)
                 <a href=""
                     style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 25.87%, rgba(0, 0, 0, 0.538119) 59.59%, rgba(0, 0, 0, 0.7) 100%), url('{{ $video->image }}');"
                     class="rounded-md w-[calc(100%)] sm:w-[calc(100%/3-1rem)] h-[187px] shrink-0 bg-no-repeat bg-cover bg-center flex justify-center items-center carousel-card">
                     <div class="rounded-full border border-white w-9 h-9 flex items-center justify-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                             fill="none">
                             <path d="M7 4.49756V16.7476L16.625 10.6226L7 4.49756Z" fill="white" />
                         </svg>
                     </div>
                 </a>
             @endforeach
         </div>

         <div class="carousel-pagination flex justify-center gap-2 mt-4"></div>
     </div>
 </div>
