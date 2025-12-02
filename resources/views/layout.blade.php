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
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body class="font-poppins">
    <header class="bg-[#0F0F0F]">
        <x-navbar></x-navbar>
    </header>

    <main>
        {{-- Hero --}}
        <section style="background-image: url('{{ asset('images/hero-bg.png') }}');"
            class="bg-[#0F0F0F] text-white h-dvh bg-bottom-left bg-repeat-x flex flex-col justify-center items-center">
            <x-hero></x-hero>
        </section>

        {{-- Mentor --}}
        <section
            style="background: linear-gradient(180deg, #1E1E1E 90.38%, rgba(61, 61, 61, 0.864296) 92.78%, rgba(122, 122, 122, 0.589327) 95.03%, rgba(203, 203, 203, 0.233081) 97.44%, rgba(255, 255, 255, 0) 100%);"
            class="pt-4 pb-32">
            <x-mentor></x-mentor>
        </section>

        {{-- List Program PBI --}}
        <section class="pt-4">
            <x-program> </x-program>
        </section>


        {{-- Benefit --}}
        <section class="py-20">
            <x-benefit />
        </section>

        {{-- Company Partner --}}
        <section class="pb-20">
            <x-partner></x-partner>
        </section>

        {{-- Video Testimonials --}}
        <section style="background-image: linear-gradient(180deg, #927500 9.94%, #DCB000 66.39%, #FFFFFF 100%);"
            class="mx-4 rounded-t-[20px] py-10">
            <x-video-testimonial />
        </section>

        {{-- Story Testimonial --}}
        <section class="mx-4 pt-4 pb-10">
            <x-story-testimonial />
        </section>

        {{-- FAQ --}}
        <section class="py-12">
            <x-faq></x-faq>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="bg-[#FFFCEF] py-20 font-inter">
        <div class="max-w-10/12 mx-auto">
            {{-- Top Footer --}}
            <x-top-footer></x-top-footer>

            {{-- Bottom Footer --}}
            <x-bottom-footer></x-bottom-footer>
        </div>
    </footer>
</body>

</html>
