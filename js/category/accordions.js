document.addEventListener("DOMContentLoaded", () => {
    // 1. Mobile/Tablet main filter layout toggle behavior
    const filterBtn = document.querySelector(".category-left-filters-box__button");
    const filtersWrapper = document.querySelector(".category-left-filters");
    const mainArrow = filterBtn?.querySelector("img");

    if (filterBtn && filtersWrapper) {
        filterBtn.addEventListener("click", () => {
            filtersWrapper.classList.toggle("show");
            mainArrow?.classList.toggle("rotate");
        });
    }

    // 2. Individual internal Accordion sections logic
    const slots = document.querySelectorAll(".category-left-filters__slot");

    slots.forEach(slot => {
        const header = slot.querySelector(".header");
        if (header) {
            header.addEventListener("click", () => {
                slot.classList.toggle("active");
            });
        }
    });
});