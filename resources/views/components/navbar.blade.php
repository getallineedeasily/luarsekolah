<div class="max-w-10/12 mx-auto py-4">
    <nav class="flex justify-between items-center">
        <aside>
            <img src="{{ asset('images/header-logo.png') }}" alt="">
        </aside>
        <div class="text-white space-x-8">
            @foreach ($menus as $menu)
                <a href="#" class="font-poppins font-medium"> {{ $menu }}</a>
            @endforeach
        </div>
        <div class="flex gap-6">
            <a href="#"
                class="text-white w-[110px] p-2.5 border border-white block text-center rounded-[5px] font-medium">Masuk</a>
            <a href="#"
                class="bg-[#FFD633] w-[110px] p-2.5 block text-center rounded-[5px] font-medium">Daftar</a>
        </div>
    </nav>
</div>
