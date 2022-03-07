@extends('admin.product.product_master')
@section('update_product')
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
                    <form action="{{ route('product.post-update') }}" method="post" enctype="multipart/form-data">
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Tên sản phẩm</span>
                                <input type="text" class="admin__container-product__add-form__input" name="product_name" value="{{$product->product_name ?? old('product_name') }}" id="" placeholder="Nhập tên sản phẩm">
                                @error('product_name')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Ảnh</span>
                                <input type="file" class="admin__container-product__add-form__input"  value="{{ old('product_image_update') }}" name="product_image_update" id="" >
                                @error('product_image_update')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text"></span>
                                <img class="admin__img" src="{{ '/image/product/'.$product->product_image }}" alt="">
                            </div>

                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Giá</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{$product->product_price ?? old('product_price') }}" name="product_price" id="" placeholder="Nhập giá sản phẩm">
                                @error('product_price')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Danh mục</span>
                                <select name="category_product" id="" class="admin__container-product__add-form__select">
                                    <option value="{{ $categoryProduct->id }}">{{ $categoryProduct->category_product_name }}</option>
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
                                <textarea type="text" cols="80" rows="10" class="admin__container-product__add-form__input" name="description" id="ckeditor_product" >
                                   {{$product->description ?? old('description') }}
                                </textarea>
                                @error('description')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span  class="admin__container-product__add-form__text">Bảo hành</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{$product->insurance ?? old('insurance') }}" name="insurance" id="" ></input>
                                @error('insurance')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Series laptop</span>
                                <input type="text" class="admin__container-product__add-form__input"  value="{{$product->series_laptop ?? old('series_laptop') }}" name="series_laptop" id="" ></input>
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
                                <input type="text" class="admin__container-product__add-form__input" value="{{$product->cpu ?? old('cpu') }}" name="cpu" id="" >
                                @error('cpu')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">RAM</span>
                                <input type="text" class="admin__container-product__add-form__input" name="ram" value="{{$product->ram ?? old('ram') }}" id="" >
                                @error('ram')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Ổ lưu trữ</span>
                                <input type="text" class="admin__container-product__add-form__input" name="rom" value="{{$product->rom ?? old('rom') }}" id="" >
                                @error('rom')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Card đồ họa</span>
                                <input type="text" class="admin__container-product__add-form__input" name="card" value="{{$product->card ?? old('card') }}" id="" >
                                @error('card')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Màn hình</span>
                                <input type="text" class="admin__container-product__add-form__input" name="screen" value="{{$product->screen ?? old('screen') }}" id="" >
                                @error('screen')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Bàn phím</span>
                                <input type="text" class="admin__container-product__add-form__input" name="keyboard" value="{{$product->keyboard ?? old('keyboard') }}" id="" >
                                @error('keyboard')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Audio</span>
                                <input type="text" class="admin__container-product__add-form__input" name="audio" value="{{$product->audio ?? old('audio') }}" id="" >
                                @error('audio')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Đọc thẻ nhớ</span>
                                <input type="text" class="admin__container-product__add-form__input" name="read_memory_card" value="{{$product->read_memory_card ?? old('read_memory_card') }}" id="" >
                                @error('read_memory_card')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kết nối có dây (LAN)</span>
                                <input type="text" class="admin__container-product__add-form__input" name="lan" value="{{$product->lan ?? old('lan') }}" id="" >
                                @error('lan')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kết nối không dây</span>
                                <input type="text" class="admin__container-product__add-form__input" name="wireless_connectivity" value="{{$product->wireless_connectivity ?? old('wireless_connectivity') }}" id="" >
                                @error('wireless_connectivity')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>   
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Webcam</span>
                                <input type="text" class="admin__container-product__add-form__input" name="webcam" value="{{$product->webcam ?? old('webcam') }}" id="" >
                                @error('webcam')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Cổng giao tiếp</span>
                                <input type="text" class="admin__container-product__add-form__input" name="the_web_of_communication" value="{{$product->the_web_of_communication ?? old('the_web_of_communication') }}" id="" >
                                @error('the_web_of_communication')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Hệ điều hành</span>
                                <input type="text" class="admin__container-product__add-form__input" name="operating_system" value="{{$product->operating_system ?? old('operating_system') }}" id="" >
                                @error('operating_system')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Pin</span>
                                <input type="text" class="admin__container-product__add-form__input" name="battery" value="{{$product->battery ?? old('battery') }}" id="" >
                                @error('battery')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Trọng lượng</span>
                                <input type="text" class="admin__container-product__add-form__input" name="weight" value="{{$product->weight ?? old('weight') }}" id="" >
                                @error('weight')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Kích thước</span>
                                <input type="text" class="admin__container-product__add-form__input" name="size" value="{{$product->size ?? old('size') }}" id="" >
                                @error('size')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Màu sắc</span>
                                <input type="text" class="admin__container-product__add-form__input" name="color" value="{{$product->color ?? old('color') }}" id="" >
                                @error('color')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="grid__row admin__container-product__add-form__row">
                                <span class="admin__container-product__add-form__text">Bảo mật</span>
                                <input type="text" class="admin__container-product__add-form__input" name="security" value="{{$product->security ?? old('security') }}" id="" >
                                @error('security')
                                <span class="erros">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" name="" class="btn admin__container-product__add-btn">Cập nhật</button>
                    @csrf
                    </form>   
                </div>
            </div>
    </div>   
</div>
</div>
@endsection