
// Hamburger Menu

const mainMenu=document.querySelector('.mainMenu');
const closeMenu=document.querySelector('.closeMenu');
const openMenu=document.querySelector('.openMenu');

openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);


function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}

function close(){
    mainMenu.style.top = '-100%';
}


// backToTopButton

const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
              backToTopButton.style.display = "block";
    
  }
  else { // Hide backToTopButton
        backToTopButton.style.display = "none";
      
    
  }
}


// login

