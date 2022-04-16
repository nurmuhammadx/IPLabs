const prev = document.getElementById('btn-prev'),
      next = document.getElementById('btn-next'),
      slides = document.querySelectorAll('.slide'),
      dots = document.querySelectorAll('.dot');

let index = 0;

const activeSlide = n => {
    for(slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}

const activeDot = n => {
    for(let dot of dots) {
        dot.classList.remove('active');
    }
    dots[n].classList.add('active');
}

const activeFunc = (ind) => {
    activeSlide(index);
    activeDot(index);
}

const nextSlide = () => {
    if(index === slides.length - 1) {
        index = 0;
        activeFunc(index);
    } else {
        index++;
        activeFunc(index);
    }
}

const prevSlide = () => {
    if(index === 0) {
        index = slides.length - 1;
        activeFunc(index);
    } else {
        index--;
        activeFunc(index);
    }
}



dots.forEach((item, indexDot) => {
    item.addEventListener('click', () => {
        index = indexDot;
        activeFunc(index);
    })
})

next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);

setInterval(nextSlide, 3000);