<div class="banner ">
            <div class="banner__sliders">
                @foreach($listSliderBanner as $key => $items)
                <div class="banner__item banner__slider">
                    <a href="{{ $items->link }}" class="banner__slider-link"><img class="banner__img" src="{{ '/image/slider_banner/'.$items->image }}"></a>
                </div>
              @endforeach
            </div>
  </div>
