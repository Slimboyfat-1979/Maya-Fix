const CAROUSELTIMER = 4000;
const navigation = document.getElementById('navbar');
document.addEventListener('DOMContentLoaded', runAccordion);

window.addEventListener('scroll', function(evt){
    if(window.scrollY > navigation.offsetHeight) {
        navigation.classList.add('active');
    }else{
        navigation.classList.remove('active');
    }
})


//Find Out Whether the index page is being shown or not. If it isn't
//then make the navbar static and change the background to black.
const isItIndex = window.location.pathname.split('/').pop();
if(isItIndex === 'index.php' || isItIndex === '') {
    console.log("We are at the home page!")
}else{
    navigation.style.position = 'static';
    navigation.style.backgroundColor = 'black';
}



//Carousel Slider
const carousel = document.getElementById('carousel');

const carouselImages = document.querySelectorAll('#carousel .img');
carouselImages.forEach((image, idx) => {
    image.style.transform = `translateX(${idx * carousel.offsetWidth}px)`;
})

let currentImage = 0;
setInterval(() => {
    if(currentImage === carouselImages.length) {
        currentImage = 0;
    }else{
        carouselImages.forEach((image, idx) => {
            image.style.transform = `translateX(${(idx - currentImage) * carousel.offsetWidth}px)`
        })
        currentImage++;
    }
}, CAROUSELTIMER)

//Accordion

function runAccordion() {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const title = item.querySelector('.accordion-title');
        const content = item.querySelector('.accordion-content');

        title.addEventListener('click', function(){
           content.classList.toggle('active');
        })
    })
}




