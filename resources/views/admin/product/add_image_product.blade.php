@extends('admin.product.product_master')
@section('add_image_product')
@include('admin.product.header_product')
<div class="admin__container-slider__navbar__content">
<div class="admin__container-product__add">
    <div class="admin__container-product__add-wrapper">
            <div class="admin__container-product__add-wrap">
                <h3 class="admin__container-product_heading">{{ $data['heading'] }}</h3>
                @if(session('msg'))
                <script>
                  alert('{{ session('msg') }}')
                </script>
                @endif
                <div class="admin__container-product__add-form">
                    <form action="" method="post" enctype="multipart/form-data" >
                            <div class="grid__row admin__container-product__add-form__row" >
                                <span class="admin__container-product__add-form__text">Ảnh</span>
                                <input type="file" class="admin__container-product__add-form__input"  value="{{ old('image_product') }}" name="image_product" id="" >
                            </div>
                            <div class="grid__row admin__container-product__add-form__row" >
                            @error('image_product')
                            <span class="erros">{{ $message }}</span>
                            @enderror
                            </div>
                            
                            <button type="submit" name="" class="btn admin__container-product__add-btn">Thêm</button>
                    @csrf
                    </form>   
                </div>

                <table class="admin__container-slider__navbar__content-table" style="margin-top:30px;">
                    <tr>
                      <th style="width:25%">STT</th>
                      <th style="width:50%">Ảnh</th>
                      <th style="width:25%">Xóa</th>
                    </tr>
                    @if(!empty($listImageProducts))
                    @foreach($listImageProducts as $key =>$image)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('/image/image_product/'.$image->image)}}" class="admin__container-slider__navbar__content-table__img" alt="GearVN"></td>
                        <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('product.delete-image',['id' => $image->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="6">Không có ảnh nào</td>
                      </tr>
                    @endif
                  </table>  
            </div>
    </div>   
</div>
</div>
@endsection