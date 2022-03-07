@extends('admin.admin_master')
@section('user_admin')
<div class="grid__column-10">
                    <div class="admin__container admin__container-admin">
                        @include('admin.header_admin')
                        <div class="admin__container-slider__navbar__content">
                            @yield('list_user')
                            @yield('add_user')
                            @yield('update_user')
                        </div>
                    </div>
                </div> 
@endsection