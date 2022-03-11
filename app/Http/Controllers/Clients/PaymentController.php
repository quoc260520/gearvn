<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;

class PaymentController extends Controller
{
    public function __construct(){
        $this->address = new Address();
    }
    public function getPayment(){
        $this->data['title'] = "Thanh toan" ;
        $this->data['price_ship'] = '<i class="fas fa-minus"></i>';
        $data = $this->data;
        $listCity = $this->address->getCity();
        return view('clients.payment.payment',compact('data','listCity'));
    }
    public function getDistrict($id){
        $listDistrict = $this->address->getDistrict($id);
        return back()->with('data',$listDistrict);
    }
    
    public function getPaymentMethod(){
        $this->data['title'] = 'Phuong thuc thanh toan' ;
        $this->data['price_ship'] = "Mien phi" ;
        $data = $this->data;
        return view('clients.payment.payment_method',compact('data'));
    }
}
