let humberger = document.querySelector(".humberger");
let nav = document.querySelector("nav");
let container = document.querySelector(".container");

humberger.onclick = function () {
  humberger.classList.toggle("active");
  nav.classList.toggle("active");
  container.classList.toggle("active");
};
