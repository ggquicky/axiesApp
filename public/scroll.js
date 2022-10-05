const leftBtn = document.querySelector('.leftBtn')
const rightBtn = document.querySelector('.rightBtn')
const carruselItems = document.querySelector('.carruselItems')


rightBtn.addEventListener('click', function(e){
    carruselItems.scrollLeft += 930;
});
leftBtn.addEventListener('click', function(e){
    carruselItems.scrollLeft -= 930;
});
