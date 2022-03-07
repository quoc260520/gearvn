const productImg = document.querySelector('.product__img')
const productImgSlide = document.querySelector('.product__img-slide')

function openModal() {
  document.querySelector('.modal_product-slider-img').classList.remove('close')
  document.querySelector('.modal_product-slider-img').classList.add('open')
  document.querySelector('.modal_product-slider-img__modal-body').style.display = 'flex'
  document.querySelector('.modal_product-slider-img__modal-info').style.display = 'none'
 
}
function openModal2() {
  document.querySelector('.modal_product-slider-img').classList.remove('close')
  document.querySelector('.modal_product-slider-img').classList.add('open')
  document.querySelector('.modal_product-slider-img__modal-body').style.display = 'none'
  document.querySelector('.modal_product-slider-img__modal-info').style.display = 'flex'
}
productImgSlide.onclick = function(){ openModal() } 
productImg.onclick = function(){ openModal() } 
const btnClose = document.querySelector('.modal_product-slider-img__modal-close')
btnClose.onclick = function() {
  document.querySelector('.modal_product-slider-img').classList.remove('open')
  document.querySelector('.modal_product-slider-img').classList.add('close')
}
var slideImgindex = 0;
var positionXImg = 0;
showSlideImg();

function showSlideImg() {
  var modalSlider = document.querySelector(".modal__body-slider-wrap")
  var slidesItems = document.querySelectorAll(".modal__body-slider-img");
  var imgItems = document.querySelectorAll(".modal__body-item-img")
  const iconLeft = document.querySelector('.modal__icon-left')
  const iconRight = document.querySelector('.modal__icon-right')
  var slidesItemLength = slidesItems.length;console.log(slidesItemLength)
 
  iconLeft.onclick = function() { 
    
     changeSlide(-1)
  }

  iconRight.onclick = function() { 
      changeSlide(1)
  }

  function changeSlide(number) {
    var slidesItemWidth = slidesItems[0].offsetWidth; console.log(slidesItemWidth)
    if(number === 1) {
      if (slideImgindex >= slidesItemLength -1 ) {
          return 0
      }
      else{
          positionXImg = positionXImg - slidesItemWidth 
          modalSlider.style.transform=`translateX(${positionXImg}px)`
          console.log(positionXImg)
          slideImgindex++;
      }     
    }
    else if(number === -1) {
      if(slideImgindex === 0){
         return 0
      }
      else if(slideImgindex > 0){
          positionXImg = positionXImg + slidesItemWidth 
          modalSlider.style.transform=`translateX(${positionXImg}px)`
          console.log(positionXImg)
          slideImgindex--;
      }

    }
    imgItems.forEach(function(el){
      el.classList.remove('border')
    })
   imgItems[slideImgindex].classList.add('border')

  }
  imgItems.forEach(function(item,index) { 
    item.onclick = function(e) {
      var slidesItemWidth = slidesItems[0].offsetWidth; console.log(slidesItemWidth)
        imgItems.forEach(function(el){
          el.classList.remove('border')
        })
        slideImgindex = index 
        positionXImg = -1 *slidesItemWidth * slideImgindex
        modalSlider.style.transform=`translateX(${positionXImg}px)`
        item.classList.add('border')
    }
})
 
}





//Open 
const btn = document.querySelector('.content__product-detail__container-info__left-btn')
btn.onclick = function(e) {
  document.querySelector('.content__product-detail__container-info__left-btn--open').classList.add('close')
  document.querySelector('.content__product-detail__container-info__left-over__lay').classList.add('close')
  document.querySelector('.content__product-detail__container-info__left-wrap').style.maxHeight="100%"
}

const btnXemChiTiet = document.querySelector('.content__product-detail__container-info__btn')
btnXemChiTiet.onclick = function(e) {
  openModal2()
}