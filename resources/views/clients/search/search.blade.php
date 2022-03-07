@extends('clients.client_master_page')
@section('search')
<div class="content__search">
    <div class="content__search-path">
        <div class="grid">
           <a href="{{ route('index') }}" class="content__search-path__link">Trang chủ</a> <i class="fas fa-chevron-right content__search-path__icon"></i> <span class="content__search-path__number">Tìm kiếm</span> 
        </div>
    </div>
   <div class="content__search-products-wrap">
    <div class="grid">
        <div class="grid__row">
           <div class="content__search-products">
               <div class="content__search-products-header">
                   <h1 class="content__search-products-header">  
                       <span class="content__search-products-number">{{ $listProduct->count() }}</span>Kết quả
                   </h1>

               </div>

               <div class="content__search-product-container">
                   <div class="content__search-product-sort">
                       <span class="content__search-product-sort__text">Sắp xếp theo:</span>
                       <a href="" class="link"><button class="content__search-product-sort__btn">Bán chạy</button></a>
                       <a href="" class="link"><button class="content__search-product-sort__btn">Giá thấp đến cao </button></a>
                       <a href="" class="link"><button class="content__search-product-sort__btn">Giá cao đến thấp</button></a>
                   </div>

                   <div class="content__search-product">
                       @foreach($listProduct as $product)
                       <div class=".grid__column-2-4">
                           <div class="content__product-item-wrap__1">
                               <a href="{{route('product-detail',['id' => $product->id]) }}" class="content__product-item-link">
                                   <div class="content__product-item">
                                       <img src="{{ asset('/image/product/'.$product->product_image) }}" alt="Gearvn" class="content__product-item__img content__product-item__img--full_width">
                                       <h3 class="content__product-item__name">{{ $product->product_name }}</h3>
                                   </div>
                               </a>
                               <div class="content__product-item__price-wrap">
                                   <p class="content__product-item__price">{{ $product->product_price }}<span>đ</span></p>
                               </div>

                           </div>
                       </div>
                       @endforeach
                                           
                   </div>

                  
                 
               </div>
               {{ $listProduct->links('clients.view_master.pagination') }}

           </div>
        </div>
      

    </div>
   </div>

   
</div>

@endsection