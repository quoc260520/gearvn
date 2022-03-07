@extends('admin.admin_master')
@section('product_master')
 <div class="grid__column-10">
                    <div class="admin__container admin__container-product">
                        @include('admin.header_admin')
                          @yield('product') 
                          @yield('add_product')
                          @yield('update_product')
                          @yield('add_image_product')
@endsection