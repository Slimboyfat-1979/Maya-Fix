const CAROUSELTIMER = 4000;
const navigation = document.getElementById('navbar');

document.addEventListener('DOMContentLoaded', () => {
    runAccordion();
    stopVideo();
    runMenu();
});

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
    console.log(accordionItems);
    accordionItems.forEach(item => {
        item.querySelector('.accordion-title').addEventListener('click', function() {
            const content = this.nextElementSibling;
            content.classList.toggle('visible');
            setTimeout(() => {
                content.classList.toggle('active')
            }, 10)
        })
    })
}

function stopVideo(){
    if(window.innerWidth <=480) {
        document.querySelector('#hero video').removeAttribute('autoplay');
    }
}

const menuItems = document.querySelector('.menu-items ul');
function toggleMenuItems() {
    menuItems.style.transform = 'translateX(-200%)';
    if(document.querySelector('.menu').classList.contains('open')) {
        setTimeout(() => {
            menuItems.style.transform = 'translateX(0)';
        }, 250)
    }
}

function runMenu() {
    const navContainerMenu = document.querySelectorAll('.nav-container ul li a');
    const navContainerMobile = document.querySelector('.menu .menu-items ul li a');
    const url = window.location.href;
    const index = url.substring(url.lastIndexOf('/') + 1);
    navContainerMenu.forEach((item) => {
        console.log(item.getAttribute('href'), index);

        if(item.getAttribute('href') === index) {
            item.classList.add('active');
        }
    })

}

//Responsive Stuff
const menuBtn = document.querySelector('.hamburger');

menuBtn.addEventListener('click', () => {
    document.querySelector('.menu').classList.toggle('open');
    toggleMenuItems();
})









