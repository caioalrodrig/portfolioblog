document.addEventListener('DOMContentLoaded', () => {
    
    const btn = document.querySelectorAll('.btn-reveal');
    const card = document.querySelector('img.plan-card');
    const cardP = document.querySelector('.reveal-p');
   
    const search = document.querySelector('.search-form');
    const a = document.querySelector('h1.logo-p');
    let page = 0;
    

    // setTimeout( () => {
    //     const svgStd = document.querySelector('.carousel svg filter feGaussianBlur');
    //     const stddev = svgStd.getAttribute('stdDeviation');
    //     svgStd.setAttribute('stdDeviation', '0 60');
    //  }, 
    //  2000);

    // let content = a.innerText;
    // a.innerHTML  = '';
    // /**/   
    // function typewriteName(index) {
    //   a.innerHTML += content[index];
    //   if (index < content.length - 1) {
    //     setTimeout( () => {
    //       typewriteName(index + 1);
    //     }, 50); 
    //   }
    // }
  
    // typewriteName(0);

    /**/
    function definePage(){
        var currentPage = window.location.href;
        var menuLinks = document.querySelectorAll(".menu a");
        var menuLinksFooter = document.querySelectorAll('.nav-footer-menu a'); 

        switch(currentPage){
            case "http://localhost/devcaiorodrig/": 
                page = 0;
                search.style.display = 'none';
            break;
            case "http://localhost/devcaiorodrig/contato/": 
                page = 2;
            break;
            default: 
                page = 1;
        }
        console.log(menuLinks[page], menuLinks[1])


        menuLinksFooter[page].classList.add("current-page");
        menuLinks[page].classList.add("current-page");

    }
    definePage();

    /**/
    var backToTopBtn = document.getElementById("backToTopBtn");
    const triangle = document.querySelector("p.col-6.triangle");

    window.addEventListener("scroll", function() {
        if (page === 1){
            var alturaDoDocumento = document.documentElement.scrollHeight - window.innerHeight;
            var posicaoDeRolagem = window.scrollY ||  document.documentElement.scrollTop || document.body.scrollTop;
            var scrolledPercent = (posicaoDeRolagem / alturaDoDocumento) * 100;
            document.querySelector(".progressbar").style.width = scrolledPercent + "%";
        }
        if (window.scrollY > 200) {
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








