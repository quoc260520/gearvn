<div class="admin__container-slider__navbar">
    <ul class="admin__container-slider__navbar-list">
        <a href="{{ route('product') }}" class="admin__link">
            <li class="admin__container-slider__navbar-list__item {{ $data['bg_product'] }}">
                Danh sách sản phẩm
            </li>
        </a>
        <a href="{{ route('product.add') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_add_product'] }}">
           Thêm sản phẩm
        </li>
        </a>
        <a href="{{ route('product.update',['id' => 0])}}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_update_product'] }}">
            Cập nhật sản phẩm
        </li>
        </a>
      
    </ul>
</div>