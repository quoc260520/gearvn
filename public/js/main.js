//slide banner

$(document).ready(function(){
  $('.banner__sliders').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 3000,
    // infinite: true,
    // prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
    // nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
  });
});

//Show and close modal form

const btnRegister = document.querySelector('.btn-register-js')
const btnLogin = document.querySelector('.btn-login-js')
const btnForgotPw = document.querySelector('.btn-forgot-pw-js')
const modal =  document.querySelector('.modal')
const btnCloses = document.querySelectorAll('.btn-close-js')
const btnBackLogins = document.querySelectorAll('.modal__body-link-login')
const btnBackRegister = document.querySelector('.modal__body-link-register')

if(btnRegister || btnLogin){
       btnRegister.onclick = function() {
              modal.style.display = 'flex'
              document.querySelector('.modal__body-login.modal__body-form').classList.add('close')
             
               } 

       btnLogin.onclick = function () {
              modal.style.display = 'flex'
              document.querySelector('.modal__body-register.modal__body-form').classList.add('close')
                } 
       btnForgotPw.onclick = function () {
        modal.style.display = 'flex'
        document.querySelector('.modal__body-forgot-password.modal__body-form').classList.remove('close')
        document.querySelector('.modal__body-register.modal__body-form').classList.add('close')
        document.querySelector('.modal__body-login.modal__body-form').classList.add('close')
       
       }
      
       for( const btnClose of btnCloses){
        btnClose.onclick=function (){
        modal.style.display = "none"
        document.querySelector('.modal__body-forgot-password.modal__body-form').classList.add('close')
        document.querySelector('.modal__body-login.modal__body-form').classList.remove('close')
        document.querySelector('.modal__body-register.modal__body-form').classList.remove('close')
          }
   }
      btnBackRegister.onclick = function (){
        modal.style.display = 'flex'
        document.querySelector('.modal__body-login.modal__body-form').classList.add('close')
        document.querySelector('.modal__body-register.modal__body-form').classList.remove('close')

      }

      for( const btnBackLogin of btnBackLogins){
        btnBackLogin.onclick=function (){
        modal.style.display = "flex"
        document.querySelector('.modal__body-forgot-password.modal__body-form').classList.add('close')
        document.querySelector('.modal__body-login.modal__body-form').classList.remove('close')
        document.querySelector('.modal__body-register.modal__body-form').classList.add('close')
      }
   }

}
// // Hover category
const sliderLinks = document.querySelectorAll('.content__slider-link')
const contentPopup = document.querySelector(".content-popup")
     for(const sliderItem of sliderLinks){
      sliderItem.onmouseover = function() {
                  contentPopup.style.display='flex'
       }
      sliderItem.onmouseout = function() {
                 contentPopup.style.display='none'
        }
      contentPopup.onmouseover = function() {
                 this.style.display='flex'
       }
       contentPopup.onmouseout = function() {
                this.style.display='none'
       }

 
  }



//Slide Content Top

var slideContentIndex = 0;
var positionXContent = 0;
// showSlide();

function showSlide() {
  var contentSlide = document.querySelector(".content__slider-top-active")
  var slidesItems = document.querySelectorAll(".content__slider-top-active .content__slider-top__list-item-slider");
  var btnLeft = document.querySelector(".content__button-left")
  var btnRight = document.querySelector(".content__button-right")
  var slidesItemLength = slidesItems.length;
  var slidesItemWidth = slidesItems[0].offsetWidth
 
  btnLeft.onclick = function() { 
    
     changeSlide(-1)
  }

  btnRight.onclick = function() { 
      changeSlide(1)
  }

  function changeSlide(number) {
    if(number === 1) {
      positionXContent=positionXContent - slidesItemWidth 
      contentSlide.style.transform=`translateX(${positionXContent}px)`
      slideContentIndex++;
      if (slideContentIndex >= slidesItemLength) {
        slideContentIndex = 0
        positionXContent = 0
         contentSlide.style.transition=' transform 0.05s ease'
        contentSlide.style.transform=`translateX(${positionXContent}px)`
       
      }

           
    }
    else if(number === -1) {
      if(slideContentIndex === 0){
        positionXContent = 0 - (slidesItemLength - 1) * slidesItemWidth
        contentSlide.style.transition=' transform 0.1s ease'
        contentSlide.style.transform=`translateX(${positionXContent}px)`
        slideContentIndex = slidesItemLength - 1
      }
      else if(slideContentIndex > 0){
        positionXContent=positionXContent + slidesItemWidth 
        contentSlide.style.transition=' transform 0.15s ease'
        contentSlide.style.transform=`translateX(${positionXContent}px)`
        slideContentIndex--;
      }
      
      if (slideContentIndex < 0) {
        slideContentIndex = slidesItemLength
        positionXContent = positionXContent +  (slidesItemLength - 1) * slidesItemWidth
      }

    }

  }
 
}

$(document).ready(function(){
  $('.content__slider-top-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    autoplay: true,
    autoplaySpeed: 3000,
    // infinite: true,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'></button>"
  });
});


//Slide content
var index = 0;
var x= 0;
showSlidesContentAuto();

function showSlidesContentAuto() {
  var contentSlide = document.querySelector(".content__slider-sale_list-product-wrap")
  var slidesItems = document.querySelectorAll(".content__slider-sale_list-product");
  var slidesItemLength = slidesItems.length;
  var slidesItemWidth = slidesItems[0].offsetWidth ;

 if (index == 0) {
    x=0
    contentSlide.style.transform=`translateX(${x}px)`
    index++
 }
 else if(index < slidesItemLength - 4){
  x = x - slidesItemWidth - 5 
  contentSlide.style.transform=`translateX(${x}px)`
  index++
}
 else if (index >= slidesItemLength - 5) {
    index = 0
    x = 0
  }
  setTimeout(showSlidesContentAuto, 5000); // Change image every 2 seconds
}

 showSlideClick();

function showSlideClick() {
  var contentSlide = document.querySelector(".content__slider-sale_list-product-wrap")
  var slidesItems = document.querySelectorAll(".content__slider-sale_list-product");
  var btnPrev = document.querySelector(".content__slider-prev")
  var btnNext = document.querySelector(".content__slider-next")
  var slidesItemLength = slidesItems.length;
  var slidesItemWidth = slidesItems[0].offsetWidth ;
 
  btnPrev.onclick = function() { 
    
     changeSlide(-1)
  }

  btnNext.onclick = function() { 
      changeSlide(1)
  }

  function changeSlide(number) {
    if(number === 1) {
      if(index < slidesItemLength - 5) {
      x = x - slidesItemWidth - 5
      contentSlide.style.transform=`translateX(${x}px)`
      index++;
      }
      else if (index >= slidesItemLength - 5) {
        index =0
        x = 0
        contentSlide.style.transition=' transform 0.1s ease'
        contentSlide.style.transform=`translateX(${x}px)`  
      }

           
    }
    else if(number === -1) {
      if(x === 0){
        x = 0 - (slidesItemLength - 5) * (slidesItemWidth + 5 )
        contentSlide.style.transition=' transform 0.1s ease'
        contentSlide.style.transform=`translateX(${x}px)`
        index = slidesItemLength - 4
      }
      else if(index > 0){
        x = x + slidesItemWidth + 5
        contentSlide.style.transition=' transform 0.15s ease'
        contentSlide.style.transform=`translateX(${x}px)`
        index--;
      }
      
      if (index < 0) {
        index = (slidesItemLength - 1)
        x = x + (slidesItemLength - 1) * slidesItemWidth
      }

    }

  }
 
}

// $(document).ready(function(){
//   $('.content__slider-sale_list-product-wrap').slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     arrows:false,
//     autoplay: true,
//     autoplaySpeed: 3000,
//     // infinite: true,
//     prevArrow:"<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
//     nextArrow:"<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
//   });
// });



//Slide content product Top
var indexTopPc = 0;
var xTopPC= 0;
showSlidesContentAutoTopPc();

function showSlidesContentAutoTopPc() {
  var contentSlide = document.querySelector(".content__product-slider")
  var slidesItems = document.querySelectorAll(".content__product-slider .content__product-item-wrap");
  var slidesItemLength = slidesItems.length;
  var slidesItemWidth = slidesItems[0].offsetWidth ;
  console.log(slidesItemWidth)

 if (indexTopPc == 0) {
    xTopPC=0
    contentSlide.style.transform=`translateX(${xTopPC}px)`
    indexTopPc++
 }
 else if(indexTopPc < slidesItemLength - 4){
  xTopPC = xTopPC - slidesItemWidth  
  contentSlide.style.transform=`translateX(${xTopPC}px)`
  indexTopPc++
}
 else if (indexTopPc >= slidesItemLength - 5) {
    indexTopPc = 0
    xTopPC = 0
  }
  setTimeout(showSlidesContentAutoTopPc, 5000); // Change image every 2 seconds
}

showSlideClickTopPc();

function showSlideClickTopPc() {
  var contentSlide = document.querySelector(".content__product-slider")
  var slidesItems = document.querySelectorAll(".content__product-slider .content__product-item-wrap");
  var btnPrev = document.querySelector(".content__product-slider-prev")
  var btnNext = document.querySelector(".content__product-slider-next")
  var slidesItemLength = slidesItems.length;
  var slidesItemWidth = slidesItems[0].offsetWidth ;
 
  btnPrev.onclick = function() { 
    
     changeSlide(-1)
  }

  btnNext.onclick = function() { 
      changeSlide(1)
  }

  function changeSlide(number) {
    if(number === 1) {
      if(index < slidesItemLength - 5) {
      x = x - slidesItemWidth 
      contentSlide.style.transform=`translateX(${x}px)`
      index++;
      }
      else if (index >= slidesItemLength - 5) {
        index =0
        x = 0
        contentSlide.style.transition=' transform 0.1s ease'
        contentSlide.style.transform=`translateX(${x}px)`  
      }

           
    }
    else if(number === -1) {
      if(x === 0){
        x = 0 - (slidesItemLength - 5) * (slidesItemWidth )
        contentSlide.style.transition=' transform 0.1s ease'
        contentSlide.style.transform=`translateX(${x}px)`
        index = slidesItemLength - 4
      }
      else if(index > 0){
        x = x + slidesItemWidth 
        contentSlide.style.transition=' transform 0.15s ease'
        contentSlide.style.transform=`translateX(${x}px)`
        index--;
      }
      
      if (index < 0) {
        index = (slidesItemLength - 1)
        x = x + (slidesItemLength - 1) * slidesItemWidth
      }

    }

  }
 
}


