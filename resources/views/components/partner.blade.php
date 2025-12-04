<div class="w-full lg:max-w-10/12 mx-auto space-y-24 fade-in">
    <div>
        <h3 class="text-lg lg:text-xl text-[#0F0F0F] text-center">400+ Alumni kami telah bekerja di berbagai perusahaan industri
        </h3>
        <div class="flex flex-wrap lg:flex-nowrap font-lexend gap-9 justify-center lg:justify-between items-center mt-8">
            @foreach ($alumniCompany as $c)
                <img src="{{ "/images/company/{$c->image}" }}" alt="{{ $c->name }}">
            @endforeach
            <aside class="text-[#EDC003] w-[68px] text-center">
                Dan Lain-lain
            </aside>
        </div>
    </div>
    <div>
        <h3 class="text-lg lg:text-xl text-[#0F0F0F] text-center">50+ Partner bidang teknologi & kreatif
        </h3>
        <div class="w-10/12 mx-auto flex flex-wrap font-lexend gap-x-12 gap-y-12 justify-center items-center mt-8">
            @foreach ($partnerCompany as $c)
                <img src="{{ "/images/company/{$c->image}" }}" alt="{{ $c->name }}">
            @endforeach
            <aside class="text-[#EDC003] w-[68px] text-center">
                Dan Lain-lain
            </aside>
        </div>
    </div>

</div>
