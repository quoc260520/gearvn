<div class="admin__container-slider__navbar">
    <ul class="admin__container-slider__navbar-list">
        <a href="{{ route('slider') }}" class="admin__link">
            <li class="admin__container-slider__navbar-list__item {{$data['bg_banner']}}">
                Slider Banner
            </li>
        </a>
        <a href="{{ route('slider.slider-top') }}" class="admin__link">
            <li class="admin__container-slider__navbar-list__item {{$data['bg_top']}}">
                Slider Top
            </li>
        </a>
        <a href="{{ route('slider.slider-flash-sale') }}" class="admin__link">
            <li class="admin__container-slider__navbar-list__item {{$data['bg_top_pc']}}">
                Slider Flash Sale
            </li>
        </a>
        <a href="{{ route('slider.slider-top-pc') }}" class="admin__link">
            <li class="admin__container-slider__navbar-list__item {{$data['bg_flash_sale']}}">
                Slider Top PC 
            </li>
        </a>
    </ul>
</div>
