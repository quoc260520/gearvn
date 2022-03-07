<div class="admin__container-header">
    <h1 class="admin__container-header__heading">{{ $data['header'] }}</h1>
    <div class="admin__container-herder__info">
        <div class="admin__container-herder__info-wrapper">
            <div class="admin__container-herder__info-img">
                <img src="{{ asset('/image/admin/'.$user->image) }}" alt="">
            </div>
            <div class="admin__container-herder__info-name">
                {{ $user->name }}
            </div>
        </div>
        <a href="{{ route('logout') }}" class="admin__container-header__link">Đăng xuất</a>
    </div>
  
</div>