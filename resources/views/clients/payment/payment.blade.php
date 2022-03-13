@extends('clients.payment.payment_master')
@section('payment')
<div class="payment__container-left">
    <div class="payment__container-left-wrap">
        <h1 class="payment__container-left__heading--top">
            GEARVN.COM
        </h1>
        <div class="payment__container-left__path">
            <a href="{{ route('index.cart') }}" class="payment__container-left__path-link payment__container-left__path-link--blue">Giỏ hàng</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="" class="payment__container-left__path-link">Thông tin thanh toán</a> <span class="payment__container-left__path-icon"> <i class="fas fa-chevron-right"></i></span>
            <a href="{{ route('payment_method') }}" class="payment__container-left__path-link payment__container-left__path-link--blue">Phương thức thanh toán</a>
            
        </div>
        <h2 class="payment__container-left__heading">Thông tin giao hàng</h2>
        @if(Session::has('dataCart'))
        <form action="{{ route('post-payment') }}" method="post">
        <div class="payment__container-left__form">
            <input type="text" placeholder="Họ và tên" class="payment__container-left__input-name" name="full_name" value=" {{old('full_name') ?? Session('dataCart')['full_name'] }}">
        </div>
        @error('full_name')
            <span class="erros mt_10">{{ $message }}</span>
        @enderror
        <div class="payment__container-left__form">
            <div class="payment__container-left__input-info ">
               <div class="form-fl-2">
                <div class="payment__container-left__form-col-2">
                    <input type="email" value="{{ old('email') ?? Session('dataCart')['email'] }}" placeholder="Email" class="payment__container-left__input-email" name="email">
                </div>
                @error('email')
                    <span class="erros mt_10">{{ $message }}</span>
                @enderror
               </div>
               
               <div class="form-fl-1">
                    <div class="payment__container-left__form-col-2">
                        <input type="text" value="{{ old('phone') ?? Session('dataCart')['phone'] }}" placeholder="Số điện thoại" class="payment__container-left__input-phone" name="phone">
                    </div>
                    @error('phone')
                        <span class="erros mt_10">{{ $message }}</span>
                    @enderror
               </div>
            </div>
        </div>
       
        <div class="payment__container-left__form">
            <input type="text" value="{{ old('address') ?? Session('dataCart')['address'] }}" placeholder="Địa chỉ" class="payment__container-left__input-addres" name="address">
        </div>
        @error('address')
            <span class="erros mt_10">{{ $message }}</span>
        @enderror
      
        <div class="payment__container-left__form">
            <div class="payment__container-left__select-info">
                <div class="form-fl-1" style="margin-right: 10px;">
                    <div class="payment__container-left__form-col-2">
                        <select name="city" id="city" class="payment__container-left__select-conscious choose">
                            <option value="">Chọn tỉnh / thành</option>
                            @foreach($listCity as $city)
                            <option value="{{ $city->matp }}">{{ $city->name }}</option>
                            @endforeach
                        </select> 
                    </div>
                    @error('city')
                    <span class="erros mt_10">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-fl-1" style="margin-right: 5px;">
                    <div class="payment__container-left__form-col-2">
                        <select name="district" id="district" class="payment__container-left__select-district">
                            <option value="">Chọn quận / huyện</option>
                          </select>
                    </div>
                    @error('district')
                    <span class="erros mt_10">{{ $message }}</span>
                    @enderror
                </div>
                
             </div>
        </div>
       
     
        <div class="payment__container-left__form">
            <div class="payment__container-left__btn-wrap">
                <a href="{{ route('index.cart') }}" class="payment__container-left__link--cart">Giỏ hàng</a>
                <a href="{{ route('payment_method') }}" class="link"><button type="submit" class="btn btn-payment">Tiếp tục đến phương thức thanh toán</button></a>
              </div>
        </div>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @csrf
    </form>
    @endif
    </div>
</div>
{{-- Ajax --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.choose').on('change',(function(){
            var action = $(this).attr('id');
            var matp = $(this).val();
            var _token = $('meta[name="csrf-token"]').attr('content');
            var $result = '';
            $.ajax({
                url: '{{ url('index/get-district') }}',
                method: 'POST',
                data: {
                    action:action,
                    matp:matp,
                    _token:_token
                },
                success:function(data){
                    $('#district').html(data);
                }
            });
        }));
    });
</script>
@endsection