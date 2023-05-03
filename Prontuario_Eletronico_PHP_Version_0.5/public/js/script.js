const burger = document.getElementById('burger');

const menu = document.getElementById('menu_itens');

burger.addEventListener('click', click)

function click(){
    if(menu.style.display == 'none'){
        menu.style.display = 'flex'
    }else{
        menu.style.display = 'none'
    }
}