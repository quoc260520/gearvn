@extends('admin.category.category_master')
@section('category_local')
@include('admin.category.header_category')
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
            <span class="admin__container-slider__navbar__content-form__text">Tên danh mục hãng</span>
            <input type="text" name="category_local_name" id="" value="{{ old('category_local_name') }}"placeholder="Nhập tên ở đây" class="admin__container-slider__navbar__content-form__input">
            @error('category_local_name')
            <span class="erros">{{ $message }}</span>
            @enderror
            <button  type="submit" class="btn admin__container-slider__navbar__content-form__btn">Thêm</button>
            @csrf
          </form>
        </div>
        

    </div>
    @include('admin.category.category_list_local')
          
</div>
@endsection