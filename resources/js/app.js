import "./bootstrap";

document.querySelectorAll("[data-carousel]").forEach((carousel) => {
    const track = carousel.querySelector(".carousel-track");
    const nextBtn = carousel.querySelector(".carousel-next");
    const prevBtn = carousel.querySelector(".carousel-prev");
    const pagination = carousel.querySelector(".carousel-pagination");

    const cards = track.querySelectorAll(".carousel-card");
    const firstCard = cards[0];

    const cardHeight = firstCard.offsetHeight;

    prevBtn.style.top = track.offsetTop + cardHeight / 2 + "px";
    nextBtn.style.top = track.offsetTop + cardHeight / 2 + "px";

    prevBtn.style.height = cardHeight + "px";
    nextBtn.style.height = cardHeight + "px";

    let dots = [];
    let currentPage = 0;
    let layout = {};

    function recomputeLayout() {
        const computedStyle = window.getComputedStyle(track);
        const gap = parseInt(computedStyle.columnGap || computedStyle.gap) || 0;
        const cardWidth = firstCard.offsetWidth + gap;

        const trackWidth = track.clientWidth;
        const cardsPerPage =
            Math.floor(trackWidth / firstCard.offsetWidth) || 1;
        const totalPages = Math.ceil(cards.length / cardsPerPage);

        return {
            cardWidth,
            cardsPerPage,
            totalPages,
        };
    }

    function updateButtons() {
        const scrollLeft = track.scrollLeft;
        const maxScroll = track.scrollWidth - track.clientWidth;

        prevBtn.style.visibility = scrollLeft <= 0 ? "hidden" : "visible";
        nextBtn.style.visibility =
            scrollLeft >= maxScroll - 1 ? "hidden" : "visible";
    }

    function setupPagination() {
        if (!pagination) return;
        pagination.innerHTML = "";
        dots = [];

        for (let i = 0; i < layout.totalPages; i++) {
            const dot = document.createElement("div");
            dot.className =
                "w-[56px] h-[5.25px] rounded-[30px] bg-[#5D5D5D] opacity-50 cursor-pointer transition";
            pagination.appendChild(dot);
            dots.push(dot);

            dot.addEventListener("click", () => {
                track.scrollTo({
                    left: i * layout.cardWidth * layout.cardsPerPage,
                    behavior: "smooth",
                });
                currentPage = i;
                updateUI();
            });
        }
    }

    function updateUI() {
        updateButtons();

        if (!pagination) return;

        const scrollLeft = track.scrollLeft;
        currentPage = Math.round(
            scrollLeft / (layout.cardWidth * layout.cardsPerPage)
        );

        dots.forEach((dot, i) => {
            dot.classList.toggle("opacity-50", i !== currentPage);
        });
    }

    function scrollNext() {
        track.scrollBy({
            left: layout.cardWidth * layout.cardsPerPage,
            behavior: "smooth",
        });
        setTimeout(updateUI, 300);
    }

    function scrollPrev() {
        track.scrollBy({
            left: -layout.cardWidth * layout.cardsPerPage,
            behavior: "smooth",
        });
        setTimeout(updateUI, 300);
    }

    nextBtn.addEventListener("click", scrollNext);
    prevBtn.addEventListener("click", scrollPrev);
    track.addEventListener("scroll", updateUI);

    function initCarousel() {
        layout = recomputeLayout();
        setupPagination();
        updateUI();
    }

    window.addEventListener("resize", initCarousel);

    initCarousel();
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".accordion-button");

    buttons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const item = this.closest(".accordion-item");
            const content = item.querySelector(".accordion-content");
            const iconBox = item.querySelector(".accordion-icon");
            const arrow = item.querySelector(".arrow-path");
            const inner = content.querySelector(".inner");

            const isOpen =
                content.style.maxHeight && content.style.maxHeight !== "0px";

            if (isOpen) {
                // close
                content.style.maxHeight = "0px";
                this.classList.remove("active", "bg-[#C39C00]", "text-white");
                this.classList.add("bg-[#E7E7E7]", "text-black");

                // icon close
                iconBox.classList.remove("bg-[#C39C00]");
                iconBox.classList.add("bg-white");
                iconBox.style.transform = "rotate(0deg)";
                arrow.style.fill = "#C39C00";
            } else {
                // open
                content.style.maxHeight = inner.scrollHeight + 10 + "px";
                this.classList.add("active", "bg-[#C39C00]", "text-white");
                this.classList.remove("bg-[#E7E7E7]", "text-black");

                // icon open
                iconBox.classList.remove("bg-white");
                iconBox.classList.add("bg-[#C39C00]");
                iconBox.style.transform = "rotate(180deg)";
                arrow.style.fill = "white";
            }
        });
    });
});
