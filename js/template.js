document.addEventListener('DOMContentLoaded', () => {
    
    const btn = document.querySelectorAll('.btn-reveal');
    const card = document.querySelector('img.plan-card');
    const cardP = document.querySelector('.reveal-p');
   
    const search = document.querySelector('.search-form');
    const head = document.getElementById('t1');
    const content = "Tecnologias que impulsionam"

    const services = document.querySelector('.services');
    
    const divs = document.querySelectorAll('.animate');
    const numbs = document.querySelectorAll('.h-step');

    let page = 0;
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

        menuLinksFooter[page].classList.add("current-page");
        menuLinks[page].classList.add("current-page");

    }
    definePage();
    function typewriteName(index) {
        head.innerHTML += content[index];
        if (index < content.length - 1) {
          setTimeout( () => {
            typewriteName(index + 1);
          }, 50); 
        }
    }

    head.innerHTML = '';
    typewriteName(0);

    var backToTopBtn = document.getElementById("backToTopBtn");    
    let debounceTimeout;
    let yTotal = document.documentElement.scrollHeight;
    let onScroll = 0;

    function debounce(func, delay) {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(func, delay);
    }

    function handleScroll() {
        var y = window.scrollY;
        if (onScroll === 0){
            onScroll = 1;
            if (y > 0.3 * yTotal) {
                numbs[0].classList.add("show-animate")
                if (y > 0.45 * yTotal){ 
                    numbs[1].classList.add("show-animate");
                    if (y > 0.5 * yTotal){ 
                        numbs[2].classList.add("show-animate");
                        if (y > 0.55 * yTotal) numbs[3].classList.add("show-animate");
                    }
                }
            }
            else{
                numbs.forEach(n => {
                    n.classList.remove("show-animate");
                });
            }
            onScroll = 0;
        }
    }

    function handleScroll1() {
        if ( window.scrollY > 200){
            divs[0].classList.add("show-animate");
            divs[1].classList.add("show-animate");
            setTimeout(() =>{
                    divs[2].classList.add("show-animate");
                    divs[3].classList.add("show-animate");
            }, 1000);
            backToTopBtn.style.display = "block";
        } else backToTopBtn.style.display = "none";
    }
        

    function handleScroll2() {
        if (page === 1 && document.querySelector(".progressbar")){
 
            var alturaDoDocumento = document.documentElement.scrollHeight - window.innerHeight;
            var posicaoDeRolagem = window.scrollY ||  document.documentElement.scrollTop || document.body.scrollTop;
            var scrolledPercent = (posicaoDeRolagem / alturaDoDocumento) * 100;
            document.querySelector(".progressbar").style.width = scrolledPercent + "%";
        }       
    }

    if (page === 0){

        window.addEventListener('scroll', () => {
            handleScroll1();
            debounce(handleScroll, 0);
        
        });
    }

    if (page === 1){
        window.addEventListener('scroll', handleScroll2);        
    } 

    backToTopBtn.addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: "smooth" }); 
    });

});








