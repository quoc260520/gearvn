<div class="admin__slider-bar">
    <div class="admin__slider-bar__header">
        <i class="fas fa-user-cog admin__slider-bar__header__icon"></i>
        <a href="{{ route('home') }}" class="admin__slider-bar__header__link">Admin</a>
    </div>
    
    <ul class="admin_side-bar__list">
        <a href="{{ route('home') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{ $data['bg_home'] }}">
                <i class="fas fa-house-damage admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Home</span>
            </li>
        </a>
        <a href="{{ route('slider') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{$data['bg_slider_sidebar']  }}">
                <i class="fas fa-sliders-h admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Slider</span>
            </li>
        </a>
        <a href="{{ route('category') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{ $data['bg_category_sidebar'] }}">
                <i class="fas  fa-list-alt admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Danh mục</span>
            </li>
        </a>
        <a href="{{ route('product') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{ $data['bg_product_sidebar'] }}">
                <i class="fas fa-desktop admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Sản phẩm</span>
            </li>
        </a>
        <a href="{{ route('orders') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{ $data['bg_order_sidebar'] }}">
                <i class="fas fa-chart-pie admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Đơn hàng</span>
            </li>
        </a>
        <a href="{{ route('user') }}" class="admin__link">
            <li class="admin_side-bar__list-item {{ $data['bg_user_sidebar'] }}">
                <i class="fas fa-user-plus admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Admin</span>
            </li>
        </a>
        <a href="{{ route('index') }}" class="admin__link">
            <li class="admin_side-bar__list-item">
                <i class="fas fa-exchange-alt admin__slider-bar__list-item__icon"></i>
                <span class="admin_side-bar__list-item-text">Quay lại trang chủ</span>
            </li>
        </a>
    </ul>
    
</div>