let numberImage = 1;
const pathImages = "/allLabs/images/game/";
let res = 0;

function generateImage() {
    let image = pathImages + numberImage + ".png";
    $('#game-background').css("background-image", 'url('+image+')');
}

function next() {

}


// $('.open-popup').click(function(e) {
//     e.preventDefault();
//     $('.popup-bg').fadeIn(800);
//     $('html').addClass('no-scroll');
// });
//
// $('.close-popup').click(function() {
//     $('.popup-bg').fadeOut(800);
//     $('html').removeClass('no-scroll');
// });
//
// function nextLevel(e) {
//     if(numberImage <= 3) {
//         if(numberImage === 1) {
//             const red_ball = document.querySelector('#number1').value;
//             const green_ball = document.querySelector('#number2').value;
//             const blue_ball = document.querySelector('#number3').value;
//             const yellow_ball = document.querySelector('#number4').value;
//             const orange_ball = document.querySelector('#number5').value;
//             let num1 =  Number(red_ball);
//             let num2 = Number(green_ball);
//             let num3 = Number(blue_ball);
//             let num4 = Number(yellow_ball);
//             let num5 = Number(orange_ball);
//             res = num1 + num2 + num3 + num4 + num5;
//             if(res === 10){
//                 e.preventDefault();
//                 $('.popup-bg').fadeIn(800);
//                 $('html').addClass('no-scroll');
//             }
//             else
//                 alert('false');
//
//         }
//         if(numberImage === 2) {
//             const red_ball2 = document.querySelector('#number1').value;
//             const green_ball2 = document.querySelector('#number2').value;
//             const blue_ball2 = document.querySelector('#number3').value;
//             const yellow_ball2 = document.querySelector('#number4').value;
//             const orange_ball2 = document.querySelector('#number5').value;
//             let num1 =  Number(red_ball2);
//             let num2 = Number(green_ball2);
//             let num3 = Number(blue_ball2);
//             let num4 = Number(yellow_ball2);
//             let num5 = Number(orange_ball2);
//             let res = num1 + num2 + num3 + num4 + num5;
//             if(res === 8)
//                 alert('true');
//             else
//                 alert('false');
//         }
//         if(numberImage === 3) {
//             const red_ball3 = document.querySelector('#number1').value;
//             const green_ball3 = document.querySelector('#number2').value;
//             const blue_ball3 = document.querySelector('#number3').value;
//             const yellow_ball3 = document.querySelector('#number4').value;
//             const orange_ball3 = document.querySelector('#number5').value;
//             let num1 =  Number(red_ball3);
//             let num2 = Number(green_ball3);
//             let num3 = Number(blue_ball3);
//             let num4 = Number(yellow_ball3);
//             let num5 = Number(orange_ball3);
//             let res = num1 + num2 + num3 + num4 + num5;
//             if(res === 12)
//                 alert('true');
//             else
//                 alert('false');
//         }
//         numberImage++;
//         generateImage();
//         const red_ball = document.querySelector('#number1').value = "";
//         const green_ball = document.querySelector('#number2').value = "";
//         const blue_ball = document.querySelector('#number3').value = "";
//         const yellow_ball = document.querySelector('#number4').value = "";
//         const orange_ball = document.querySelector('#number5').value = "";
//     } else{
//         alert('game over');
//     }
// }
//
// // if(srcImg === image) {
// //     function check() {
// //         const red_ball = document.querySelector('#number1').value;
// //         const green_ball = document.querySelector('#number2').value;
// //         const blue_ball = document.querySelector('#number3').value;
// //         const yellow_ball = document.querySelector('#number4').value;
// //         const orange_ball = document.querySelector('#number5').value;
// //         let res = red_ball + green_ball + blue_ball + yellow_ball + orange_ball;
// //         let num1 =  red_ball;
// //         let num2 = green_ball
// //         let num3 = blue_ball
// //         let num4 = yellow_ball
// //         let num5 = orange_ball
// //         if(num1 === '2')
// //             alert('true');
// //     }
// // }



$(function(){
    generateImage();

});





