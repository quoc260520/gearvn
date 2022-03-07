@extends('clients.payment.payment_master')
@section('payment')
<div class="payment__container-left">
    <div class="payment__container-left-wrap">
        <h1 class="payment__container-left__heading--top">
            GEARVN.COM
        </h1>
        <div class="payment__container-left__path">
            <a href="" class="payment__container-left__path-link">Giỏ hàng</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="" class="payment__container-left__path-link">Thông tin thanh toán</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="" class="payment__container-left__path-link">Phương thức thanh toán</a>
            
        </div>
        <h2 class="payment__container-left__heading">Thông tin giao hàng</h2>
        <div class="payment__container-left__form">
            <input type="text" placeholder="Họ và tên" class="payment__container-left__input-name">
        </div>
        <div class="payment__container-left__form">
            <div class="payment__container-left__input-info">
                <input type="text" placeholder="Email" class="payment__container-left__input-email">
                <input type="text" placeholder="Số điện thoại" class="payment__container-left__input-phone">
            </div>
        </div>
       
        <div class="payment__container-left__form">
            <input type="text" placeholder="Địa chỉ" class="payment__container-left__input-addres">
        </div>
      
        <div class="payment__container-left__form">
            <div class="payment__container-left__select-info">
                <select name="" id="" class="payment__container-left__select-conscious">
                    <span>Chọn tỉnh / thành</span> 
                    <option value=""></option>
                </select>
                <select name="" id="" class="payment__container-left__select-district">
                 <span>Chọn quận / huyện</span> 
                 <option value=""></option>
             </select>
             </div>
        </div>
     
        <div class="payment__container-left__form">
            <div class="payment__container-left__btn-wrap">
                <a href="{{ route('cart') }}" class="payment__container-left__link--cart">Giỏ hàng</a>
                <button class="btn btn-payment">Tiếp tục đến phương thức thanh toán</button>
              </div>
        </div>
    </div>
</div>
@endsection