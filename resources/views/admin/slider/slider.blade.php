@extends('admin.admin_master')
@section('slider')
<div class="grid__column-10">
                    <div class="admin__container admin__container-slider">
                      @include('admin.header_admin')
                      @yield('slider_flash_sale')
                      @yield('slider_top_pc')
                      @yield('slider_top')
                      @yield('slider_banner')
                    </div>
</div> 
    
@endsection