<div class="w-full lg:max-w-10/12 mx-auto py-4 text-sm lg:text-base">
    {{-- desktop --}}
    <nav class="flex justify-between items-center max-sm:hidden">
        <aside>
            <img src="{{ asset('images/header-logo.png') }}" alt="">
        </aside>

        <div id="menu-links" class="text-white space-x-4 lg:space-x-8">
            @foreach ($menus as $menu)
                <a href="{{ '#' . strtolower($menu) }}" class="font-poppins font-medium"> {{ $menu }}</a>
            @endforeach
        </div>

        <div id="auth-buttons" class="flex gap-6">
            <a href="#"
                class="text-white w-[80px] lg:w-[110px] p-2.5 border border-white block text-center rounded-[5px] font-medium text-xs lg:text-base">Masuk</a>
            <a href="#"
                class="bg-[#FFD633] w-[80px] lg:w-[110px] p-2.5 block text-center rounded-[5px] font-medium text-xs lg:text-base">Daftar</a>
        </div>
    </nav>

    {{-- mobile --}}
    <nav class="hidden flex-col gap-4 text-white max-sm:flex">
        {{-- burger --}}
        <div class="flex justify-between items-center mb-2 sm:mb-0">
            <aside>
                <img src="{{ asset('images/header-logo.png') }}" alt="">
            </aside>
            <button id="hamburger" class="hidden max-sm:block text-white focus:outline-none">
                {{-- 3 lines --}}
                <svg id="hamburger-open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                {{-- close --}}
                <svg id="hamburger-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden space-y-6">
            @foreach ($menus as $menu)
                <a href="{{ '#' . strtolower($menu) }}" class="block font-poppins font-medium">{{ $menu }}</a>
            @endforeach

            <a href="#"
                class="text-white w-full md:w-[110px] p-2.5 border border-white block text-center rounded-[5px] font-medium">Masuk</a>
            <a href="#"
                class="bg-[#FFD633] w-full md:w-[110px] p-2.5 block text-center rounded-[5px] font-medium text-black">Daftar</a>
        </div>
    </nav>
</div>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('hamburger-open');
    const closeIcon = document.getElementById('hamburger-close');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>
