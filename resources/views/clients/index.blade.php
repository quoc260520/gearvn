<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="https://file.hstatic.net/1000026716/file/favicon_0db2583fad1443e482491c7db08765e6.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}">
    <title>Trang chủ</title>
</head>
<body>
     <div class="app">
         <div class="banner ">
            <div class="banner__sliders">
                @foreach($listSliderBanner as $key => $items)
                    <div class="banner__item banner__slider">
                        <a href="{{ $items->link }}" class="banner__slider-link"><img class="banner__img" src="{{ '/image/slider_banner/'.$items->image }}"></a>
                    </div>
                @endforeach
            </div>
         </div>
         <div class="header">
             <div class="header__top">
                 <div class="grid">
                    <div class="grid__row end-row">
                        <ul class="header__top-list">
                            <li class="header__top-item">
                                <a href="" class="header__top-link">
                                    <i class="fas fa-headset header__top-icon"></i>
                                    <span class="header__top-text">Tư vấn mua hàng: 1800 8989</span>
                                </a>
                          </li>
                            <li class="header__top-item">
                                <a href="" class="header__top-link">
                                    <i class="fas fa-headset header__top-icon"></i>
                                    <span class="header__top-text">CSKH: 1800 8668</span>
                                    
                                </a>
                            </li>
                            <li class="header__top-item">
                                <a href="" class="header__top-link">
                                    <i class="far fa-newspaper header__top-icon"></i>
                                    <span class="header__top-text">Tin công nghệ</span>
                                   
                                </a>
                            </li>
                            <li class="header__top-item">
                                <a href="" class="header__top-link">
                                    <i class="fas fa-user-friends header__top-icon"></i>
                                    <span class="header__top-text"> Tuyển dụng</span>
                                   
                                </a>
                            </li>
                        </ul>
                    </div>
                 </div>
             </div>
             <div class="header-width-search">
                        <div class="grid header-width-search-wrap">
                            <div class="header__logo">
                                <a href="{{ route('index') }}" class="header__logo-link">
                                    <img src="https://gstatic.gearvn.com/2021/08/Logo-GEARVN_pc-300x70-1-1.png" alt="GEARVN" class="header__logo-img">
                                </a>
                            </div>
                           <div class="header__search-wrap">
                            <form action="{{ route('index.post-search') }}" method="post" style="display:flex;flex:1;">
                               <div class="header__search">
                                   <input type="text" name="data_search" class="header__search-input" placeholder="Bạn cần gì..." value="{{ old('data_search') }}">
                               </div>
                               <button type="submit" class="header__search-btn btn">
                                   <i class="header__search-btn-icon ti-search"></i>
                                   <span class="header__search-btn-text">Tìm kiếm</span>
                               </button>
                               @csrf
                            </form>
                           </div>

                           <div class="header__search-user">
                               <div class="header__search-user-icon">
                                   <i class="far fa-user"></i>
                               </div>
                               <div class="header__search-user-list-wrap">
                                   <ul class="header__search-user-list">
                                       <li class="header__search-user-item">Đăng nhập / Đăng ký</li>
                                       <li class="header__search-user-item">Tài khoản <i class="fas fa-sort-down"></i></li>
                                   </ul>
                               </div>

                               <ul class="header__search-user-login">
                                   <li class="header__search-user-login-item btn-login-js">
                                     <div class="header__search-user-login-link ">Đăng nhập</div>  
                                    </li>
                                   <li class="header__search-user-login-item btn-register-js">
                                    <div  class="header__search-user-login-link ">Tạo tài khoản</div>  
                                       
                                    </li>
                                   <li class="header__search-user-login-item header__search-user-login-item--facebook">
                                       <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/facebook.png" alt="Facebook" class="header__search-user-login-img">
                                       <div href="" class="header__search-user-login-link"> Đăng nhập bằng Facebook</div>  
                                   
                                  </li>
                                   <li class="header__search-user-login-item header__search-user-login-item--google">
                                    <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/google.png" alt="Google" class="header__search-user-login-img">
                                       <div href="" class="header__search-user-login-link">Đăng nhập bằng Google</div>  
                                       
                                    </li>
                               </ul>

                           </div>
                           <a href="{{ route('index.cart') }}"class="header__search-cart-link">
                           <div class="header__search-cart">
                               <i class="fas fa-shopping-cart header__search-cart-icon"></i>
                               <span class="header__search-cart-number">{{ Session('Cart')->totalQuantity ?? 0}}</span>
                               <span class="header__search-cart-text">Giỏ hàng</span>
                           </div>
                           </a>
                        </div>


             </div>

             <div class="header__bottom">
                 <div class="grid">
                     <div class="grid__row">
                         <div class="grid__column-2">
                             <div class="header__bottom-list-product">
                                <i class="fas fa-bars header__bottom-list-product-icon"></i>
                                 <h3 class="header__bottom-list-product-heading">DANH MỤC SẢN PHẨM</h3>
                             </div>
                         </div>
                         <div class="grid__column-10">
                            <div class="header__bottom-item-wrap">
                                <div class="grid__column-2-5">
                                    <div class="header__bottom-item">
                                       <i class="far fa-credit-card header__bottom-item-icon"></i>
                                       <span class="header__bottom-item-text">Hướng dẫn thanh toán</span>
                                    </div>
                                </div>
   
                                <div class="grid__column-2-5">
                                   <div class="header__bottom-item">
                                      <i class="fas fa-coins header__bottom-item-icon"></i>
                                      <span class="header__bottom-item-text">Hướng dẫn trả góp</span>
                                   </div>
                               </div>
   
                               <div class="grid__column-2-5">
                                   <div class="header__bottom-item">
                                      <i class="fas fa-truck header__bottom-item-icon"></i>
                                      <span class="header__bottom-item-text">Chính sách giao hàng</span>
                                   </div>
                               </div>
   
                               <div class="grid__column-2-5">
                                   <div class="header__bottom-item">
                                      <i class="fas fa-shield-alt header__bottom-item-icon"></i>
                                      <span class="header__bottom-item-text">Chính sách bảo hành</span>
                                   </div>
                               </div>
   
                               <div class="grid__column-2-5">
                                   <div class="header__bottom-item">
                                      <i class="fas fa-tag header__bottom-item-icon"></i>
                                      <span class="header__bottom-item-text">Tổng hợp khuyến mãi</span>
                                   </div>
                               </div>
                            </div>
                        </div>

                     </div>
                 </div>
             </div>

         </div>
         <div class="content">
             <div class="grid">
                 <div class="grid__row">
                     <div class="grid__column-2 ">
                         <div class="content__slider">
                             <ul class="content__slider-list">
                                 <a href="" class="content__slider-link">
                                 <li class="content__slider-item">
                                     <i class="content__slider-item-icon fas fa-laptop"></i>
                                     <span class="content__slider-item-text">Laptop Gaming</span>
                                     <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                 </li>
                                 </a>
                                 <a href="" class="content__slider-link">
                                 <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-laptop"></i>
                                    <span class="content__slider-item-text">Laptop văn phòng</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fab fa-apple"></i>
                                    <span class="content__slider-item-text">Apple</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-laptop-code"></i>
                                    <i class="fal fa-computer-speaker"></i>
                                    <span class="content__slider-item-text">PC Gaming</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-laptop-code"></i>
                                    <span class="content__slider-item-text">PC-Máy bộ GEARVN</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-desktop"></i>
                                    <span class="content__slider-item-text">Màn hình</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                   <i class="content__slider-item-icon fas fa-memory"></i>
                                    <span class="content__slider-item-text">Main - CPU - VGA</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-microchip"></i>
                                    <span class="content__slider-item-text">Case - Tản - Nguồn</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-microchip"></i>
                                    <span class="content__slider-item-text">SSD - HDD - RAM</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon far fa-keyboard"></i>
                                    <span class="content__slider-item-text">Bàn phím</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-mouse"></i>
                                    <span class="content__slider-item-text">Chuột</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-headphones"></i>
                                    <span class="content__slider-item-text">Tai nghe - Loa</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-print"></i>
                                    <span class="content__slider-item-text">Máy in, phần mềm</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-chair"></i>
                                    <span class="content__slider-item-text">Ghế & bàn</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>
                            <a href="" class="content__slider-link">
                                <li class="content__slider-item">
                                    <i class="content__slider-item-icon fas fa-wifi"></i>
                                    <span class="content__slider-item-text">Thiết bị mạng</span>
                                    <i class="fas fa-chevron-right content__slider-item-icon--right"></i>
                                </li>
                            </a>

                             </ul>
                         </div>
                     </div>
                    <div class="grid__column-10">
                        <div class="content-popup">
                            <div class="content__category">
                                <div class="content__category-wrap">
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    <ul class="content__category-list">
                                        <h4 class="content__category-item-header"><a href="" class="content__category-item-link">Laptop Acer</a></h4>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Aspire Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Nitro Series</a></li>
                                        <li class="content__category-item"><a href="" class="content__category-item-link">Predator Helios</a></li>
                                    </ul>
                                    
                                </div>
                                
                                
                                <div class="content__category-img">
                                    <img src=" https://gstatic.gearvn.com/2021/11/Menu-Laptop-Gaming.jpg" alt="" class="content__category-item-img">
                                </div>
                            </div>
                        </div>
                        <div class=" content__slider-top">
                            <div class="content__slider-top-wrap">
                                <div class="content__slider-top__list">
                                <div class="content__slider-top__list-item-wrap">
                                        <div class="content__slider-top-wrapper">
                                        <div class="content__slider-top-active">
                                            @foreach($listSliderTop as $slide)
                                            <div class="content__slider-top__list-item-slider">
                                                <img src="{{ '/image/slider_top/'.$slide->image }}" alt="" class="content__slider-top__list-item-img-slider">
                                            </div>
                                            @endforeach
                                        </div>
                                        </div>
                                </div>
                                <div class="content__slider-top__list-item-wrap">
                                    <div class="content__slider-top__list-item">
                                        <a href="" class="content__slider-top__list-item-link">
                                            <img src="https://gstatic.gearvn.com/2021/11/Artboard-8-8-1.png" alt="" class="content__slider-top__list-item-img">
                                        </a>
                                    </div>
                                    <div class="content__slider-top__list-item">
                                        <a href="" class="content__slider-top__list-item-link">
                                            <img src="https://gstatic.gearvn.com/2021/11/Artboard-7-8.png" alt="" class="content__slider-top__list-item-img">
                                        </a>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="content__slider-top__list">
                                <div class="content__slider-top__list-item">
                                    <a href="" class="content__slider-top__list-item-link">
                                        <img src="https://gstatic.gearvn.com/2021/11/Artboard-7-copy-8.png" alt="" class="content__slider-top__list-item-img">
                                    </a>
                                </div>
                                <div class="content__slider-top__list-item">
                                    <a href="" class="content__slider-top__list-item-link">
                                        <img src="https://gstatic.gearvn.com/2021/11/Artboard-8-copy-2-8.png" alt="" class="content__slider-top__list-item-img">
                                    </a>
                                </div>
                                <div class="content__slider-top__list-item">
                                    <a href="" class="content__slider-top__list-item-link">
                                        <img src="https://gstatic.gearvn.com/2021/11/Artboard-8-copy-8.png" alt="" class="content__slider-top__list-item-img">
                                    </a>

                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> 

                 </div>

                 <div class="grid__row">
                     <div class="content__list-_products-img-sale">
                         <ul class="content__list-_products-img-sale__list">
                            <div class="grid__column-2-4">
                             <li class="content__list-_products-img-sale__item">
                                 <a href="" class="content__list-_products-img-sale__link">
                                 <img src="https://gstatic.gearvn.com/2021/11/Artboard-4-copy-8-2.png" alt="" class="content__list-_products-img-sale__img">
                                 </a>
                                </li>
                            </div>
                            <div class="grid__column-2-4">
                             <li class="content__list-_products-img-sale__item">
                                <a href="" class="content__list-_products-img-sale__link">
                                <img src="https://gstatic.gearvn.com/2021/11/Artboard-4-copy-2-8.png" alt="" class="content__list-_products-img-sale__img">
                               </a>
                            </li>
                            </div>
                            <div class="grid__column-2-4">
                            <li class="content__list-_products-img-sale__item">
                                <a href="" class="content__list-_products-img-sale__link">
                                <img src="https://gstatic.gearvn.com/2021/11/Artboard-4-copy-3-8.png" alt="" class="content__list-_products-img-sale__img">
                                </a>
                            </li>
                            </div>
                            <div class="grid__column-2-4">
                            <li class="content__list-_products-img-sale__item">
                                <a href="" class="content__list-_products-img-sale__link">
                                <img src="https://gstatic.gearvn.com/2021/11/Artboard-4-copy-4-8.png" alt="" class="content__list-_products-img-sale__img">
                                </a>
                            </li>
                           </div>
                        </ul>
                     </div>
                 </div>

                 <div class="grid__row">
                     <div class="content__brand">
                         <div class="content__brand-header">
                             <h4 class="content__brand-header__heading">Thương hiệu sản phẩm</h4>
                             <a href="" class="content__brand-header__link">Xem tất cả</a>
                         </div>
                         <div class="content__brand-list-wrap">
                             <div class="content__brand-list">
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/samsung.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/samsung.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/samsung.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/samsung.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/Intel-1.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/Intel-1.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/Intel-1.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>
                                <div class="content__brand-list__item">
                                    <a href="" class="content__brand-list__item-link">
                                        <img src="https://gstatic.gearvn.com/2021/08/Intel-1.png" alt="" class="content__brand-list__item-img">
                                    </a>
                                </div>

                              
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    <div class="content__brand-list__item">
                                        <a href="" class="content__brand-list__item-link">
                                            <img src="https://gstatic.gearvn.com/2021/08/acer.png" alt="" class="content__brand-list__item-img">
                                        </a>
                                    </div>
                                    
                                
                             </div>

                           
                         </div>


                     </div>
                 </div>


                 <div class="grid__row">
                    <div class="content__slider-sale">
                        <div class="content__slider-sale-header" style="background-image:url('https://gstatic.gearvn.com/2021/11/Artboard-15-8.png')">
                        </div>
                        <i class="ti-angle-right content__slider-next"></i>
                        <i class="ti-angle-left content__slider-prev"></i>
                        <div class="content__slider-sale_list-product-wrap">
                            @foreach($listProductFlS as $item)
                               <div class="grid__column-2 wrap__padding ">
                                   <div class="content__slider-sale_list-product">
                                       <div class="content__slider-sale_list-product-item">
                                           <a href="{{route('product-detail',['id' => $item->product_id]) }}" class="content__slider-sale_list-product-item-link">
                                               <div class="content__slider-sale_list-product-item-img">
                                                   <img src="{{ asset('/image/product/'.$item->product_image) }}" alt="">
                                               </div>
                                               <h3 class="content__slider-sale_list-product-item-name">
                                                   {{ $item->product_name }}
                                               </h3>
                                           </a>
                                       
                                           <div class="content__slider-sale_list-product-item-price-wrap">
                                               <p class="content__slider-sale_list-product-item-price">{{ $item->product_price }}</p><span>đ</span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                 <div class="grid__row">
                     <div class="content__product">
                         <div class="content__product-header content__product-header--no-border-radius" style="background-image: url('https://gstatic.gearvn.com/2021/11/Artboard-17-8.png');">
                            <h2 class="content__product-header__heading"></h2>
                            <a href="" class="content__product-header__link">
                                 <ul class="content__product-header__link-list content__product-header__link-list--white_color">
                                     <li class="content__product-header__link-item">Laptop</li>
                                     <li class="content__product-header__link-item"> Laptop Gaming</li>
                                     <li class="content__product-header__link-item">  Laptop văn phòng</li>
                                 </ul>
                             </a>
                         </div>
                         <div class="content__product-wrap">
                             <div class="content__product-list">
                                <div class=".grid__column-4">
                                 <div class="content__product-item-wrap content__product-item-wrap--no-border">
                                    <a href="./product.html" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/11/7145Aqv7-Artboard-13-8.png" alt="" class="content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                    </div>
                                </div>
                            </div>
                                 <div class=".grid__column-2">
                                <div class="content__product-item-wrap">
                                    <a href="./product.html" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                    </div>

                                </div>
                                 </div>
                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="./product.html" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                    </div>

                                    </div>
                                 </div>
                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="./product.html" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                    </div>
                                    </div>

                                   
                                 </div>
                                 <div class=".grid__column-4">
                                    <div class="content__product-item-wrap content__product-item-wrap--no-border">
                                       <a href="" class="content__product-item-link">
                                           <div class="content__product-item">
                                               <img src="https://gstatic.gearvn.com/2021/11/7145Aqv7-Artboard-13-8.png" alt="" class="content__product-item__img--full_width">
                                               <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                           </div>
                                       </a>
                                       <div class="content__product-item__price-wrap">
                                           <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                       </div>
                                   </div>
                               </div>
                                    <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                       <a href="" class="content__product-item-link">
                                           <div class="content__product-item">
                                               <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                               <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                           </div>
                                       </a>
                                       <div class="content__product-item__price-wrap">
                                           <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                       </div>
   
                                   </div>
                                    </div>
                                    <div class=".grid__column-2">
                                       <div class="content__product-item-wrap">
                                       <a href="" class="content__product-item-link">
                                           <div class="content__product-item">
                                               <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                               <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                           </div>
                                       </a>
                                       <div class="content__product-item__price-wrap">
                                           <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                       </div>
   
                                       </div>
                                    </div>
                                    <div class=".grid__column-2">
                                       <div class="content__product-item-wrap">
                                       <a href="" class="content__product-item-link">
                                           <div class="content__product-item">
                                               <img src="https://gstatic.gearvn.com/2021/10/drH0xj4W-laptop_gaming_acer_aspire_7_a715_42g_r6zr-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                               <h3 class="content__product-item__name">Laptop Gaming MSI Katana GF66 11UC 676VN</h3>
                                           </div>
                                       </a>
                                       <div class="content__product-item__price-wrap">
                                           <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                       </div>
                                       </div>
   
                                   </div>   

                                 
                              
                             </div>
                         </div>
                     </div>
                 </div>

                <div class="grid__row">
                    <div class="content__product ">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Top Pc Bán Chạy</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Laptop</li>
                                    <li class="content__product-header__link-item"> Laptop Gaming</li>
                                    <li class="content__product-header__link-item">  Laptop văn phòng</li>
                                </ul>
                            </a>
                        </div>

                        <i class="ti-angle-right content__product-slider-next"></i>
                        <i class="ti-angle-left content__product-slider-prev"></i>

                        <div class="content__product-wrap content__product-slider">
                            <div class="content__product-list content__product-list--nowrap">
                                @foreach($listPc as $item)
                                    <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="{{route('product-detail',['id' => $item->product_id]) }}" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="{{ asset('/image/product/'.$item->product_image) }}" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">{{ $item->product_name }}</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">{{ $item->product_price }}<span>đ</span></p>
                                            </div>
        
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                       </div>
                    </div>
                </div>

                <div class="grid__row">
                    <div class="content__product">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Macbook - iMac nổi bật</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Apple</li>
                                    <li class="content__product-header__link-item">iMac 24</li>
                                    <li class="content__product-header__link-item">Mac Mini</li>
                                </ul>
                            </a>
                        </div>
                        <div class="content__product-wrap">
                            <div class="content__product-list">
                             
                                <div class=".grid__column-2">
                               <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/dUx1jn5W-GEARVN-imac-24-2021-m1-8gpu-8gb-512gb-mgpn3sa-a-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                               </div>
                                </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://gstatic.gearvn.com/2021/08/dUx1jn5W-GEARVN-imac-24-2021-m1-8gpu-8gb-512gb-mgpn3sa-a-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://gstatic.gearvn.com/2021/08/dUx1jn5W-GEARVN-imac-24-2021-m1-8gpu-8gb-512gb-mgpn3sa-a-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/dUx1jn5W-GEARVN-imac-24-2021-m1-8gpu-8gb-512gb-mgpn3sa-a-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                                   </div>
                                </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/dUx1jn5W-GEARVN-imac-24-2021-m1-8gpu-8gb-512gb-mgpn3sa-a-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>
                                   </div>

                                  
                                </div>
                            
                                
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__row">
                    <div class="content__product">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Màn hình khuyến mãi hot</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Màn hình Acer</li>
                                    <li class="content__product-header__link-item"> Màn hình Asus</li>
                                    <li class="content__product-header__link-item"> Màn hình cong</li>
                                </ul>
                            </a>
                        </div>
                        <div class="content__product-wrap">
                            <div class="content__product-list">
                             
                                <div class=".grid__column-2">
                               <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/09/3CybTxkg-gearvn-man-hinh-dell-ultrasharp-u2422h-24-ips-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">Màn hình Dell UltraSharp U2422H 24″ IPS</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">6.690.000<span>đ</span></p>
                                   </div>

                               </div>
                                </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://gstatic.gearvn.com/2021/09/3CybTxkg-gearvn-man-hinh-dell-ultrasharp-u2422h-24-ips-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">Màn hình Dell UltraSharp U2422H 24″ IPS</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">6.690.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://gstatic.gearvn.com/2021/08/awco17Ri-gearvn-man-hinh-acer-ek241y-24-ips-75hz-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">Màn hình Dell UltraSharp U2422H 24″ IPS</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">6.690.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/09/3CybTxkg-gearvn-man-hinh-dell-ultrasharp-u2422h-24-ips-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">Màn hình Dell UltraSharp U2422H 24″ IPS</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">6.690.000<span>đ</span></p>
                                   </div>

                                   </div>
                                </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/09/3CybTxkg-gearvn-man-hinh-dell-ultrasharp-u2422h-24-ips-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">Màn hình Dell UltraSharp U2422H 24″ IPS</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">6.690.000<span>đ</span></p>
                                   </div>
                                   </div>

                                  
                                </div>

                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/08/ddwsNUq6-lg27mk600m-b_gearvn_d8b0fa7b62ee427eba43a7578053870f-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Màn hình LCD LG 27″ 27MK600M-B 75Hz</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">5.150.000<span>đ</span></p>
                                    </div>
                                    </div>
 
                                   
                                 </div>

                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/08/ddwsNUq6-lg27mk600m-b_gearvn_d8b0fa7b62ee427eba43a7578053870f-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Màn hình LCD LG 27″ 27MK600M-B 75Hz</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">5.150.000<span>đ</span></p>
                                    </div>
                                    </div>
 
                                   
                                 </div>
                            
                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/08/awco17Ri-gearvn-man-hinh-acer-ek241y-24-ips-75hz-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Màn hình LCD LG 27″ 27MK600M-B 75Hz</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">5.150.000<span>đ</span></p>
                                    </div>
                                    </div>
 
                                   
                                 </div>
                            
                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/08/ddwsNUq6-lg27mk600m-b_gearvn_d8b0fa7b62ee427eba43a7578053870f-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Màn hình LCD LG 27″ 27MK600M-B 75Hz</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">5.150.000<span>đ</span></p>
                                    </div>
                                    </div>
 
                                   
                                 </div>
                                
                                 <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                    <a href="" class="content__product-item-link">
                                        <div class="content__product-item">
                                            <img src="https://gstatic.gearvn.com/2021/08/ddwsNUq6-lg27mk600m-b_gearvn_d8b0fa7b62ee427eba43a7578053870f-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                            <h3 class="content__product-item__name">Màn hình LCD LG 27″ 27MK600M-B 75Hz</h3>
                                        </div>
                                    </a>
                                    <div class="content__product-item__price-wrap">
                                        <p class="content__product-item__price">5.150.000<span>đ</span></p>
                                    </div>
                                    </div>
 
                                   
                                 </div>
                            
                             
                                
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__row">
                    <div class="content__product">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Bàn phím cơ giá rẻ</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Bàn phím Akko</li>
                                    <li class="content__product-header__link-item">Bàn phím Corsair</li>
                                    <li class="content__product-header__link-item">Bàn phím Dare-U</li>
                                    <li class="content__product-header__link-item">Bàn phím E-dra</li>
                                </ul>
                            </a>
                        </div>
                        <div class="content__product-wrap">
                            <div class="content__product-list">
                             
                                <div class=".grid__column-2">
                               <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/aEPZnJtO-gearvn.com-products-ban-phim-fuhlen-l500s-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                               </div>
                                </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://gstatic.gearvn.com/2021/08/INtXR71D-gearvn-ban-phim-dareu-ek1280s-pink-white-1-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://gstatic.gearvn.com/2021/08/aEPZnJtO-gearvn.com-products-ban-phim-fuhlen-l500s-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/INtXR71D-gearvn-ban-phim-dareu-ek1280s-pink-white-1-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                                   </div>
                                </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/aEPZnJtO-gearvn.com-products-ban-phim-fuhlen-l500s-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>
                                   </div>

                                  
                                </div>
                            
                                
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__row">
                    <div class="content__product">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Chuột giá rẻ</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Chuột gaming</li>
                                    <li class="content__product-header__link-item">Chuột wireless</li>
                                    <li class="content__product-header__link-item"> Lót chuột</li>
                                </ul>
                            </a>
                        </div>
                        <div class="content__product-wrap">
                            <div class="content__product-list">
                             
                                <div class=".grid__column-2">
                               <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                               </div>
                                </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://gstatic.gearvn.com/2021/12/yeh6ySNr-gearvn-Chuot-Rapoo-M300-Silent-Wireless-1-300x300.png" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/12/yeh6ySNr-gearvn-Chuot-Rapoo-M300-Silent-Wireless-1-300x300.png" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                                   </div>
                                </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>
                                   </div>

                                  
                                </div>
                            
                                
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__row mb0">
                    <div class="content__product">
                        <div class="content__product-header" >
                            <h2 class="content__product-header__heading">Sản phẩm dành cho bạn</h2>
                            <a href="" class="content__product-header__link">
                                <ul class="content__product-header__link-list ">
                                    <li class="content__product-header__link-item">Chuột</li>
                                    <li class="content__product-header__link-item">Bàn phím</li>
                                </ul>
                            </a>
                        </div>
                        <div class="content__product-wrap">
                            <div class="content__product-list content__product-list--mb40">
                             
                                <div class=".grid__column-2">
                               <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://gstatic.gearvn.com/2021/08/raAlXjwZ-logitech-g102-lightsync-rgb-white-1_eb113ff7e83b4289812fb9bff7034b4d-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                               </div>
                                </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-ban-phim-co-e-dra-ek384-300x300.png" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://gstatic.gearvn.com/2021/08/zfMgqMuZ-gearvn.com-products-laptop-gaming-acer-nitro-5-eagle-an515-57-74nu-7-Copy-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                         <div class=".grid__column-2">
                                            <div class="content__product-item-wrap">
                                                <a href="" class="content__product-item-link">
                                                    <div class="content__product-item">
                                                        <img src="https://gstatic.gearvn.com/2021/08/rTzxD4JI-gearvn-tai-nghe-dareu-eh416-rgb-1-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                        <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                    </div>
                                                </a>
                                                <div class="content__product-item__price-wrap">
                                                    <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                                </div>
             
                                            </div>
                                             </div>
                                             <div class=".grid__column-2">
                                                <div class="content__product-item-wrap">
                                                    <a href="" class="content__product-item-link">
                                                        <div class="content__product-item">
                                                            <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                            <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                        </div>
                                                    </a>
                                                    <div class="content__product-item__price-wrap">
                                                        <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                                    </div>
                 
                                                </div>
                                                 </div>
                                                 <div class=".grid__column-2">
                                                    <div class="content__product-item-wrap">
                                                        <a href="" class="content__product-item-link">
                                                            <div class="content__product-item">
                                                                <img src="https://gstatic.gearvn.com/2021/08/Td9gxoZd-gearvn-ban-phim-co-gaming-dareu-ek87-black-multi-led-1-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                            </div>
                                                        </a>
                                                        <div class="content__product-item__price-wrap">
                                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                                        </div>
                     
                                                    </div>
                                                     </div>
                                <div class=".grid__column-2">
                                    <div class="content__product-item-wrap">
                                        <a href="" class="content__product-item-link">
                                            <div class="content__product-item">
                                                <img src="https://gstatic.gearvn.com/2021/08/ZCtuXGwA-aoc_24g2_gearvn_26fe6139df4049a3b47cbcf4f0c89aa6-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                            </div>
                                        </a>
                                        <div class="content__product-item__price-wrap">
                                            <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                        </div>
     
                                    </div>
                                     </div>
                                     <div class=".grid__column-2">
                                        <div class="content__product-item-wrap">
                                            <a href="" class="content__product-item-link">
                                                <div class="content__product-item">
                                                    <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                                    <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                                </div>
                                            </a>
                                            <div class="content__product-item__price-wrap">
                                                <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                            </div>
         
                                        </div>
                                         </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://beta.gearvn.com/wp-content/uploads/2020/09/logitech-g102-lightsync-rgb-black-1_bf4f5774229c4a0f81b8e8a2feebe4d8-300x300.jpg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>

                                   </div>
                                </div>
                                <div class=".grid__column-2">
                                   <div class="content__product-item-wrap">
                                   <a href="" class="content__product-item-link">
                                       <div class="content__product-item">
                                           <img src="https://beta.gearvn.com/wp-content/uploads/2021/05/GEARVN-chuo%CC%A3t-fuhlen-g90-pink-300x300.jpeg" alt="" class="content__product-item__img content__product-item__img--full_width">
                                           <h3 class="content__product-item__name">iMac 24 2021 M1 8GPU 8GB 512GB MGPN3SA/A – Pink</h3>
                                       </div>
                                   </a>
                                   <div class="content__product-item__price-wrap">
                                       <p class="content__product-item__price">  24.390.000<span>đ</span></p>
                                   </div>
                                   </div>

                                  
                                </div>
                            
                                
                             
                            </div>
                        </div>
                    </div>
                </div>

                 
             </div>
         </div>
         <div class="footer">
             <div class="grid">
                 <div class="grid__row">
                    <div class="footer__news">
                        <div class="footer__news-text-wrap">
                            <h5 class="footer__news-text__heading">Đăng ký nhận bản tin GEARVN</h5>
                            <p class="footer__news-text">Nhận ngay thông tin về các chương trình khuyến mãi</p>
                        </div>

                        <div class="footer__news-seen-mail">
                            <input type="email" class="footer__news-seen-mail__input" placeholder="Email của bạn...">
                            <button class="btn btn--h50">Đăng ký</button>
                        </div>
                    </div>
                 </div>

                 <div class="grid__row">
                    <div class="footer__info">
                        <div class="grid__column-2-4 ">
                            <div class="footer__info-list-wrap">
                            <ul class="footer__info-list">
                                <li class="footer__info-item"> <h3 class="footer__info-item__heading">VỀ GEARVN</h3></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Giới thiệu về GEARVN</p></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Tuyển dụng khối Văn phòng</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Tuyển dụng khối Showroom</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Chính sách bảo mật</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Điều khoản sử dụng</p></a></li>
                            </ul>
                            </div>
                        </div>

                        <div class="grid__column-2-4 ">
                            <div class="footer__info-list-wrap">
                            <ul class="footer__info-list">
                                <li class="footer__info-item"> <h3 class="footer__info-item__heading">HỆ THỐNG TỔNG ĐÀI MIỄN PHÍ:</h3></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text "><span class="footer__info-item__text-black-color">(Làm việc từ 9:00 - 19:00)</span></p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Tổng đài mua hàng: <span>1800 6975</span> </p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Tổng đài hỗ trợ khách hàng:<span>1800 6173</span> </p></a></li>
                            </ul>
                        </div>
                        </div>

                        <div class="grid__column-2-4 ">
                            <div class="footer__info-list-wrap">
                            <ul class="footer__info-list">
                                <li class="footer__info-item"> <h3 class="footer__info-item__heading">THÔNG TIN</h3></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Theo dõi đơn hàng</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Mua & giao nhận hàng</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text">Quy định & hình thức thanh toán</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Bảo hành & bảo trì</p></a></li>
                                <li class="footer__info-item"><a href="" class="footer__info-item__link"> <p class="footer__info-item__text"> Đổi trả & hoàn tiền</p></a></li>
                            </ul>
                        </div>
                        </div>
                    
                        <div class="grid__column-2-4 ">
                            <div class="footer__info-list-wrap">
                            <ul class="footer__info-list">
                                <li class="footer__info-item"> <h3 class="footer__info-item__heading">ĐƠN VỊ VẬN CHUYỂN</h3></li>
                                <li class="footer__info-item footer__info-item--transport">
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/giao-hang-nhanh.png" alt="" class=""></div> 
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/giao-hang-ems.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/giao-hang-chanh-xe.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/giao-hang-gearvn.png" alt="" class=""></div>
                                </li>
                              
                            </ul>
                            <ul class="footer__info-list">
                                <li class="footer__info-item"> <h3 class="footer__info-item__heading">CÁCH THỨC THANH TOÁN</h3></li>
                                <li class="footer__info-item footer__info-item--payment">
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/internet.png" alt="" class=""></div> 
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/jcb.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/Mastercard.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/money-face.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/tra-gop.png" alt="" class=""></div> 
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/VISA.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/zalopay@3x.png" alt="" class=""></div>
                                    <div class="footer__info-item__img"><img src="https://gstatic.gearvn.com/2020/01/momooo.png" alt="" class=""></div>
                                </li>
                              
                            </ul>
                         </div>
                            
                        </div>
                       
                    </div>
                 </div>

                 <div class="grid__row">
                    <div class="footer__bottom">
                        <div class="grid__column-4">
                            <div class="footer__bottom-list-wrap">
                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2021/04/Logo-GEARVN_pc-300x70-1.png" alt="" class="footer__bottom-item__img-logo"></a></li>
                                </ul>
                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__name-heading">CÔNG TY TNHH THƯƠNG MẠI GEARVN</h3></li>
                                    <li class="footer__bottom-item ">
                                        <p class="footer__bottom-item__text">GearVN là doanh nghiệp chuyên cung cấp thiết bị, giải pháp về máy tính, thiết bị chơi game, thiết bị công nghệ cao cấp hàng đầu Việt Nam.</p>
                                    </li>
                                </ul>

                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2020/01/20150827110756-dathongbao.png" alt="" class="footer__bottom-item__img-certification"></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="grid__column-4">
                            <div class="footer__bottom-list-wrap">
                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__heading">HỆ THỐNG SHOWROOM</h3></li>
                                </ul>

                                <ul class="footer__bottom-list ">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__heading">SHOWROOM HCM (Làm việc từ 8:00 - 20:00)</h3></li>
                                
                                        <li class="footer__bottom-item ">
                                            <p class="footer__bottom-item-adress">Địa chỉ 1: 78-80-82 Hoàng Hoa Thám, Phường 12, Quận Tân Bình.</p>
                                        </li>
                                        <li class="footer__bottom-item ">
                                            <p class="footer__bottom-item-adress"> Địa chỉ 2: 905 Kha Vạn Cân, Phường Linh Tây, Thành phố Thủ Đức.</p>
                                        </li>
                                  
                                   
                                </ul>
                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__heading">SHOWROOM HN (Làm việc từ 9:00 - 19:00)</h3></li>
                                  
                                    <li class="footer__bottom-item ">
                                        <p class="footer__bottom-item-adress">Địa chỉ : 37 Ngõ 121 Thái Hà, Phường Trung Liệt, Quận Đống Đa.</p>
                                    </li>
                                   
                                </ul>
                            </div>

                        </div>
                        <div class="grid__column-2">
                            <div class="footer__bottom-list-wrap">

                                <ul class="footer__bottom-list ">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__heading">TIN TỨC CÔNG NGHỆ</h3></li>
                                    <li class="footer__bottom-item ">
                                        <div class=""><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2021/07/GVN360-04.png" alt="" class="footer__bottom-item__img-360"></a></div> 
                                    </li>
                                </ul>
                                <ul class="footer__bottom-list">
                                    <li class="footer__bottom-item"> <h3 class="footer__bottom-item__heading">KÉT NỐI VỚI CHÚNG TÔI</h3></li>
                                    <li class="footer__bottom-item footer__bottom-item--socials">
                                        <div class="footer__bottom-item__img"><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2020/01/facebook.png" alt="" class=""></a></div> 
                                        <div class="footer__bottom-item__img"><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2020/01/group.png" alt="" class=""></a></div>
                                        <div class="footer__bottom-item__img"><a href="" class="footer__bottom-item__link"><img src="https://gstatic.gearvn.com/2020/01/youtube.png" alt="" class=""></a></div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                 </div>

                </div>

                <div class="grid__row">
                    <p class="footer__copy-right">@Copy by Trinh Van Quoc</p>
                </div>

            </div>
         </div>

         <div class="modal">
             <div class="modal__overlay">
             </div>
             <div class="modal__body">
                 <!-- Modal login -->
                 <div class="modal__body-login modal__body-form">
                    <div class="modal__body-form-close btn-close-js">
                        <i class="fas fa-times modal__body-form-close-icon"></i>
                        <i class="fas fa-minus modal__body-form-close-icon"></i>
                    </div>
                    <div class="modal__body-form__container">
                        <div class="modal__body-form__content">
                            <div class="modal__body-heading-form">
                                <h4 class="modal__body-heading">Xin chào,</h4>
                                <div class="modal__body-text">Đăng nhập hoặc <span href="" class="modal__body-link modal__body-link-register">Tạo tài khoản</span></div>
                            </div>
                            <div class="modal__body-input-form">
                                <input type="text" class="modal__body-input" placeholder="Nhập Email hoặc Số điện thoại">
                                <input type="text" class="modal__body-input" placeholder="Nhập mật khẩu">
                                <div class="modal__body-help btn-forgot-pw-js">Quên mật khẩu?</div>
                               <button class="btn btn--full_width modal__body-btn">Đăng nhập</button>
                               <span class="modal__body-space">Hoặc tiếp tục bằng</span>
                            </div>
                            
                        </div>
                        <div class="modal__body-form-socials">
                            <div class="modal__body-form-socials-img">
                                <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/social_login/facebook.png" alt="">
                            </div>
                            <div class="modal__body-form-socials-img">
                                <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/social_login/google.png" alt="">
                            </div>
                        </div>
                   
                    </div>
                    <div class="modal__body-form">
                        <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/gbot-form-account.png" alt="Gearvn" >
   
                    </div>

                 </div>
               
                 <!-- Modal register -->
                 <div class="modal__body-register modal__body-form">
                    <div class="modal__body-form-close btn-close-js">
                        <i class="fas fa-times modal__body-form-close-icon"></i>
                        <i class="fas fa-minus modal__body-form-close-icon"></i>
                    </div>
                    <div class="modal__body-form__container">
                        <div class="modal__body-form__content">
                            <div class="modal__body-heading-form">
                                <h4 class="modal__body-heading">Xin chào,</h4>
                                <div class="modal__body-text">Tạo tài khoản hoặc <span class="modal__body-link modal__body-link-login">Đăng nhập</span></div>
                            </div>
                            <div class="modal__body-input-form">
                                <input type="text" class="modal__body-input" placeholder="Nhập họ tên">
                                <input type="text" class="modal__body-input" placeholder="Nhập số điện thoại">
                                <input type="text" class="modal__body-input" placeholder="Nhập email ">
                                <input type="text" class="modal__body-input" placeholder="Nhập mật khẩu">
                                <input type="text" class="modal__body-input" placeholder="Nhập lại mật khẩu">
                                <div href="" class="modal__body-help">Đã có mã OTP?</div>
                                <button class="btn btn--full_width modal__body-btn">Xác minh số điện thoại</button>
                    
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal__body-form">
                        <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/gbot-form-account.png" alt="Gearvn" >
   
                    </div>

                 </div>
                 
                 <!-- Modal forgot password -->
                 <div class="modal__body-forgot-password modal__body-form close">
                    <div class="modal__body-form-close btn-close-js">
                        <i class="fas fa-times modal__body-form-close-icon"></i>
                        <i class="fas fa-minus modal__body-form-close-icon"></i>
                    </div>
                    <div class="modal__body-form__container">
                        <div class="modal__body-form__content">
                            <div class="modal__body-heading-form">
                                <div class="modal__body-text modal__body-btn--return"> <span class="modal__body-link modal__body-link-login">Quay lại</span></div>
                                <h4 class="modal__body-heading">Quên mật khẩu?</h4>
                                <div class="modal__body-text">Vui lòng nhập thông tin tài khoản để lấy lại mật khẩu</div>
                            </div>
                            <div class="modal__body-input-form">
                                <input type="text" class="modal__body-input" placeholder="Nhập Email hoặc Số điện thoại">
                                <button class="btn btn--full_width modal__body-btn">Lấy lại mật khẩu</button>
                    
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal__body-form">
                        <img src="https://beta.gearvn.com/wp-content/themes/gearvn-electro-child-v1/assets/images/gbot-form-account.png" alt="Gearvn" >
   
                    </div>

                 </div>

             </div>
         </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>