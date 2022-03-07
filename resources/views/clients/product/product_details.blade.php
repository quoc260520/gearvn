@extends('clients.client_master_page')
@section('product_detail') 
<div class="content__product-detail">
    <div class="content__product-detail__path">
        <div class="grid">
            <div class="grid__row">
                 <div class="content__product-detail__path-link-wrap">
                     <a href="" class="content__product-detail__path-link">Trang chủ</a> <i class="fas fa-chevron-right content__product-detail__path-link__icon"></i>
                     <a href="" class="content__product-detail__path-link">Apple</a> <i class="fas fa-chevron-right content__product-detail__path-link__icon"></i>
                     <a href="" class="content__product-detail__path-link">Macbook</a> <i class="fas fa-chevron-right content__product-detail__path-link__icon"></i>
                     <a href="" class="content__product-detail__path-link">Macbook Air 13 2020 M1 7GPU 8GB 256GB MGN93SA/A - Silver</a> 
                 </div>
            </div>
        </div>
    </div>
    <div class="content__product-detail__container">
        <div class="grid">
            <div class="grid__row mb0">
                <div class="content__product-detail__container-body">
                    <div class="content__product-detail__container-body__top">
                        <div class="product__img-wrap">
                            <img src="{{ asset('/image/product/'.$product->product_image) }}" alt="" class="product__img">
                            <div class="product__img-slide-wrap">
                                <div class="product__img-slide">
                                    <img src="{{ asset('/image/product/'.$product->product_image) }}" alt="" >
                                </div>
                                <p class="product__img-slide-quantily"><span>2</span> ảnh </p> 
                            </div>
                        </div>

                        <div class="product__info">
                            <h3 class="product__info-header">{{ $product->product_name }} </h3>
                            <div class="product__info-price">{{ $product->product_price }}<span>đ</span> </div>
                            <div class="product__info-endow">
                                <a class="product__info-endow-hearding" href="#">Ưu đãi đặc biệt khi mua MACBOOK:</a>
                                <ul class="product__info-endow-list">
                                    <li class="product__info-endow-item">Mua kèm màn hình giảm sốc lên đên 49% <a href="" class="product__info-endow-link">(xem chi tiết)</a>.</li>   
                                    <li class="product__info-endow-item"> Mua kèm sản phẩm khác giảm giá lên đến 56%  <a href="" class="product__info-endow-link">(xem chi tiết)</a>.</li>
                                    <li class="product__info-endow-item">Hỗ trợ trả góp MPOS (Thẻ tín dụng), HDSAISON.</li>
                                </ul>
                            </div>
                            @if($product->status === 'con')
                            <div class="product__info-stock">{{ $product->status }}</div>
                            <div class="btn product__info-btn-buy">
                                <div class="product__info-btn-buy-header">
                                    <i class="fas fa-cart-arrow-down product__info-btn-buy__icon"></i>
                                    <h2 class="product__info-btn-buy-heading">Mua hàng</h2>
                                </div>
                                <div class="product__info-btn-buy-shipping">Giao hàng tận nơi hoặc nhận tại siêu thị</div>
                            </div>
                            @else
                            <div class="product__info-outofstock">Hết hàng tạm thời</div>
                            @endif

                        </div>

                      <div class="product__more-info-wrapper">
                        <div class="product__more-info-wrap">
                            <div class="product__more-info">
                                <i class="fas fa-gift product__more-info__icon"></i>
                                <span>Bộ sản phẩm gồm: Adapter, sách hướng dẫn, ngàm ổ cứng,…</span>
                            </div>
                            <div class="product__more-info">
                                <i class="fas fa-shipping-fast product__more-info__icon"></i>
                                <span>Giao hàng miễn phí toàn quốc</span>
                            </div>
                            
                           
                        </div>
                    </div>   
                </div>
                </div>   
            </div>

            <div class="grid__row">
                <div class="content__product-detail__container-info">
                    <div class="content__product-detail__container-info-wrap">
                    <div class="content__product-detail__container-info__left">
                      <div class="content__product-detail__container-info__left-wrap">
                        <div class="content__product-detail__container-info__left-over__lay"></div>
                        {!! $product->description !!}
                      </div>
                      <div class="content__product-detail__container-info__left-btn--open">
                          <button class="content__product-detail__container-info__left-btn">Đọc thêm <i class="fas fa-caret-down"></i></button>
                      </div>




                      <div class="content__product-detail__container-info__left-name">
                           <span class=".content__product-detail__container-info__left-name__code">
                               Mã: <span class="content__product-detail__container-info__left-name__code">{{ $product->product_name }}</span>   /     <span style="padding-left: 20px;">Danh mục: </span> <a href="" class="content__product-detail__container-info__left-name__link">Apple</a>,<a href="" class="content__product-detail__container-info__left-name__link">Laptop</a>,<a href="" class="content__product-detail__container-info__left-name__link">Macbook</a>
                               ,<a href="" class="content__product-detail__container-info__left-name__link">Macbook - iMac nổi bật</a>
                           </span>
                      </div>
                    @if($product->status === 'con')
                      <div class="content__product-detail__container-info__mini">
                          <div class="content__product-detail__container-info__mini-left">
                              <div class="content__product-detail__container-info__mini-left__img">
                                  <img src="{{ asset('/image/product/'.$product->product_image) }}" alt="Gearvn">
                              </div>
                              <div class="content__product-detail__container-info__mini-left__price-wrap">
                                  <div class="content__product-detail__container-info__mini-left__name">
                                      <span>{{ $product->product_name }}</span>
                                  </div>
                                  <div class="content__product-detail__container-info__mini-left__price">
                                    {{ $product->product_price}} <span>đ</span>
                                  </div>

                              </div>

                          </div>
                          <div class="content__product-detail__container-info__mini-right">
                            <div class="btn product__info-btn-buy content__product-detail__container-info__mini-right-btn">
                                <div class="product__info-btn-buy-header">
                                    <i class="fas fa-cart-arrow-down product__info-btn-buy__icon"></i>
                                    <h2 class="product__info-btn-buy-heading">Mua hàng</h2>
                                </div>
                                <div class="product__info-btn-buy-shipping">Giao hàng tận nơi hoặc nhận tại siêu thị</div>
                            </div>
                        </div>
                      </div>
                    @endif
                    <div class="content__product-detail__container-info-similar-product-wrapper">
                        <div class="content__product-detail__container-info-similar-product-header">
                            <h2 class="content__product-detail__container-info-similar-product-heading">So sánh với cách sản phẩm tương tự</h2>
                            <div class="content__product-detail__container-info-similar-product-search">
                                <input type="text" placeholder="Nhập tên sản phẩm muốn so sánh" class="content__product-detail__container-info-similar-product-search__input">
                                <i class="fas fa-search content__product-detail__container-info-similar-product-search__icon"></i>
                            </div>

                        </div>
                      
                      <div class="content__product-detail__container-info-similar-product-wrap">
                        <div class="content__product-detail__container-info-similar-product">
                            <div class="content__product-detail__container-info-similar-product__img">
                                <img src="https://gstatic.gearvn.com/2021/09/gearvn-macbook-air-2020-m1-8gb-256gb-7gpu-mgnd3sa-a-gold-1-300x300.jpg" alt="">
                            </div>
                            <span class="content__product-detail__container-info-similar-product__text">Bạn đang xem:</span>
                            <div class="content__product-detail__container-info-similar-product__price-wrap">
                                <div class="content__product-detail__container-info-similar-product__name">
                                    <span>Macbook Air 2020 M1 8GB 256GB 7GPU MGND3SA/A - Gold</span>
                                </div>
                                <div class="content__product-detail__container-info-similar-product__price">
                                    25.990.000 <span>đ</span>
                                </div>

                            </div>
                        </div>

                        <div class="content__product-detail__container-info-similar-product">
                            <div class="content__product-detail__container-info-similar-product__img">
                                <img src="https://gstatic.gearvn.com/2021/09/gearvn-macbook-air-2020-m1-8gb-256gb-7gpu-mgnd3sa-a-gold-1-300x300.jpg" alt="">
                            </div>
                            <div class="content__product-detail__container-info-similar-product__price-wrap">
                                <div class="content__product-detail__container-info-similar-product__name">
                                    <span>Macbook Air 2020 M1 8GB 256GB 7GPU MGND3SA/A - Gold</span>
                                </div>
                                <div class="content__product-detail__container-info-similar-product__price">
                                    25.990.000 <span>đ</span>
                                </div>

                            </div>
                            <span class="content__product-detail__container-info-similar-product__text"><a href="" class="content__product-detail__container-info-similar-product__link">So sánh chi tiết</a> </span>
                        </div>

                        <div class="content__product-detail__container-info-similar-product">
                            <div class="content__product-detail__container-info-similar-product__img">
                                <img src="https://gstatic.gearvn.com/2021/09/gearvn-macbook-air-2020-m1-8gb-256gb-7gpu-mgnd3sa-a-gold-1-300x300.jpg" alt="">
                            </div>
                            <div class="content__product-detail__container-info-similar-product__price-wrap">
                                <div class="content__product-detail__container-info-similar-product__name">
                                    <span>Macbook Air 2020 M1 8GB 256GB 7GPU MGND3SA/A - Gold</span>
                                </div>
                                <div class="content__product-detail__container-info-similar-product__price">
                                    25.990.000 <span>đ</span>
                                </div>

                            </div>
                            <span class="content__product-detail__container-info-similar-product__text" ><a href="" class="content__product-detail__container-info-similar-product__link">So sánh chi tiết</a> </span>
                        </div>
                        <div class="content__product-detail__container-info-similar-product">
                            <div class="content__product-detail__container-info-similar-product__img">
                                <img src="https://gstatic.gearvn.com/2021/09/gearvn-macbook-air-2020-m1-8gb-256gb-7gpu-mgnd3sa-a-gold-1-300x300.jpg" alt="">
                            </div>
                            <div class="content__product-detail__container-info-similar-product__price-wrap">
                                <div class="content__product-detail__container-info-similar-product__name">
                                    <span>Macbook Air 2020 M1 8GB 256GB 7GPU MGND3SA/A - Gold</span>
                                </div>
                                <div class="content__product-detail__container-info-similar-product__price">
                                    25.990.000 <span>đ</span>
                                </div>

                            </div>
                            <span class="content__product-detail__container-info-similar-product__text"><a href="" class="content__product-detail__container-info-similar-product__link">So sánh chi tiết</a> </span>
                        </div>

                      </div>
                    </div>
                    </div>
                    <div class="content__product-detail__container-info__right">
                        <ul class="content__product-detail__container-info__table">
                            <li class="content__product-detail__container-info__table-row">
                               <h3 class="content__product-detail__container-info__table-heading">Thông số kỹ thuật</h3>
                            </li>
                            <li >
                            <li class="content__product-detail__container-info__table-row">
                                <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> Thương hiệu:</li>
                                    <li> <p class="content__product-detail__container-info__table-text"> {{ $product->category_product_id }}</li>
                                </ul>
                             
                            </li>
                            <li >
                            <li class="content__product-detail__container-info__table-row">
                                <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> Bảo hành:</li>
                                    <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text"> {{ $product->insurance }}</li>
                                </ul>
                              
                              </li>
                            <li >
                              <li class="content__product-detail__container-info__table-row">
                                  <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> CPU:</li>
                                    <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text"> {{ $product->cpu }}</li>
                                  </ul>
                               
                              </li>
                            <li >
                              <li class="content__product-detail__container-info__table-row">
                                  <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> RAM:</li>
                                    <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text">{{ $product->ram }}</li>
                                  </ul>
                              
                              </li>
                            <li >
                              <li class="content__product-detail__container-info__table-row">
                                  <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> Ổ lưu trữ:</li>
                                    <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text">{{ $product->rom }}</li>
                                  </ul>
                               
                              </li>
                            <li >
                              <li class="content__product-detail__container-info__table-row">
                                  <ul>
                                    <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> Card đồ họa:</li>
                                    <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text">{{ $product->card }}</li>
                                  </ul>
                               
                              </li>
                            <li >
                              <li class="content__product-detail__container-info__table-row">
                               <ul>
                                <li class="content__product-detail__container-info__table-column--left"> <p class="content__product-detail__container-info__table-text"> Màn hình:</li>
                                <li class="content__product-detail__container-info__table-column--right"> <p class="content__product-detail__container-info__table-text">{{ $product->screnn }}</p></li>
                               </ul>
                              </li>
                            </ul>
                          <button class="content__product-detail__container-info__btn">Xem cấu hình chi tiết</button>
                        
                    </div>
                </div>

                </div>
            </div>


        </div>
    </div>
    
 </div>
 @include('clients.product.modal_product')
@endsection
