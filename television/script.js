// let slideIndex = 1;
// showSlides(slideIndex);
// activeDots(slideIndex);
// function plusSlides(n) {
//     showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// let activeDots = n => {
//     for (dot of dots) {
//         dot.classList.remove('active');
//     }
//     dots[n].classList.add('active');
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("slide");
//     dots = document.getElementsByClassName("dot");

//     if (n > slides.length) {
//         slideIndex = 1
//     }
//     if (n < 1) {
//         slideIndex = slides.length
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";

//     }
//     slides[slideIndex - 1].style.display = "block";
// }











let next = document.getElementById('btn-next');
    prev = document.getElementById('btn-prev');
    slides = document.querySelectorAll('.slide'),
    dots = document.getElementsByClassName('dot');

let index = 0;

let activeSlide = n => {
    for (slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}

let activeDot = n => {
    for (dot of dots) {
        dot.classList.remove('active');
    }
    dots[n].classList.add('active');
}

let prepareCurrentSlide = ind => {
    activeSlide(ind);
    activeDot(ind)
}


let nextSlide = () => {
    if (index == slides.length - 1) {
        index = 0;
        prepareCurrentSlide(index);
    } else {
        index++;
        prepareCurrentSlide(index);
    }
}


let prevSlide = () => {
    if (index == 0) {
        index = slides.length - 1;
        prepareCurrentSlide(index);
    } else {
        index--;
        prepareCurrentSlide(index);
    }
}


next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);





