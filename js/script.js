'use strict';
function setBlockHeight (el) {
  var height = el.height();
  el.css("height", height);
}

function resetBlockHeight(el) {
  //TODO: fix the bug with resizing window
}

function fixSidebarProducts() {
  $("#sidebar-products").stick_in_parent({
    parent: "#content-wrapper"
  });
}

function disableButton(el) {
  el.addClass("disabled");
}

$(window).ready(function() {
  setBlockHeight($("#content-wrapper"));
  fixSidebarProducts();
  new Counter([$('#product_1'), $('#fproduct_1')], 100, 3500).setCounter();
  new Counter([$('#product_2'), $('#fproduct_2')], 100, 5000).setCounter();
});
$(window).resize(resetBlockHeight($("#content-wrapper")));
