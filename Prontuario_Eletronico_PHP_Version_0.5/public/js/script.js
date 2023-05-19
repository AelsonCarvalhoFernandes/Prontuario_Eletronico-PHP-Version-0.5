const menu = document.getElementById('navegacao')
const burger = document.getElementById('hamburger_mobile')

burger.addEventListener('click', ()=>{
    if(menu.style.display == 'flex'){
        menu.style.display = 'none';
        
    }else{
        menu.style.display = 'flex';
    }
})