@extends('admin.orders.orders_master')
@section('order_info')
      <div class="admin__container-product__list">
          <h3 class="admin__container-product_heading">{{ $data['heading'] }}</h3>
          @if(session('msg'))
          <script>
            alert('{{ session('msg') }}')
          </script>
          @endif
          <table class="admin__container-slider__navbar__content-table">
                  <tr>
                  <th style="width:5%">STT</th>
                  <th style="width:10%;">IdSp</th>
                  <th style="width:20%">Tên sản phẩm</th>
                  <th style="width:20%;">Ảnh</th>
                  <th style="width:20%">Giá</th>
                  <th style="width:10%">Số lượng</th>
                  <th style="width:15%">Tổng tiền</th>
                  </tr>
                  @if(!empty($order))
                      @foreach($order as $key =>$item)
                        <tr>
                            <td>{{$loop->index + 1 }}</td>
                            <td>{{ $item['productInfo']['id']}}</td>
                            <td>{{ $item['productInfo']['product_name'] }}</td>
                            <td><img src="{{ asset('/image/product/'.$item['productInfo']['product_image'])}}" class="admin__container-slider__navbar__content-table__img" alt="GearVN"></td>
                            <td>{{ $item['productInfo']['product_price'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ $item['price']}}</td>
                        </tr>
                      @endforeach
                  @else
                      <tr>
                        <td colspan="9">Không có đơn hàng nào</td>
                      </tr>
                  @endif
          </table>  
          <a href="{{ route('orders') }}" class="link btn" style="margin-top:20px;">Quay lại danh sách đơn hàng</a>
      </div> 
@endsection