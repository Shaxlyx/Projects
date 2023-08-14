let offset = 0;
const sliderLine = document.querySelector('.slider-line'); //

document.querySelector('.slider-one').addEventListener('click', function(){
    offset = 0;
    sliderLine.style.left = -offset + 'px'; //
})

document.querySelector('.slider-two').addEventListener('click', function(){
    offset = 0 + 1310;
    sliderLine.style.left = -offset + 'px';
})

document.querySelector('.slider-tree').addEventListener('click', function(){
    offset = 1310 + 1310;
    sliderLine.style.left = -offset + 'px';
})

setInterval(function() { //задаем интервал времени воспроизведение функции
    offset = offset + 1310;
    if(offset > 2620){
        offset = 0;
    }
    sliderLine.style.left = -offset + 'px';
}, 5000);

//функция смещение картинки по пикселям



