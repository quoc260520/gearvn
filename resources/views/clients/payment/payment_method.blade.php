@extends('clients.payment.payment_master')
@section('payment_method')
<div class="payment__container-left">
    <div class="payment_method__container-left-wrap">
        @if(session('msg'))
          <p class="success">{{ session('msg') }} <a href="{{ route('index') }}" class="link" style="color:#155724;margin-left:3px;">Quay lại trang chủ</a></p>
        @endif
        @if(session('error'))
          <p class="error">{{ session('error') }} <a href="{{ route('index.cart') }}" class="link" style="color:#721c24;margin-left:3px;">Quay lại giỏ hàng</a></p>
        @endif
        <h1 class="payment__container-left__heading--top">
            GEARVN.COM
        </h1>
        <div class="payment__container-left__path">
            <a href="{{ route('index.cart') }}" class="payment__container-left__path-link payment__container-left__path-link--blue">Giỏ hàng</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="{{ route('payment') }}" class="payment__container-left__path-link payment__container-left__path-link--blue">Thông tin thanh toán</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="" class="payment__container-left__path-link">Phương thức thanh toán</a>
            
        </div>
        <h2 class="payment__container-left__heading">Phương thức vận chuyển</h2>
        <div class="payment_method__container-left__form mb40">
           <div class="payment_method__container-left__form-method--ship">
            <label class="select1">
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
            </label>
            <span class="payment_method__container-left__form-method--ship-text">Giao hàng tận nhà</span>
           </div> 
           <div class="payment_method__container-left__form-price--ship">
               0 <span>đ</span>
           </div>
        </div>
        <h2 class="payment__container-left__heading">Phương thức thanh toán</h2>
        <div class="payment_method__container-left__form">
            <div class="payment_method__container-left__form-wrap">
                <label class="select2">
                    <input type="radio" checked="checked" >
                    <span class="checkmark"></span>
                </label>
                <img src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=1" alt="" class="payment_method__container-left__form-method--ship-img">
                <span class="payment_method__container-left__form-method--ship-text">Thanh toán khi giao hàng (COD)</span>
            </div>
        </div>
        <div class="payment_method__container-left__form-method--ship__detail">
            Là phương thức khách hàng nhận hàng mới trả tiền. Áp dụng với tất cả các đơn hàng trên toàn quốc
        </div>
      
     
        <div class="payment__container-left__form">
            <form action="{{ route('post-payment_method') }}" method="post" >
            <div class="payment__container-left__btn-wrap">
                <a href="{{ route('payment') }}" class="payment__container-left__link--cart">Quay lại thông tin giao hàng</a>
                <button class="btn btn-payment">Hoàn tất thanh toán</button>
            </div>
            @csrf
            </form>
        </div>
      
    </div>
</div>
    
@endsection