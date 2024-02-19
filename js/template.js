const circleTriangles = [ '&#9650','&#9654','&#9660','&#9664'];
document.addEventListener('DOMContentLoaded', () => {
    const a = document.querySelector('section.logo');
    let content = a.innerText;
    a.innerHTML  = '';
    /**/   
    function typewriteName(index) {
      a.innerHTML += content[index];
      if (index < content.length - 1) {
        setTimeout( () => {
          typewriteName(index + 1);
        }, 50); 
      }
    }
  
    typewriteName(0);

    /**/
    const currentPage = window.location.href;
    
    var menuLinks = document.querySelectorAll("nav ul li");
    liArr = [];

    for( let i=0; i< menuLinks.length; i++){
        liArr.push(menuLinks[i]);
    }
    switch(currentPage){
        case "http://localhost/devcaiorodrig/": liArr[0].classList.add("current-page");
        break;
        case "http://localhost/devcaiorodrig/contato/": liArr[2].classList.add("current-page");
        break;
        default: liArr[1].classList.add("current-page");
    }

    /**/
    var backToTopBtn = document.getElementById("backToTopBtn");
    const triangle = document.querySelector("p.col-6.triangle");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 400) {
            backToTopBtn.style.display = "block";
            
 
        } else {
            backToTopBtn.style.display = "none";
        }
    });

    backToTopBtn.addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: "smooth" }); 
    });

    }
    
);





