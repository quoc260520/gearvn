<table class="admin__container-slider__navbar__content-table">
    <tr>
      <th style="width:10%">STT</th>
      <th style="width:50%;">Tên danh mục hãng</th>
      <th style="width: 20%">Sửa</th>
      <th style="width:20%">Xóa</th>
    </tr>
    @if(!empty($listCategoryLocal))
    @foreach($listCategoryLocal as $key => $items)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $items->category_local_name }}</td>
      <td><a href="{{ route('category.local.update',['id' => $items->id]) }}" class="admin__link"><i class="fas fa-wrench admin__container-slider__navbar__content-table__icon"></i></a></td>
      <td><a onclick="return confirm('Bạn có chắc chắn xóa không? ')" href="{{ route('category.local.delete',['id' => $items->id]) }}" class="admin__link"><i class="fas fa-trash-alt admin__container-slider__navbar__content-table__icon"></i></a></td>
    </tr>
    @endforeach
    @else
    <tr> 
        <td colspan="4">Không có danh mục sản phẩm</td>
     </tr>
    @endif
</table>              