let menu_burger_icon = document.querySelector('.menu_burger_icon')
let menu_burger_items = document.querySelector('.menu_burger_items')

menu_burger_icon.addEventListener('click',function() {

    menu_burger_items.classList.toggle('hidden_div')
})