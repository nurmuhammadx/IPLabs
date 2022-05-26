// let randomXOrY = function (size) {
//     return Math.floor(Math.random() * size)
// }
//
// let randomXOrY2 = function (size) {
//     return Math.floor(Math.random() * size)
// }
//
// let width = 300 //ширина страницы вашего сайта
// let height = 300 //высота страницы вашего сайта
//
// let target = {
//     x:randomXOrY(width),
//     y:randomXOrY(height)
// }
//
// let target2 = {
//     x:randomXOrY2(width),
//     y:randomXOrY2(height)
// }
//
// let image = '<img src = "/game/images/assets/red-ball.png" alt="">'//ссылка на вашу картинку
// let imaged = '<img src = "/game/images/assets/green-ball.png" alt="">'
// let imageElement = $(image)
// imageElement.css({
//     position:"absolute",
//     width: "60px",
//     height: "60px",
//     left:target.x,
//     top:target.y
// })
// let imageElement1 = $(imaged)
// imageElement1.css({
//     position:"absolute",
//     width: "60px",
//     height: "60px",
//     left:target2.x,
//     top:target2.y
// })
// $(".game-back").append(imageElement, imageElement1);

// function getRandomInt(min, max) {
//     min = Math.ceil(min);
//     max = Math.floor(max);
//     return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
// }
//
// let res = getRandomInt(1, 6);
//
// let ball = document.getElementById("ball"),
//     s = "";
// for (let i = 1; i <= res; ++i) {
//     s += `<img src="images/red/${i}.png" alt="" class="img${i}">`;
// }
// ball.innerHTML = s;