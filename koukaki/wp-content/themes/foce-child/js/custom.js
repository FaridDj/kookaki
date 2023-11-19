const root = document.documentElement;

window.addEventListener("scroll", () => {
  var vertical = -1;
  setInterval(function () {
    if (window.scrollY != vertical) {
      vertical = window.scrollY;
      root.style.setProperty("--rotate", "2s");
    } else {
      root.style.setProperty("--rotate", "15s");
    }
  }, 500);

  // On bouge les 2 nuages en fonction du scroll
  posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
  if (posX <= 0 && posX > -400) {
    root.style.setProperty("--posX", posX + "px");
  }
});
