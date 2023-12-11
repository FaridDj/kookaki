const root = document.documentElement;

// Écouteur d'événement pour le scroll
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
});

// Fonction pour la translation horizontale au scroll
function donneX() {
  var donneX = document.querySelectorAll(".big_cloud");
  for (var i = 0; i < donneX.length; i++) {
    var windowWidth = window.innerWidth;
    var elementLeft = donneX[i].getBoundingClientRect().bottom;
    var elementVisible = 700;

    if (elementLeft < windowWidth - elementVisible) {
      donneX[i].classList.add("active");
    } else {
      donneX[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", donneX);
donneX();

// Arriver du titre H2
function reveal() {
  var reveals = document.querySelectorAll(".FadeH");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
reveal();

//Menu burger
var navigation = document.getElementById("site-navigation");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  navigation.classList.add("active");
}
function closeNav() {
  navigation.classList.remove("active");
}
