const sliding_items_containers = document.querySelectorAll('.sliding-items-container');
const left_arrows = document.querySelectorAll('.sliding-arrow-left');
const right_arrows = document.querySelectorAll('.sliding-arrow-right');

//let product_w = container.children[0].getBoundingClientRect().width;

let product_indexes = [];
for (let i=0; i<sliding_items_containers.length; i++) {
  product_indexes.push(0)
  check_arrows(left_arrows[i], right_arrows[i], product_indexes[i],
    sliding_items_containers[i].children.length,
    product_nb_per_page(sliding_items_containers[i]))
}

let x = 0;

for (let i =0; i < left_arrows.length; i++) {
  left_arrows[i].addEventListener("click", () => {
    let product_nb_per_pg = product_nb_per_page(sliding_items_containers[i]);
    if (product_indexes[i] > 0) {
      translate_products(sliding_items_containers[i], 1);
      product_indexes[i] -= product_nb_per_pg;
      check_arrows(left_arrows[i], right_arrows[i], product_indexes[i],
        sliding_items_containers[i].children.length,
        product_nb_per_pg)
    }
  });
}
for (let i =0; i < right_arrows.length; i++) {
  right_arrows[i].addEventListener("click", () => { 
    let product_nb_per_pg = product_nb_per_page(sliding_items_containers[i]);
    let product_nb = sliding_items_containers[i].children.length;
    if (product_indexes[i] + product_nb_per_pg < product_nb - 1) {
      translate_products(sliding_items_containers[i], -1) 
      product_indexes[i] += product_nb_per_pg;
      check_arrows(left_arrows[i], right_arrows[i], product_indexes[i],
        product_nb,
        product_nb_per_pg)
    }
  });
}

function product_nb_per_page(container) {
  let container_w = container.getBoundingClientRect().width;
  let product_w = container.children[0].getBoundingClientRect().width;
  return Math.floor(container_w/product_w);
}

function translate_products(container, dir) {
  children = container.children;
  translation = dir * (container.getBoundingClientRect().width - 7);
  x += translation;
  for (child of children) {
    child.style.transform = `translate(${x}px, 0px)`;
  }
}

function check_arrows(left_arrow, right_arrow, product_index, product_number, product_nb_per_page) {
  right_arrow.style.visibility = "visible";
  left_arrow.style.visibility = "visible";
  if (product_index + product_nb_per_page >= product_number - 1) {
    right_arrow.style.visibility = "hidden";
  } else if (product_index == 0) {
    left_arrow.style.visibility = "hidden";
  }
}
