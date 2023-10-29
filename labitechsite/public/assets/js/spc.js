const navbar = document.getElementById('MyNavbar');
const topnavbar = document.getElementById('topnavbar');
const billybox = document.getElementById('billybox')

window.addEventListener("scroll", function () {
    if (window.scrollY > 10) {
      billybox.classList.add('d-block')
      billybox.classList.remove('d-none');
      navbar.style.backgroundColor = "#5B5B5B";
      navbar.style.minHeight = "7vh"
      navbar.classList.add("fixed-top");
    }
    else{
       navbar.style.backgroundColor =  "rgba(0, 0, 0, .6)";
       navbar.style.minHeight = "15vh"
       navbar.classList.remove("fixed-top");
       billybox.classList.remove('d-block');
       billybox.classList.add('d-none');
    }
  });
