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
                    <form action="" method="post" class="admin__form">
                       <input type="text" class="modal__body-input" placeholder="Nhập Email hoặc Số điện thoại" name="email_login" value="{{ old('email_login') }}">
                       <input type="text" class="modal__body-input" placeholder="Nhập mật khẩu" name="password_login" value="{{ old('password_login') }}">
                       <div class="modal__body-help btn-forgot-pw-js">Quên mật khẩu?</div>
                       <button type="submit" class="btn btn--full_width modal__body-btn">Đăng nhập</button>
                       @csrf
                    </form>
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