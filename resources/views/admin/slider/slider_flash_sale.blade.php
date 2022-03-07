@extends('admin.slider.slider')
@section('slider_flash_sale')
@include('admin.slider.header_slider')
<div class="admin__container-slider__navbar__content">
    <div class="admin__container-slider__navbar__content-form">
        <h3 class="admin__container-slider__navbar__content-form__heading">{{ $data['heading'] }}</h3>
        @if(session('msg'))
        <script>
          alert('{{ session('msg') }}')
        </script>
        @endif
        <div class="admin__container-slider__navbar__content-form-wrap">
          <form action="" method="post" class="admin__form">
            <span class="admin__container-slider__navbar__content-form__text">Sản phẩm</span>
            <select name="product" id="" class="admin__container-product__add-form__select">
              <option value="">Sản phẩm</option>
              @foreach($listProduct as $key => $value)
              <option value="{{ $value->id }}">{{ $value->product_name }}</option>
              @endforeach
          </select>
            @error('image_banner')
            <span class="erros">{{ $message }}</span>
            @enderror
            <button class="btn admin__container-slider__navbar__content-form__btn">Thêm</button>
          @csrf
          </form>
        </div>
        

    </div>

    <table class="admin__container-slider__navbar__content-table">
        <tr>
          <th style="width:5%">STT</th>
          <th style="width:40%;">Sản phẩm</th>
          <th style="width:15%">Xóa</th>
        </tr>
        @foreach($listSlider as $key =>$item)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $item->product_name }}</td>
          <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('slider.delete-slider-flash-sale',['id' => $item->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
        </tr>
       @endforeach
       
      </table>                            
</div>
    
@endsection