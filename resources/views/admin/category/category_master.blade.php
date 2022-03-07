@extends('admin.admin_master')
@section('category_master')
<div class="grid__column-10">
    <div class="admin__container admin__container-category">
        @include('admin.header_admin')
        @yield('category')
        @yield('category_update')
        @yield('category_local')
        @yield('category_local_update')
        @yield('category_product')
        @yield('category_product_update')
    </div>
</div> 
    
@endsection
