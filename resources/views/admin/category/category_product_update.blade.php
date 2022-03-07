@extends('admin.category.category_master')
@section('category_product_update')
@include('admin.category.header_category')
<div class="admin__container-slider__navbar__content">
    <div class="admin__container-slider__navbar__content-form">
        <h3 class="admin__container-slider__navbar__content-form__heading">{{ $data['heading']  }}</h3>
        @if(session('msg'))
        <script>
          alert('{{ session('msg') }}')
        </script>
        @endif
        <div class="admin__container-slider__navbar__content-form-wrap">
          <form action="{{ route('category.product.post-update') }}" method="post" class="admin__form">
            <span class="admin__container-slider__navbar__content-form__text">Tên danh mục sản phẩm</span>
            <input type="text" name="category_product_name" value="{{old('category_product_name') ?? $categoryProduct->category_product_name }}"id="" placeholder="Nhập tên ở đây" class="admin__container-slider__navbar__content-form__input">
            @error('category_product_name')
            <span class="erros">{{ $message }}</span>
            @enderror
            <span class="admin__container-slider__navbar__content-form__text">Danh mục</span>
            <select name="category_id" id="cars" class="admin__container-product__add-form__select">
              <option value="{{ $category->id }}">{{ $category->category_name ?? 'Danh mục' }}</option>
              @foreach($listCategory as $key => $items)
                  <option value="{{$items->id }}">{{$items->category_name }}</option>
              @endforeach
            </select>
            @error('category_id')
            <span class="erros">{{ $message }}</span>
            @enderror
            <span class="admin__container-slider__navbar__content-form__text">Danh mục hãng</span>
            <select name="category_local_id" id="cars" class="admin__container-product__add-form__select">
              <option value="{{ $categoryLocal->id }}">{{ $categoryLocal->category_local_name ?? 'Danh mục hãng' }}</option>
              @foreach($listCategoryLocal as $key => $items)
              <option value="{{$items->id }}">{{ $items->category_local_name  }}</option>
              @endforeach
            </select>
            @error('category_local_id')
            <span class="erros">{{ $message }}</span>
            @enderror
            <button  type="submit" class="btn admin__container-slider__navbar__content-form__btn">Cập nhật</button>
          @csrf 
        </form>
        </div>
    </div>

    @include('admin.category.category_product_list')      
</div>
@endsection