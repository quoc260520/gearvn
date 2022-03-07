var discountCodeInput = document.querySelector('.payment__container-right__form-input')
console.log(discountCodeInput)
discountCodeInput.onkeyup= function(){
    var value = discountCodeInput.value
    if(value.length > 0){
        document.querySelector('.btn__voucher--submit').style.backgroundColor = '#3DA9E2';
    }
    else {
        document.querySelector('.btn__voucher--submit').style.backgroundColor = '#C8C8C8';
    }
}