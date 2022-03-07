@extends('admin.user.user_admin')
@section('list_user')
@include('admin.user.header_user')
<div class="admin__container-product__list">
    <h3 class="admin__container-product_heading">Danh sách admin</h3>
    @if(session('msg'))
    <script>
      alert('{{ session('msg') }}')
    </script>
    @endif
    <table class="admin__container-slider__navbar__content-table">
        <tr>
          <th style="width:5%">STT</th>
          <th style="width:25%;">Họ và tên</th>
          <th style="width:20%">Ngày sinh</th>
          <th style="width:20%;">Email</th>
          <th style="width:5%">Sửa</th>
          <th style="width:5%">Xóa</th>
        </tr>
        
        @if(!empty($listUser))
        @foreach($listUser as $key => $items)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $items->name }}</td>
          <td>{{ $items->date_of_birth }}</td>
          <td>{{ $items->email }}</td>
          <td><a href="{{ route('user.update',['id' => $items->id]) }}" class="admin__link"><i class="fas fa-wrench admin__container-slider__navbar__content-table__icon"></i></a></td>
          <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('user.delete',['id' => $items->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
        </tr>
        @endforeach
        @else
        <tr> 
            <td colspan="6">Không có danh mục</td>
         </tr>
        @endif
        
     
      </table>             

</div> 
@endsection