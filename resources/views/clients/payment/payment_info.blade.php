<div class="payment__container-right">
    <div class="payment__container-right-wrap">
        @if(!empty(Session::has('Cart')))
        @foreach(Session::get('Cart')->products as $product)
        <div class="payment__container-right__header">
            <div class="payment__container-right__header-left">
                <div class="payment__container-right__header-left__img">
                    <img src="{{ asset('image/product/'.$product['productInfo']->product_image) }}" alt="">
                    <div class="payment__container-right__header-left__number"><span>{{ $product['quantity'] }}</span></div>
                </div>
                <div class="payment__container-right__header-left__name">
                    <span>{{ $product['productInfo']->product_name }}</span>
                </div>
            </div>
            <div class="payment__container-right__header-right">
                <div class="payment__container-right__header-right__price"> {{ $product['price']  }}<span>đ</span></div>
            </div>
        </div>
        @endforeach
        @endif

        <div class="payment__container-right__form">
            <div class="payment__container-right__form-input-wrap">
                <input type="text" placeholder="Mã giảm giá" class="payment__container-right__form-input">
            </div>
            <div class="payment__container-right__form-btn">
                <button class="btn__voucher--submit" type="submit">Sử dụng</button>
            </div>
        </div>
        <div class="payment__container-right__transport">
            <div class="payment__container-right__transport-price">
                <p class="payment__container-right__transport-price__text">Tạm tính</p>
                <div class="payment__container-right__transport-price--product">{{ Session::get('Cart')->totalPrice ?? 0}}<span>đ</span> </div>
            </div>
            <div class="payment__container-right__transport-price">
                <p class="payment__container-right__transport-price__text">Phí vận chuyển</p>
                <div class="payment__container-right__transport-price--ship"> {!!$data['price_ship']!!} </div>
            </div>
        </div>
        <div class="payment__container-right__total">
            <div class="payment__container-right__total-text">Tổng cộng</div>
            <div class="payment__container-right__total-price-wrap">
                <span class="payment__container-right__total-currency">VND</span>
                <span class="payment__container-right__total-price">{{ Session::get('Cart')->totalPrice ?? 0 }}<span>đ</span></span>
            </div>
        </div>

    </div>
</div>