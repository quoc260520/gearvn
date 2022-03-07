<div class="admin__container-slider__navbar">
    <ul class="admin__container-slider__navbar-list">
        
    <a href="{{ route('user') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_user'] }}">
            Danh sách admin
        </li>
    </a>
    <a href="{{ route('user.add') }}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_add_user']}}">
            Thêm admin
        </li>
    </a>
    <a href="{{ route('user.update',['id' => 0])}}" class="admin__link">
        <li class="admin__container-slider__navbar-list__item {{ $data['bg_update_user']}}">
            Cập nhật 
        </li>
    </a>

      
    </ul>
</div>