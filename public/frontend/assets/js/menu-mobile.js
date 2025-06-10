document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll(
    ".menu-item.menu-item-has-children"
  );

  menuItems.forEach((menu) => {
    menu.addEventListener("click", function (e) {
      e.stopPropagation();
      e.preventDefault();

      const isOpened = menu.classList.contains("submenu-opened");
      const subMenu = menu.querySelector(":scope > .sub-menu.wpda-menu");
      const switcher = menu.querySelector(":scope > .mobile_switcher");

      if (isOpened) {
        menu.classList.remove("submenu-opened");
        if (subMenu) subMenu.style.display = "none";
        if (switcher) switcher.classList.remove("is-active");
      } else {
        menu.classList.add("submenu-opened");
        if (subMenu) subMenu.style.display = "block";
        if (switcher) switcher.classList.add("is-active");
      }
    });
  });
});
