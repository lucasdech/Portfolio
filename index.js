
// animation pour le menu burguer

let menu_burger_icon = document.querySelector('.menu_burger_icon')
let menu_burger_items = document.querySelector('.menu_burger_items')
let menu_burger = document.querySelector('#menu_burger')

menu_burger_icon.addEventListener('click',function() {

    menu_burger.classList.toggle('background_burguer')
    menu_burger_items.classList.toggle('hidden_div')
    menu_burger_items.classList.add('menu_burger_bg')
})

let burger_status = document.querySelector('#burger_status')
let burger_presentation = document.querySelector('#burger_presentation')
let burger_projets = document.querySelector('#burger_projets')


burger_status.addEventListener('click', function () {
    menu_burger.classList.toggle('background_burguer')
    menu_burger_items.classList.toggle('hidden_div')
    
})

burger_presentation.addEventListener('click', function () {
    menu_burger.classList.toggle('background_burguer')
    menu_burger_items.classList.toggle('hidden_div')
    
})
burger_projets.addEventListener('click', function () {
    menu_burger.classList.toggle('background_burguer')
    menu_burger_items.classList.toggle('hidden_div')
    
})


// pour la nav bar 

let navbar = document.querySelector('#header')

    window.addEventListener('scroll', function () {

        if ((this.window.scrollY) > 240) {
            navbar.classList.add("herder_scrol")
        } else if ((this.window.scrollY) < 240) {
            navbar.classList.remove("herder_scrol")
        }

    })

// pareil en responsive


let menuburger = document.querySelector('#scroll_burguer')

    window.addEventListener('scroll', function () {

        if ((this.window.scrollY) > 222) {
            menuburger.classList.add("header_scroll_burguer")
        } else if ((this.window.scrollY) < 222) {
            menuburger.classList.remove("header_scroll_burguer")
        }

    })


// pour le mail 


window.onload = function() {

                emailjs.init({  
                    publicKey: "axGHXJxZTzNmxwZFq",
                    });
    
            document.getElementById('contact-form').addEventListener('submit', function(event) {

                event.preventDefault();


                
                // these IDs from the previous steps
                emailjs.sendForm('service_zney9zb', 'template_3fqpmsc', this)
                    .then(() => {
                        console.log('SUCCESS!');
                        swal("merci !", "Mail bien envoyé ! Merci", "success");
                    }, (error) => {
                        console.log('FAILED...', error);
                        swal("OUPSS !", "Erreur Lors de L'envoie du Mail !", "error");

                    });
            });
        }

    let btnSubmit = document.querySelector('#submitBTN')
    btnSubmit.addEventListener('submit', function(e) {
        e.preventDefault()
        console.log('stop')
    })




// animation du skate de la nav bar 

gsap.registerPlugin(ScrollTrigger);

 gsap.to("#animation", {

    scrollTrigger: {
        trigger: "#header",
        start: "top",
        endTrigger : ".end",
        end: "bottom",
        scrub: true,
        toggleActions: "restart pause reverse pause"
    },
    x: 1800,
    duration:10
 },
 );



const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', ()=> {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen=true;
    }
    else {
        menuBtn.classList.remove('open');
        menuOpen=false;
    }
})