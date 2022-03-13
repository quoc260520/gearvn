@extends('admin.admin_master')
@section('orders_master')
<div class="grid__column-10">
                    <div class="admin__container">
                        @include('admin.header_admin')
                        <div class="admin__container-slider__navbar__content">
                           @yield('orders')
                           @yield('order_info')
                        </div>
                    </div>
</div>
@endsection