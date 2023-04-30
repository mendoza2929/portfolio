window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0 );
});

const serviceModals = document.querySelectorAll(".service-modal");
const learnmoreBtns = document.querySelectorAll(".learn-more-btn");
const modalCloseBtns = document.querySelectorAll(".modal-close-btn");

var modal = function(modalClick){
    serviceModals[modalClick].classList.add("active");
}

learnmoreBtns.forEach((learnmoreBtn, i)=>{
    learnmoreBtn.addEventListener("click",() =>{
        modal(i);
    }); 
});

modalCloseBtns.forEach((modalCloseBtn)=>{
    modalCloseBtn.addEventListener("click",()=>{
        serviceModals.forEach((modalView)=>{
            modalView.classList.remove("active");
        });
    });
})


const portfolioModals = document.querySelectorAll(".portfolio-model");
const imgCards = document.querySelectorAll(".img-card");
const portofolioCloseBtns = document.querySelectorAll(".portfolio-close-btn");

var portfolioModal = function(modalClick){
    portfolioModals[modalClick].classList.add("active");
}

imgCards.forEach((imgCard, i)=>{
   imgCard.addEventListener("click",() =>{
    portfolioModal(i);
    }); 
});

portofolioCloseBtns.forEach((portofolioCloseBtn)=>{
    portofolioCloseBtn.addEventListener("click",()=>{
        portfolioModals.forEach((portfolioModalView)=>{
            portfolioModalView.classList.remove("active");
        });
    });
})


const scrollTopBtn = document.querySelector(".scrollToTop-btn");

window.addEventListener("scroll", function(){
    scrollTopBtn.classList.toggle("active",window.scrollY > 500);
});



scrollTopBtn.addEventListener("click",() =>{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

window.addEventListener("scroll", ()=>{
    const sections =  document.querySelectorAll("section");
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        let sectionHeight = current.offsetHeight;
        let sectionTop = current.offsetTop - 50;
        let id =current.getAttribute("id");

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelectorAll(".nav-items a[href*="+id +"]").classList.add("active");
        }
        else{
            document.querySelectorAll(".nav-items a[href*="+id +"]").classList.remove("active");
        }
    });
});


const themeBtn = document.querySelector(".theme-btn");

themeBtn.addEventListener("click", ()=>{
    document.body.classList.toggle("dark-theme");
    themeBtn.classList.toggle("sun");

    localStorage.setItem("save-theme", getCurrentTheme());
    localStorage.setItem("save-icon", getCurrentIcon());

});

const getCurrentTheme = () => document.body.classList.contains("dark-theme") ? "dark" : "light";
const getCurrentIcon = () => themeBtn.classList.contains("sun") ? "sun" : "moon";

const savedTheme = localStorage.getItem("save-theme");
const savedIcon = localStorage.getItem("save-icon");


if(savedTheme){
    document.body.classList[savedTheme === "dark" ? "add" : "remove"]("dark-theme");
    themeBtn.classList[savedIcon === "sun" ? "add" : "remove"]("sun");
}

ScrollReveal({
    reset:true,
    distance: '60px',
    duration: 2500,
    delay:100
});

ScrollReveal().reveal('.home .info h2 .section-title-01, section-title-02',{delay:500, origin: 'left'});
ScrollReveal().reveal('.home .info h3, .home .info p, .about-info .btn',{delay:500, origin: 'right'});
ScrollReveal().reveal('.home .info h3, .main',{delay:500, origin: 'left'});
ScrollReveal().reveal('.home .info, .btns',{delay:500, origin: 'bottom'});
ScrollReveal().reveal('.media-icons i, .contact-left li',{delay:500, origin: 'left', interval:200});
ScrollReveal().reveal('.home-img, .about-img',{delay:500, origin: 'bottom',});
ScrollReveal().reveal('.about .description, .copy-right',{delay:500, origin: 'right',});
ScrollReveal().reveal('.about .professional-list li',{delay:500, origin: 'right', interval:200});
ScrollReveal().reveal('.skills-description, .services-description, .contact-card, .contact-left h2',{delay:500, origin: 'left'});
ScrollReveal().reveal('.experience-card, .service-card, .education, .portfolio .img-card',{delay:500, origin: 'bottom', interval:200});
ScrollReveal().reveal('footer .group',{delay:400, origin: 'top', interval:200});


