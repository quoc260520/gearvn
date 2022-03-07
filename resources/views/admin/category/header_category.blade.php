<div class="admin__container-slider__navbar">
    <ul class="admin__container-slider__navbar-list">
        
    <a href="{{ route('category') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_category'] }}">
            Danh mục
        </li>
    </a>
    <a href="{{ route('category.local') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_category_local'] }}">
            Danh mục hãng
        </li>
    </a>
    <a href="{{ route('category.product') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_category_product']}}">
            Danh mục sản phẩm
        </li>
    </a>
    
    
      
    </ul>
</div>