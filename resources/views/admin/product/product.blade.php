@extends('admin.product.product_master')
@section('product')
@include('admin.product.header_product')
<div class="admin__container-slider__navbar__content">
<div class="admin__container-product__list">
    <h3 class="admin__container-product_heading">{{ $data['heading'] }}</h3>
    @if(session('msg'))
    <script>
      alert('{{ session('msg') }}')
    </script>
    @endif
    <table class="admin__container-slider__navbar__content-table">
        <tr>
          <th style="width:5%">STT</th>
          <th style="width:30%;">Tên sản phẩm</th>
          <th style="width:20%">Ảnh</th>
          <th style="width:15%;">Giá</th>
          <th style="width:10%">Sửa</th>
          <th style="width:10%">Xóa</th>
          <th style="width:10%">Ảnh sản phẩm</th>
        </tr>
        @if(!empty($listProducts))
        @foreach($listProducts as $key =>$product)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $product->product_name }}</td>
            <td><img src="{{ asset('/image/product/'.$product->product_image)}}" class="admin__container-slider__navbar__content-table__img" alt="GearVN"></td>
            <td>{{ $product->product_price}}</td>
            <td><a href="{{ route('product.update',['id' => $product->id]) }}" class="admin__link"><i class="fas fa-wrench admin__container-slider__navbar__content-table__icon"></i></a></td>
            <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('product.delete',['id' => $product->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
            <td><a href="{{ route('product.list-image',['id' => $product->id]) }}" class="admin__link"><i class="far fa-images admin__container-slider__navbar__content-table__icon"></i></a></td>
        </tr>
        @endforeach
        @else
          <tr>
            <td colspan="6">Không có san pham nao</td>
          </tr>
        @endif
      </table>  
</div> 
</div>
@endsection