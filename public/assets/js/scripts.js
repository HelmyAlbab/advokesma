window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  var nav = document.getElementById("navbar");

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    nav.classList.add("shadow");
    nav.classList.add("#e0f5ff");
    nav.classList.remove("mt-4");
  } else {
    nav.classList.remove("shadow");
    nav.classList.remove("#e0f5ff");
    nav.classList.add("mt-4");
  }
}
