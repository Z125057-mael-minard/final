const slider = document.getElementById("slider");
const leftBtn = document.getElementById("leftBtn");
const rightBtn = document.getElementById("rightBtn");
const seasonal_products = document.querySelectorAll(".seasonal-product");

const slider_h = document.getElementById("slider-header");

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

function isVisible(el) {
  const elRect = el.getBoundingClientRect();
  const sliderRect = slider.getBoundingClientRect();

  return (
    elRect.right > sliderRect.left &&  // element's left side is before slider's right
    elRect.left < sliderRect.right     // element's right side is after slider's left
  );
}

function updateSection() {
  let section_season = false;
  for (el of seasonal_products) {
    if (isVisible(el)) {
      section_season = true;
      break;
    }
  }
  if (section_season) {
    updateToSeasonals();
  }
  else {
    updateToNewArrivals();
  }
}

function updateToNewArrivals() {
  slider_h.textContent = "New arrivals";
}

function updateToSeasonals() {
  slider_h.textContent = "Seasonal products";
}

leftBtn.addEventListener("click", () => slideBy(-1));
rightBtn.addEventListener("click", () => slideBy(1));
slider.addEventListener("scroll", () => {
  window.requestAnimationFrame(updateButtons);
  window.requestAnimationFrame(updateSection);
});

window.addEventListener("resize", () => {
  updateMetrics();
  updateButtons();
  updateSection();
});

// Initial setup
window.addEventListener("load", () => {
  updateMetrics();
  updateSection();
});

