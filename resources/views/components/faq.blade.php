<div class="w-full lg:max-w-10/12 mx-auto fade-in">
    <h2 class="font-medium text-lg lg:text-2xl text-center pb-10">Frequently Asked Questions</h2>
    @foreach ($faq as $f)
        <div class="accordion-item space-y-2 mb-3">
            <div class="flex items-center gap-3">
                <button
                    class="accordion-button font-lexend bg-[#E7E7E7] rounded-[18px] py-2.5 px-4 w-fit cursor-pointer text-left transition-all duration-300 text-sm lg:text-base">{{ $f->question }}
                </button>
                <div
                    class="accordion-icon flex justify-center items-center rounded-full border p-1.5 border-[#C39C00] w-[25px] h-[25px] cursor-pointer transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                        fill="none">
                        <path class="arrow-path"
                            d="M11.6707 4.30062C11.5184 4.1483 11.3118 4.06273 11.0963 4.06273C10.8809 4.06273 10.6742 4.1483 10.5219 4.30062L6.49999 8.32249L2.47812 4.30061C2.32488 4.15261 2.11964 4.07072 1.9066 4.07257C1.69357 4.07442 1.48978 4.15987 1.33914 4.31051C1.18849 4.46116 1.10305 4.66494 1.10119 4.87798C1.09934 5.09101 1.18124 5.29625 1.32924 5.44949L5.92555 10.0458C6.07792 10.1981 6.28455 10.2837 6.49999 10.2837C6.71544 10.2837 6.92206 10.1981 7.07443 10.0458L11.6707 5.44949C11.8231 5.29712 11.9086 5.0905 11.9086 4.87505C11.9086 4.65961 11.8231 4.45298 11.6707 4.30062Z"
                            fill="" />
                    </svg>
                </div>
            </div>
            <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                <div
                    class="inner font-lexend bg-[#FFEA9A] rounded-[19px] py-2.5 px-4 border-b-2 border-l border-solid border-[#6D6D6D] w-fit text-sm lg:text-base">
                    {!! $f->answer !!}</div>
            </div>
        </div>
    @endforeach
</div>
