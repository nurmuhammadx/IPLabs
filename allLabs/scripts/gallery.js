let numberImage = 1;
let tmpAnimation = 0;
let clickCount = 1;
const countImage = 6;
const speed = 1500;
const pathImages = "../images/gallery/";

// функция для генерации изображения 
function generateImage() {
    let image = pathImages + numberImage + ".jpg";
    $('#mainImage').css("background-image", 'url('+image+')');
}

// функция смены изображения
function changeImage() {
    let image = pathImages + numberImage + ".jpg";
    $('#mainImage').fadeOut(speed, function() {
        $(this).css("background-image", 'url('+image+')');
        $(this).fadeIn(speed);
    });
}

// функция для оборота против часовой
function leftRotate(degreeS) {
    const element = $("#mainImage");
    $({degrees: tmpAnimation + degreeS}).animate({degrees: tmpAnimation}, {
        duration: 3000,
        step: function(now) {
            element.css({transform: 'rotate(' + now + 'deg)'});
        }
    });
}

// функция для оборота по часовой
function rightRotate(degreeS) {
    const element = $("#mainImage");
    $({degrees: tmpAnimation - degreeS}).animate({degrees: tmpAnimation}, {
        duration: 3000,
        step: function(now) {
            element.css({transform: 'rotate(' + now + 'deg)'});
        }
    });
}

// левый клик
function leftClickImage() {
     if(numberImage > 1) {
         numberImage--;
     } else {
         numberImage = countImage;
     }
     if(clickCount === 1 || clickCount === 4) {
        rightRotate(180);
     }
     else if(clickCount === 2 || clickCount === 5) {
        leftRotate(270);
     }
     else if(clickCount === 3) {
        rightRotate(360);
     }
     else if(clickCount === 6) {
         rightRotate(360);
         clickCount = 0;
     }
     changeImage();
     clickCount++;
}

// правый клик
function rightClickImage() {
    if(numberImage < countImage) {
        numberImage++;
    } else {
        numberImage = 1; 
    }
    if(clickCount === 1 || clickCount === 4) {
        rightRotate(180);
    }
     else if(clickCount === 2 || clickCount === 5) {
        leftRotate(270);
     }
     else if(clickCount === 3) {
        rightRotate(360);
     }
     else if(clickCount === 6) {
        rightRotate(360);
        clickCount = 0;
    }
    changeImage();
     clickCount++;
}

$(function(){
    generateImage();
});