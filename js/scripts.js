console.log("script file connected...");

const contentMenuToggle = document.querySelector(".content-menu-toggle");
const contentMenu = document.querySelector(".story-list-sidebar");

contentMenuToggle.addEventListener("click", () => {
  contentMenu.classList.toggle("open");
});
