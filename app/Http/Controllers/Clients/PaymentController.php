<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Order;
use App\Session;
use App\Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
class PaymentController extends Controller
{
    public function __construct(){
        $this->address = new Address();
        $this->order = new Order();
    }
    public function getPayment(){
        $this->data['title'] = "Thanh toan" ;
        $this->data['price_ship'] = '<i class="fas fa-minus"></i>';
        $data = $this->data;
        $listCity = $this->address->getCity();
        return view('clients.payment.payment',compact('data','listCity'));
    }
    
    public function postPayment(Request $request){
        $request->validate([
            'full_name'  => 'required|min:2',
            'email'      => 'required|email',
            'phone'      =>  'required|numeric|min:10',
            'address'    => 'required',
            'city'       => 'required',
            'district'   => 'required'
        ],[
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'email' => ':attribute phải là email',
            'numeric' => ':attribute phải là số điện thoại'
        ],[
            'full_name' => 'Họ tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'city' => 'Thành phố',
            'district' =>'Quận/huyện'
        ]);
        $dataCart = $request->all();
        $request->Session()->put('dataCart', $dataCart);
        $this->data['title'] = 'Phuong thuc thanh toan' ;
        $this->data['price_ship'] = "Mien phi" ;
        $data = $this->data;
        return view('clients.payment.payment_method',compact('data'));
        
    }


    public function getDistrict(Request $request){
        $data = $request->all();
        $id = $data['matp'];
        if($data['action']){
            $output ="";
            $listDistrict = $this->address->getDistrict($id);
            $output.='<option value="">Chọn quận / huyện</option>';
            foreach($listDistrict as $district){
                $output.= '<option value="'.$district->maqh.'" >'.$district->name.'</option>';
            }
        }
        return $output;
    }
    
    public function getPaymentMethod(Request $request){
        $this->data['title'] = 'Phuong thuc thanh toan' ;
        $this->data['price_ship'] = "Mien phi" ;
        $data = $this->data;
        return view('clients.payment.payment_method',compact('data'));
    }
    public function postPaymentMethod(Request $request){
       $dataCus = Session('dataCart');
       $dataCart = Session('Cart');
       if(!empty($dataCart)){
        $id = 'Gearvn';
        $data = [
            $request->id = $id.uniqid(),
            $request->name_customer = $dataCus['full_name'],
            $request->email_customer= $dataCus['email'], 
            $request->phone_customer = $dataCus['phone'], 
            $request->address_customer = $dataCus['address'], 
            $request->city_id = $dataCus['city'], 
            $request->district_id = $dataCus['district'],
            $request->quantity = $dataCart->totalQuantity, 
            $request->total_price  = $dataCart->totalPrice ,
            $request->info_order = json_encode($dataCart->products),
            $request->status = '1',
            $request->created_at = date('Y-m-d H:i:s')
        ];
        $email_c = $dataCus['email'];
        $name_c = $dataCus['full_name'];
        $this->order->addOrder($data);
        $order = [
            'name_c' => $name_c,
            'data' => $data,
            'orders' => $dataCart,
        ];
       
        Mail::to($email_c)->send(new OrderMail($order));
 
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteAllCart();
        $request->Session()->forget('Cart');
 
        return redirect()->route('payment_method')->with('msg','Đặt hàng thành công ! ');

       }
       else {
        return redirect()->route('payment_method')->with('error','Có lỗi vui lòng kiểm tra lại giỏ hàng !');
       }
       
       
    }
}
