@extends('admin.orders.orders_master')
@section('orders')
      <div class="admin__container-product__list">
          <h3 class="admin__container-product_heading">{{ $data['heading'] }}</h3>
          @if(session('msg'))
          <script>
            alert('{{ session('msg') }}')
          </script>
          @endif
          @include('admin.orders.header')
          <form class="" method="get" style="margin:20px 0;">
               <input type="text" style="width:400px;margin-right:30px;" class="admin__container-product__add-form__input" name="name_cus" id="" placeholder="Họ tên khách hàng">
               <button type="submit" class="btn">Tìm kiếm</button>
          </form>
          <table class="admin__container-slider__navbar__content-table">
                  <tr>
                  <th style="width:5%">STT</th>
                  <th style="width:10%;">ID</th>
                  <th style="width:20%">Tên khách hàng</th>
                  <th style="width:10%;">Số điện thoại</th>
                  <th style="width:20%">Địa chỉ</th>
                  <th style="width:10%">Tổng tiền</th>
                  <th style="width:10%">Ngày đặt hàng</th>
                  <th style="width:10%">Tình trạng</th>
                  <th style="width:5%">Chi tiết</th>
                  </tr>
                  @if(!empty($listOrder))
                      @foreach($listOrder as $key =>$order)
                        <tr>
                            <td>{{$key + 1 }}</td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name_customer }}</td>
                            <td>{{ $order->phone_customer}}</td>
                            <td>{{ $order->address_customer}}</td>
                            <td>{{ $order->total_price}}</td>
                            <td>{{ $order->created_at }}</td>
                            @if($order->status == 1)
                              <td><a onclick="return confirm('Xác nhận đơn hàng? ')" href="{{ route('orders.post-update',['id' => $order->id,'status'=>$order->status])}}" class="btn-warning">Chờ xác nhận</a></td>
                            @elseif($order->status == 2)
                              <td><a onclick="return confirm('Xác nhận hoàn thành? ')" href="{{ route('orders.post-update',['id' => $order->id,'status'=>$order->status]) }}" class="btn-primary">Đang giao hàng</a></td> 
                            @elseif($order->status == 3)
                              <td><a href="" class="btn-success">Giao hàng thành công</a></td>     
                            @endif
                            <td><a href="{{ route('orders.info',['id' => $order->id]) }}" class="admin__link"><i class="fas fa-info-circle admin__container-slider__navbar__content-table__icon"></i></a></td>
                        </tr>
                      @endforeach
                  @else
                      <tr>
                        <td colspan="9">Không có đơn hàng nào</td>
                      </tr>
                  @endif
          </table>  
          {{ $listOrder->links('clients.view_master.pagination') }}
      </div> 
@endsection