@extends('admin.product.product_master')
@section('add_product')
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
                    <form action="" method="post" enctype="multipart/form-data">
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Tên sản phẩm</span>
                                <input type="text" class="admin__container-product__add-form__input" name="product_name"  value="{{ old('product_name') }}"id="" placeholder="Nhập tên sản phẩm">
                                @error('product_name')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Ảnh</span>
                                <input type="file" class="admin__container-product__add-form__input"  value="{{ old('product_image') }}" name="product_image" id="" >
                                @error('product_image')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Giá</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{ old('product_price') }}" name="product_price" id="" placeholder="Nhập giá sản phẩm">
                                @error('product_price')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Danh mục</span>
                                <select name="category_product" id="" class="admin__container-product__add-form__select">
                                    <option value="">Danh mục sản phẩm</option>
                                    @foreach($listCategoryProduct as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->category_product_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_product')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Mô tả</span>
                                <textarea type="text" cols="80" rows="10"  class="admin__container-product__add-form__input" name="description" id="ckeditor_product" >
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span  class="admin__container-product__add-form__text">Bảo hành</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{ old('insurance') }}" name="insurance" id="" ></input>
                                @error('insurance')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Series laptop</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{ old('series_laptop') }}" name="series_laptop" id="" ></input>
                                @error('series_laptop')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Tình trạng</span>
                                <select name="status" id="" class="admin__container-product__add-form__select">
                                    <option value="con">Còn hàng</option>
                                    <option value="het">Hết hàng</option>
                                </select>
                                @error('status')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <h3 class="admin__container-product_heading">Chi tiết sản phẩm</h3>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">CPU</span>
                                <input type="text" class="admin__container-product__add-form__input" name="cpu"  value="{{ old('cpu') }}" id="" >
                                @error('cpu')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">RAM</span>
                                <input type="text" class="admin__container-product__add-form__input" name="ram"  value="{{ old('ram') }}" id="" >
                                @error('ram')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Ổ lưu trữ</span>
                                <input type="text" class="admin__container-product__add-form__input" name="rom"  value="{{ old('rom') }}" id="" >
                                @error('rom')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Card đồ họa</span>
                                <input type="text" class="admin__container-product__add-form__input" name="card"  value="{{ old('card') }}" id="" >
                                @error('card')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Màn hình</span>
                                <input type="text" class="admin__container-product__add-form__input" name="screen"  value="{{ old('screen') }}" id="" >
                                @error('screen')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Bàn phím</span>
                                <input type="text" class="admin__container-product__add-form__input" name="keyboard"  value="{{ old('keyboard') }}" id="" >
                                @error('keyboard')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Audio</span>
                                <input type="text" class="admin__container-product__add-form__input" name="audio" id="" >
                                @error('audio')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Đọc thẻ nhớ</span>
                                <input type="text" class="admin__container-product__add-form__input" name="read_memory_card"  value="{{ old('read_memory_card') }}"     id="" >
                                @error('read_memory_card')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kết nối có dây (LAN)</span>
                                <input type="text" class="admin__container-product__add-form__input" name="lan"  value="{{ old('lan') }}"   id="" >
                                @error('lan')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kết nối không dây</span>
                                <input type="text" class="admin__container-product__add-form__input" name="wireless_connectivity"  value="{{ old('wireless_connectivity') }}"   id="" >
                                @error('wireless_connectivity')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>   
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Webcam</span>
                                <input type="text" class="admin__container-product__add-form__input" name="webcam"  value="{{ old('webcam') }}"   id="" >
                                @error('webcam')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Cổng giao tiếp</span>
                                <input type="text" class="admin__container-product__add-form__input" name="the_web_of_communication"  value="{{ old('the_web_of_communication') }}"   id="" >
                                @error('the_web_of_communication')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Hệ điều hành</span>
                                <input type="text" class="admin__container-product__add-form__input" name="operating_system"  value="{{ old('operating_system') }}" id="" >
                                @error('operating_system')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Pin</span>
                                <input type="text" class="admin__container-product__add-form__input" name="battery"  value="{{ old('battery') }}" id="" >
                                @error('battery')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Trọng lượng</span>
                                <input type="text" class="admin__container-product__add-form__input" name="weight"  value="{{ old('weight') }}" id="" >
                                @error('weight')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kích thước</span>
                                <input type="text" class="admin__container-product__add-form__input" name="size"  value="{{ old('size') }}" id="" >
                                @error('size')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Màu sắc</span>
                                <input type="text" class="admin__container-product__add-form__input" name="color"  value="{{ old('color') }}" id="" >
                                @error('color')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Bảo mật</span>
                                <input type="text" class="admin__container-product__add-form__input" name="security"  value="{{ old('security') }}" id="" >
                                @error('security')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" name="" class="btn admin__container-product__add-btn">Thêm</button>
                    @csrf
                    </form>   
                </div>
            </div>
    </div>   
</div>
</div>
@endsection