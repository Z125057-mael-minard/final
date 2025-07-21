const slider = document.getElementById("slider");
const leftBtn = document.getElementById("leftBtn");
const rightBtn = document.getElementById("rightBtn");

let productWidth = 0;
let totalProducts = 0;
let maxScroll = 0;

function updateMetrics() {
  const product = slider.querySelector(".product");
  productWidth = product.offsetWidth + parseInt(getComputedStyle(product).marginLeft) + parseInt(getComputedStyle(product).marginRight);
  totalProducts = slider.children.length;
  maxScroll = productWidth * (totalProducts - Math.floor(slider.offsetWidth / productWidth));
  updateButtons();
}

function slideBy(direction) {
  const scrollLeft = slider.scrollLeft;
  const next = Math.round(scrollLeft / productWidth) + direction;
  const target = Math.min(Math.max(next, 0), totalProducts - 1);
  slider.scrollTo({ left: target * productWidth, behavior: "smooth" });
}

function updateButtons() {
  const scrollLeft = slider.scrollLeft;
  leftBtn.disabled = scrollLeft <= 0;
  rightBtn.disabled = scrollLeft >= maxScroll - 5; // small margin to account for rounding
}

leftBtn.addEventListener("click", () => slideBy(-1));
rightBtn.addEventListener("click", () => slideBy(1));
slider.addEventListener("scroll", () => {
  window.requestAnimationFrame(updateButtons);
});

window.addEventListener("resize", () => {
  updateMetrics();
  updateButtons();
});

// Initial setup
window.addEventListener("load", () => {
  updateMetrics();
});

