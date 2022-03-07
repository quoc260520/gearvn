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
                       <a href="#" class="header__logo-link">
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
                  <div class="header__search-cart">
                      <i class="fas fa-shopping-cart header__search-cart-icon"></i>
                      <span class="header__search-cart-number">0</span>
                      <span class="header__search-cart-text">Giỏ hàng</span>
                  </div>
               </div>


    </div>

    <div class="header__bottom">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2">
                    <div class="header__bottom-list-product btn__list_category-js">
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