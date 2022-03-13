<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrdersController extends Controller
{
    private $orders;
    public function __construct(){
         $this->orders = new Order();
    }
    public function getOrder(Request $request){
        $this->data['title'] = 'Đơn hàng';
        $this->data['header'] ='Đơn hàng';
        $this->data['nav_bg'] = 'slider-nav__bg';
        $this->data['bg_home'] ='';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = 'side-bar__bg';
        $this->data['bg_user_sidebar'] = '';
        $this->data['heading'] = 'Danh sách đơn hàng';
        $user =Auth::user();
        $data = $this->data;
        $name_cus = $request->name_cus;
        if(!empty($name_cus)){
            $listOrder = $this->orders->getOrderWithName($name_cus);
        }
        else if(!empty($request->all)){
            $listOrder = $this->orders->getOrder();
        }
        else if(!empty($request->status_1)){
            $status = $request->status_1;
            $listOrder = $this->orders->getOrderWithStatus($status);
        }
        else if(!empty($request->status_2)){
            $status = $request->status_2;
            $listOrder = $this->orders->getOrderWithStatus($status);
        }
        else if(!empty($request->status_3)){
            $status = $request->status_3;
            $listOrder = $this->orders->getOrderWithStatus($status);
        }
        else{
            $listOrder = $this->orders->getOrder();
        }

        return view('admin.orders.orders',compact('data','user','listOrder'));
    }
    public function getInfoOrder($id){
        $this->data['title'] = 'Đơn hàng';
        $this->data['header'] ='Đơn hàng';
        $this->data['bg_home'] ='';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = 'side-bar__bg';
        $this->data['bg_user_sidebar'] = '';
        $this->data['heading'] = 'Chi tiết đơn hàng';
        $user =Auth::user();
        $data = $this->data;
        $Order = $this->orders->getInfoOrder($id);
        $order = json_decode($Order->info_order, true);
        //dd($order);

        return view('admin.orders.order_info',compact('data','user','order'));
    }
    public function getUpdate($id,$status){
        if(!empty($id)){
            if(!empty($status)){
                $this->orders->updateOrder($id,$status);
                return back();
            }
        }
        else{
            return back()->with('msg','Liên kết không tồn tại');
        }
       

    }
}
