<div class="modal_product-slider-img close">
    <div class="modal_product-slider-img__modal "> 
        <div class="modal_product-slider-img__overlay"></div>
        <div class="modal_product-slider-img__modal-close">
            <i class="fas fa-times"></i>
        </div>
        <div class="modal_product-slider-img__modal-body-wrap">
            <div class="modal_product-slider-img__modal-body">
                <i class="fas fa-caret-left modal__icon-left"></i>
                <div class="modal__body-slider">
                    <div class="modal__body-slider-wrap">
                        @if (!empty($listImg))
                        @foreach($listImg as $item)
                        <div class="modal__body-slider-img"><img src="{{ asset('image/image_product/'.$item->image) }}" alt=""></div>
                        @endforeach
                        @endif
                    </div>
                </div>
          
                <div class="modal__body-list-img">
                    @if (!empty($listImg))
                    @foreach($listImg as $item)
                    <div class="modal__body-item-img"><img src="{{ asset('image/image_product/'.$item->image) }}" alt=""></div>
                    @endforeach
                    @endif
                </div>
                <i class="fas fa-caret-right modal__icon-right"></i>
            </div>
            <div class="modal_product-slider-img__modal-info">
                <div class="modal__body-slider">
                     <h2 class="modal_product-slider-img__modal-info_heading">{{ $product->product_name}}</h2>
                     <div class="modal_product-slider-img__modal-info__img">
                         <img src="{{ asset('/image/product/'.$product->product_image) }}" alt="">
                     </div>
                     <div class="modal_product-slider-img__modal-info_header">Thông tin chung</div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">Thương hiệu:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">Acer</div>
                     </div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">Bảo hành:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">12 tháng</div>
                     </div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">Series laptop:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">Acer Predator Helios 300 PH315 54 75YD</div>
                     </div>
                     <div class="modal_product-slider-img__modal-info_header">Cấu hình chi tiết</div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">CPU:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">Intel® Core™ i7-11800H upto 4.60GHz, 8 nhân 16 luồng</div>
                     </div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">RAM:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">16GB (8x2) DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)</div>
                     </div>
                     <div class="modal_product-slider-img__modal-info_row">
                        <div class="modal_product-slider-img__modal-info_row-parameter">Series laptop:</div>
                        <div class="modal_product-slider-img__modal-info_row-text">Acer Predator Helios 300 PH315 54 75YD</div>
                     </div>
                    
                  
                </div>
            </div>

        </div> 


        <div class="modal_product-info">
        </div>

        
    </div>
 </div>