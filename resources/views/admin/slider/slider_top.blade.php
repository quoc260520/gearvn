@extends('admin.slider.slider')
@section('slider_top')
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
          <form action="" method="post" class="admin__form" enctype="multipart/form-data">
            <span class="admin__container-slider__navbar__content-form__text">Ảnh</span>
            <input type="file" name="image_slider_top" id="" class="admin__container-slider__navbar__content-form__input">
            @error('image_slider_top')
                <span class="erros">{{ $message }}</span>
            @enderror
            <span class="admin__container-slider__navbar__content-form__text">Link</span>
            <input type="text" name="link_slider_top" id="" placeholder="Nhập link ở đây" class="admin__container-slider__navbar__content-form__input">
            @error('link_slider_top')
            <span class="erros">{{ $message }}</span>
             @enderror
            <button type="submit" name="" class="btn admin__container-slider__navbar__content-form__btn">Thêm</button>
            @csrf
         </form>
        </div>
    </div>
  

    <table class="admin__container-slider__navbar__content-table">
        <tr>
          <th style="width:5%">STT</th>
          <th style="width:40%;">Ảnh</th>
          <th style="width:40%">Link</th>
          <th style="width:15%">Xóa</th>
        </tr>
        @if(!empty($listSliderTop))
        @foreach($listSliderTop as $key => $items)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td><img src="{{ asset('/image/slider_top/'.$items->image)}}" class="admin__container-slider__navbar__content-table__img" alt="GearVN"></td>
          <td>{{ $items->link }}</td>
          <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('slider.slider-top.delete',['id' => $items->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
        </tr>
        @endforeach
        @else
        <tr> 
           <td colspan="4">Không có slider nào</td>
        </tr>
       @endif
       
      </table>                            
</div>
@endsection