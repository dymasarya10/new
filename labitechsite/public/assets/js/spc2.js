const navbar = document.getElementById('MyNavbar');
const topnavbar = document.getElementById('topnavbar');

window.addEventListener("scroll", function () {
    if (window.scrollY > 10) {
      navbar.style.backgroundColor = "#5B5B5B";
      navbar.style.minHeight = "7vh"
      navbar.classList.add("sticky-top");
    }
    else{
       navbar.style.backgroundColor =  "rgba(0, 0, 0, .6)";
       navbar.style.minHeight = "15vh"
       navbar.classList.remove("fixed-top");
    }
  });