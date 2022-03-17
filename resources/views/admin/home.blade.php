@extends('admin.admin_master')
@section('home')
<div class="grid__column-10">
                    <div class="admin__container">
                        @include('admin.header_admin')
                        <div class="admin__container-content">
                            <div class="dashboard">
                                <div class="sale">
                                    <div class="sale_header">
                                        <p class="sale_header-heading">Đơn hàng</p>
                                        <p class="sale_header-quantity">{{ $listOrder->total() ?? 0 }}</p>
                                    </div>
                                    <div class="sale-container">
                                        <div class="sale_block-wrap">
                                            <div class="sale_block warning"> 
                                                <div class="sale_block-text ">{{ $listOrderWait->total() ?? 0 }}</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Chờ xác nhận
                                            </div>
                                        </div>
                                        <div class="sale_block-wrap">
                                            <div class="sale_block primary"> 
                                                <div class="sale_block-text ">{{ $listOrderDelivery->total() ?? 0}}</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Đang giao
                                            </div>
                                        </div>
                                        <div class="sale_block-wrap">
                                            <div class="sale_block success"> 
                                                <div class="sale_block-text ">{{ $listOrderSuccess->total() ?? 0 }}</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Thành công
                                            </div>
                                        </div>
                                       
                                    </div>
                                                                   
                                </div>

                                <div class="sale">
                                    <div class="sale_header">
                                        <p class="sale_header-heading">Admin</p>
                                        <p class="sale_header-quantity">{{ $listUser->count() ?? 0 }}</p>
                                    </div>
                                    <div class="sale-container ">
                                        <table id="customers">
                                            <tr>
                                              <th style="width:25%">Họ và tên</th>
                                              <th style="width:25%">Ngày sinh</th>
                                              <th style="width:25%">Email</th>
                                              <th style="width:25%">Ảnh</th>
                                            </tr>
                                            @if(!empty($listUser))
                                            @foreach($listUser as $user)
                                            <tr>
                                              <td>{{ $user->name }}</td>
                                              <td>{{ $user->date_of_birth }}</td>
                                              <td>{{ $user->email }}</td>
                                              <td><img src="{{ '/image/admin/'.$user->image }}" alt="" style="width:100px;height:100px;"></td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr colspan="4">Danh sách trống</tr>
                                            @endif
                                          </table>
                                          
                                    </div>
                                                                   
                                </div>

                                <div class="sale">
                                    <div class="sale_header">
                                        <p class="sale_header-heading">Product</p>
                                        <p class="sale_header-quantity">{{ $listProducts->count() ?? 0 }}</p>
                                    </div>
                                    <div class="sale-container ">
                                        <table id="customers">
                                            <tr>
                                              <th style="width:45%">Tên sản phẩm</th>
                                              <th style="width:25%">Giá</th>
                                              <th style="width:35%">Ảnh</th>
                                            </tr>
                                            
                                            @if(!empty($listProductsNew))
                                            @foreach($listProductsNew as $item)
                                            <tr>
                                              <td>{{ $item->product_name }}</td>
                                              <td>{{ $item->product_price }} đ</td>
                                              <td><img src="{{ 'image/product/'.$item->product_image }}" alt="" style="width:100px;height:100px;"></td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr colspan="3">Danh sach trong</tr>
                                            @endif
                                          </table>
                                          
                                    </div>
                                                                   
                                </div>

                                <div class="sale">
                                    <div class="sale_header">
                                        <p class="sale_header-heading">Doanh thu</p>
                                    </div>
                                    <div class="sale-container">
                                        <div class="sale_block-wrap">
                                            <div class="sale_block error"> 
                                                <div class="sale_block-text ">{{ $totalS }} M</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Tổng doanh thu
                                            </div>
                                        </div>
                                        <div class="sale_block-wrap">
                                            <div class="sale_block error"> 
                                                <div class="sale_block-text ">{{ $totalM }} M</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                 Tháng này
                                            </div>
                                        </div>
                                        <div class="sale_block-wrap">
                                            <div class="sale_block error"> 
                                                <div class="sale_block-text ">{{ $totalD }} M</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Chờ thanh toán
                                            </div>
                                        </div>
                                       
                                    </div>
                                               
                                    <div class="sale-container">
  
                                       
                                        <div class="sale_block-wrap">
                                            <div class="pick-time">
                                                <select class="sale" type="date">
                                                    <option value="">Ngày</option>
                                                    @for ($i = 1; $i < 32; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <select class="sale" type="date">
                                                    <option value="">Tháng</option>
                                                    @for ($i = 1; $i < 32; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <select class="sale" id="" type="date">
                                                    <option value="">Năm</option>
                                                </select>
                                                <input type="date" name="" id="datepicker">
                                            </div>
                                           
                                            <div class="sale_block error"> 
                                                <div class="sale_block-text ">{{ $totalD }} M</div>
                                            </div> 
                                            <div class="sale_block-info">
                                                Doanh thu
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script> 
$("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: "1930:2010"
});</script>
@endsection