@extends('clients.client_master_page')
@section('cart')
<div class="content content__cart">
    <div class="grid">
        <div class="grid__row">
           <div class="content__cart-list-product-wrap ">
               <div class="content__cart-list-product-header">
                   <p class="content__cart-list-product-header__heading">Giỏ hàng</p>
                   @if(!empty(Session::has('Cart')))
                   <span class="content__cart-list-product-header__number">({{Session('Cart')->totalQuantity}} sản phẩm)</span>
                   @else
                   <span class="content__cart-list-product-header__number">(0 sản phẩm)</span>
                   @endif

               </div>
            @if(!empty(Session::has('Cart')))
               <div class="content__cart-list-product-container">
                   <div class="content__cart-list-product-left">
                    @foreach(Session('Cart')->products as $product)

                       <div class="content__cart-list-product-item">
                           <div class="content__cart-list-product-item__info">
                               <div class="content__cart-list-product-item__img">
                                   <a href="" class="content__cart-list-product-item__info-link"><img src="{{ asset('/image/product/'.$product['productInfo']->product_image) }}" alt="Gearvn"></a>
                               </div>
                               <div class="content__cart-list-product-item__name-wrap">
                                   <div class="content__cart-list-product-item__name"><a href="" class="content__cart-list-product-item__info-link">{{ $product['productInfo']->product_name }}</a></div>
                                   <div class="content__cart-list-product-item__delete"><a href="{{ route('index.delete-cart',['id' => $product['productInfo']->id]) }}" class="content__cart-list-product-item__delete-link">Xóa</a></div>
                               </div>
                           </div>
                        <div class="content__cart-list-product-item__price-wrap">
                            <div class="content__cart-list-product-item__price">
                                {{ $product['productInfo']->product_price }}
                                <span>đ</span>
                            </div>
                            <div class="content__cart-list-product-item__price__pick-quantity">
                                <a href="{{ route('index.update-cart',['id' => $product['productInfo']->id]) }}" class="link" ><button class="btn__reduction">-</button></a>
                                <input aria-label="quantity" class="content__cart-list-product-item__price__pick-quantity__input" max="10" min="1" name="" type="number" value="{{ $product['quantity'] }}">
                                <a href="{{ route('index.update-cart-add',['id' => $product['productInfo']->id]) }}" class="link" ><button class="btn__increase">+</button></a>
                                
                            </div>
                        </div> 
                       </div>
                    @endforeach
                   </div>
                 
                   <div class="content__cart-list-product-right">
                       <div class="content__cart-list-product-right__promotion">
                           <div class="content__cart-list-product-right__promotion-header">
                               <h3 class="content__cart-list-product-right__promotion-header__heading">Mã khuyến mãi</h3>
                           </div>
                           <div class="content__cart-list-product-right__promotion-body">
                               <input type="text" class="content__cart-list-product-right__promotion-body__input" placeholder="Mã khuyến mãi">
                           </div>
                           <div class="content__cart-list-product-right__promotion-bottom">
                               <button class="content__cart-list-product-right__promotion-bottom__btn">Áp dụng</button>
                           </div>
                       </div>
                       <div class="content__cart-list-product-right__total-price-wrap">
                           <div class="content__cart-list-product-right__total-price__provisional">
                               <h3 class="content__cart-list-product-right__total-price__provisional-header">Tạm tính</h3>
                               <div class="content__cart-list-product-right__total-price__provisional-price">{{ Session('Cart')->totalPrice}}<span>đ</span></div>
                           </div>

                           <div class="content__cart-list-product-right__total-price">
                               <h3 class="content__cart-list-product-right__total-price-header">Tổng</h3>
                               <div class="content__cart-list-product-right__total-price-number">{{Session('Cart')->totalPrice }}<span>đ</span></div>
                           </div>

                       </div>
                       <div class="content__cart-list-product-right__btn">
                        
                        <a href="{{route('payment')}}" class="link"><button class="btn btn--full_width">Tiến hành thanh toán</button></a>

                       </div>


                   </div>

                   
               </div>
           </div>
        @else
            <div class="content__cart-list--drum-wrap">
                <div class="content__cart-list--drum ">
                    <div class="content__cart-item">
                        <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/empty-cart.png" alt="Giỏ hàng trống" class="content__cart-item-img">
                    </div>
                    <div class="content__cart-item">
                        <h1 class="content__cart-item-heading">Chưa có sản phẩm nào trong giỏ hàng của bạn.</h1>
                    </div>
                    <div class="content__cart-item">
                        <button class="content__cart-item-btn"><a href="{{ route('index') }}" class="content__cart-item-btn-link">Quay trở lại cửa hàng</a> </button>
                    </div>
                </div>
            </div>
        @endif
       

        </div> 
    </div>
</div>
@endsection