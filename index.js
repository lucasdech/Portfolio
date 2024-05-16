// animation pour le menu burguer

let menu_burger_icon = document.querySelector('.menu_burger_icon')
let menu_burger_items = document.querySelector('.menu_burger_items')
let menu_burger = document.querySelector('#menu_burger')

menu_burger_icon.addEventListener('click',function() {

    menu_burger_items.classList.toggle('hidden_div')
    menu_burger_items.classList.add('menu_burger_bg')
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

// test pour le mail 


window.onload = function() {

                emailjs.init({  
                    publicKey: "axGHXJxZTzNmxwZFq",
                    });
    
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();


                        console.log('ppl')
                
                // these IDs from the previous steps
                emailjs.sendForm('service_zney9zb', 'template_3fqpmsc', this)
                    .then(() => {
                        console.log('SUCCESS!');
                    }, (error) => {
                        console.log('FAILED...', error);
                    });
            });
        }


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
    duration:3
 });


