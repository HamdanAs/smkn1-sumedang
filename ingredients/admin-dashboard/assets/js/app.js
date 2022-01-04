const bars = document.getElementById("bars");
const nav = document.getElementById("nav");
const navText = document.querySelectorAll(".nav-text");

bars.addEventListener("click", () => {
  document.documentElement.style.setProperty("--nav-size", 100);
  bars.classList.toggle("hidden");

  navText.forEach((text) => {
    text.classList.toggle("hidden");
  });
});
