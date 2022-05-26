let numberImage = 1;
const pathImages = "/game/images/game/";

function generateImage() {
    let image = pathImages + numberImage + ".png";
    $('#game-background').css("background-image", 'url('+image+')');
}


$(function(){
    generateImage();
});