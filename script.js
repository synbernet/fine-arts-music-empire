var openBurger = document.getElementById("open-icon");
var menuList = document.querySelector(".menu-bar")
var closeIcon = document.getElementById("close-icon");

  function menuSwitching(){
            menuList.style.display ="block";
            openBurger.style.display ="none";
            closeIcon.style.display = "block";
            

  }

openBurger.addEventListener('click', menuSwitching);

function menuSwitching2(){
    menuList.style.display ="none";
    openBurger.style.display ="block";
    closeIcon.style.display = "none";
    

}

closeIcon.addEventListener('click', menuSwitching2);