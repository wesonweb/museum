console.log("script file connected...");

const contentMenuToggle = document.querySelector(".content-menu-toggle");
const contentMenuToggleIcon = document.querySelector("i.fa-chevron-down");
const contentMenu = document.querySelector(".story-list-sidebar");

contentMenuToggle.addEventListener("click", () => {
  contentMenu.classList.toggle("open");
  contentMenuToggleIcon.classList.toggle("chev-up");
});
