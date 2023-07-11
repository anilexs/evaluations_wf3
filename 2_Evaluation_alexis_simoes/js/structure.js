const myCarouselElement = document.querySelector('#carouselHdr')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 15000,
  touch: false
})

const button = document.querySelector('.toggle-button');
  const content = document.querySelector('.toggle-content');

  button.addEventListener('click', function() {
    content.style.display = (content.style.display === 'none') ? 'block' : 'none';
  });

function carouselCar (next, previous, car, tab){
    var i = 0;
        $(next).click(() =>{
            i++;
            if(i == tab.length){
                i = 0;
            }
            $(car).css({
                backgroundImage: "url(../img/"+tab[i]+")"
                
            })
        })
        $(previous).click(() =>{
            i--;
            if(i == -1){
                i = tab.length - 1;
            }
            $(car).css({
                backgroundImage: "url(../img/"+tab[i]+")"
                
            })
        })
}


var tab1 = [
    'vehicule1.png',
    'vehicule2.png',
    'vehicule3.png',
    'vehicule4.png'
];

var next1 = $('#next')
var previous1 = $('#previous')
var car1 = $('#car1')

carouselCar(next1, previous1, car1, tab1);

var tab2 = [
    'vehicule2.png',
    'vehicule3.png',
    'vehicule4.png',
    'vehicule1.png'
];

var next2 = $('#next2')
var previous2 = $('#previous2')
var car2 = $('#car2')

carouselCar(next2, previous2, car2, tab2);

var tab3 = [
    'vehicule3.png',
    'vehicule4.png',
    'vehicule1.png',
    'vehicule2.png'
];

var next3 = $('#next3')
var previous3 = $('#previous3')
var car3 = $('#car3')

carouselCar(next3, previous3, car3, tab3);

var tab4 = [
    'vehicule4.png',
    'vehicule1.png',
    'vehicule2.png',
    'vehicule3.png'
];

var next4 = $('#next4')
var previous4 = $('#previous4')
var car4 = $('#car4')

carouselCar(next4, previous4, car4, tab4);