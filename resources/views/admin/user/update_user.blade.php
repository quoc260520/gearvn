@extends('admin.user.user_admin')
@section('update_user')
@include('admin.user.header_user')
<div class="admin__container-product__add-wrap">
    <h3 class="admin__container-product_heading">{{$data['heading']  }}</h3>
    @if(session('msg'))
    <script>
      alert('{{ session('msg') }}')
    </script>
    @endif
    <div class="admin__container-product__add-form">
        <form action="{{ route('user.post-update') }}" method="post" enctype="multipart/form-data">
            <div class="grid__row admin__container-product__add-form__row">
                <span class="admin__container-product__add-form__text">Họ và tên</span>
                <div class="column">
                <input type="text" class="admin__container-product__add-form__input" value="{{($admin->name) ?? old('name') }}" name="name" id="" placeholder="Họ và tên">
                @error('name')
                <span class="erros mt_10">{{ $message }}</span>
                @enderror
                </div>
            </div>
         
            <div class="grid__row admin__container-product__add-form__row">
                <span class="admin__container-product__add-form__text">Email</span>
                <div class="column">
                <input type="email" class="admin__container-product__add-form__input" value="{{$admin->email ?? old('email') }}" name="email" id="" placeholder="Email">
                @error('email')
                <span class="erros mt_10">{{ $message }}</span>
                @enderror
                @if(session('mes'))
                  <span class="erros mt_10">{{ session('mes') }}</span>
                @endif
                </div>
            </div>
            <div class="grid__row admin__container-product__add-form__row">
                <span class="admin__container-product__add-form__text">Mật khẩu</span>
                <div class="column">
                <input type="text" class="admin__container-product__add-form__input" value="{{ $admin->password ?? old('password') }}" name="password" id="" placeholder="Mật khẩu">
                @error('password')
                <span class="erros mt_10">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="grid__row admin__container-product__add-form__row">
                <span class="admin__container-product__add-form__text">Ngày sinh</span>
                <div class="column">
                <input type="date" class="admin__container-product__add-form__input" value="{{ $admin->date_of_birth ?? old('date_of_birth') }}" name="date_of_birth" id="" placeholder="">
                @error('date_of_bith')
                <span class="erros mt_10">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="grid__row admin__container-product__add-form__row">
                <span class="admin__container-product__add-form__text">Ảnh</span>
                <div class="column">
                <input type="file" class="admin__container-product__add-form__input" value="{{$admin->image ?? old('image') }}" name="image" id="" placeholder="">
                @error('image')
                <span class="erros mt_10">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn admin__container-product__add-btn">Cập nhật</button>
        @csrf
       </form>
    </div>
    
</div>
@endsection