document.addEventListener("DOMContentLoaded", function () {
  const searchWrapper = document.querySelector(".wpda-builder-search");
  const label = document.querySelector(
    'label[for="search-form-6822b2fd5bb42"]'
  );
  const searchSubmit = document.querySelector(".search_submit");
  const searchInput = document.querySelector("#search-form-6822b2fd5bb42");

  if (searchWrapper && label && searchSubmit && searchInput) {
    searchWrapper.addEventListener("click", function (e) {
      e.stopPropagation();

      const isOpen = searchWrapper.classList.contains("wpda-search-open");

      if (isOpen && e.target !== searchInput) {
        searchWrapper.classList.remove("wpda-search-open");
        label.classList.remove("gt3_onfocus");
      } else {
        searchWrapper.classList.add("wpda-search-open");
        label.classList.add("gt3_onfocus");
      }
    });

    searchSubmit.addEventListener("mouseenter", function () {
      searchSubmit.classList.add("wpda-hover-btn");
    });

    searchSubmit.addEventListener("mouseleave", function () {
      searchSubmit.classList.remove("wpda-hover-btn");
    });

    document.addEventListener("click", function (e) {
      if (!searchWrapper.contains(e.target)) {
        searchWrapper.classList.remove("wpda-search-open");
        label.classList.remove("gt3_onfocus");
      }
    });
  }
});
