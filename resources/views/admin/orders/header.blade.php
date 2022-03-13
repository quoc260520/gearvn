<div class="admin__container-slider__navbar">
    <ul class="admin__container-slider__navbar-list" style="margin-left:-27px;">
        <form action="" method="get" style="display: flex;">
        <button  style="border:none;">
            <input type="hidden" name="all" value="all">
            <li class="admin__container-slider__navbar-list__item {{ $data['nav_bg'] }}">
                Tất cả đơn hàng
            </li>
        </button>
        </form>
        <form action="" method="get" style="display: flex;">
        <button  style="border:none;">
            <input type="hidden" name="status_1" value="1">
        <li class="admin__container-slider__navbar-list__item {{ $data['nav_bg'] }}">
                Chờ xác nhận
        </li>
        </button>
        </form>
        <form action="" method="get" style="display: flex;">
        <button  style="border:none;">
            <input type="hidden" name="status_2" value="2">
        <li class="admin__container-slider__navbar-list__item {{ $data['nav_bg'] }}">
               Đã xác nhận
        </li>
        </button>
        </form>
        <form action="" method="get" style="display: flex;">
        <button  style="border:none;">
            <input type="hidden" name="status_3" value="3">
            <li class="admin__container-slider__navbar-list__item {{ $data['nav_bg'] }}">
                   Giao hàng thành công
            </li>
        </button>
       </form>
        </ul>
</div>