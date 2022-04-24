$(function() {

    let exits = ['fadeOut', 'fadeOutDown', 'fadeOutUpBig', 'bounceOut', 'bounceOutDown', 'hinge',
        'bounceOutUp', 'bounceOutLeft', 'rotateOut', 'rotateOutUpLeft', 'lightSpeedOut', 'rollOut'];

    let entrances = ['fadeIn', 'fadeInDown', 'fadeInRight', 'bounceIn', 'bounceInRight', 'rotateIn',
        'rotateInDownLeft', 'lightSpeedIn', 'rollIn', 'bounceInDown' ];

    let photos = $('#photos'),
        ignoreClicks = false;

    $('.arrow').click(function(e, simulated){
        if(ignoreClicks){
            // если нажатия на стрелки отслеживать не надо
            e.stopImmediatePropagation();
            return false;
        }

        // Otherwise allo this click to proceed,
        // but raise the ignoreClicks flag

        ignoreClicks = true;

        if(!simulated){
            // если произощло нажатие на кнопку,
            // останавливаем автоматическую смену картинок
            clearInterval(slideshow);
        }
    });

    // нажатия на стрелку следующего изображения
    $('.arrow.next').click(function(e){
        e.preventDefault();
        let elem = $('#photos li:last');

        // назначаем случайную анимацию
        elem.addClass('animated')
            .addClass( exits[Math.floor(exits.length*Math.random())] );

        setTimeout(function(){

            // убираем класс анимации
            elem.attr('class','').prependTo(photos);

            // анимация закончилась
            // позволяем нажатия на кнопки:
            ignoreClicks = false;

        },1000);
    });

    // нажатия на стрелку предыдущего фото
    $('.arrow.previous').click(function(e){
        e.preventDefault();
        let elem = $('#photos li:first');

        // передвигаем картинку вверх
        // и назначаем анимацию
        elem.appendTo(photos)
            .addClass('animated')
            .addClass( entrances[Math.floor(entrances.length*Math.random())] );

        setTimeout(function(){
            // убираем класс
            elem.attr('class','');

            ignoreClicks = false;
        },1000);
    });

    // автоматическая смена картинок
    let slideshow = setInterval(function(){
        $('.arrow.next').trigger('click',[true]);
    }, 1500);

});
