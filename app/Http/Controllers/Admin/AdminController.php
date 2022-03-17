<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use  App\Models\Product;
use  App\Models\Order;

class AdminController extends Controller
{

    public $data = [];
    public function __construct(){
        $this->users = new User();
        $this->product = new Product();
        $this->order = new Order();
       
     }
    public function getHome(Request $request){
        $this->data['title'] = 'Home';
        $this->data['header'] ='Home';
        $this->data['bg_home'] ='side-bar__bg';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $user =Auth::user();

        $data = $this->data;
        $listUser = $this->users->getAdmin();
        $listProducts = $this->product->getProduct(); 
        $listProductsNew = $this->product->getProductNew();
        $listOrderWait = $this->order->getOrderWithStatus(1);
        $listOrderDelivery = $this->order->getOrderWithStatus(2);
        $listOrderSuccess = $this->order->getOrderWithStatus(3);
        $listOrder = $this->order->getOrder();
        $totalPriceSuccess = $this->order->getTotalPrice(3);
        //
        $totalS = 0;
        foreach($totalPriceSuccess as $total){
        $price = $total->total_price;
        $price = (int)str_replace('.','',$price);
        $totalS += $price;
        }
        $totalS =(string)$totalS;
        $len = strlen($totalS) - 6;
        $totalS=substr( $totalS, 0, $len );
        
        //

        $totalPriceDelivery = $this->order->getTotalPrice(2);
        //
        $totalD = 0;
        foreach($totalPriceDelivery as $total){
        $price = $total->total_price;
        $price = (int)str_replace('.','',$price);
        $totalD += $price;
        }
        $totalD =(string)$totalD;
        $len = strlen($totalD) - 6;
        $totalD=substr( $totalD, 0, $len );

        //

        $year = date('Y');
        $month = date('m');
        $totalPriceMonth = $this->order->getTotalPriceMonth(3,$year,$month);
        $totalM = 0;
        foreach($totalPriceMonth as $total){
        $price = $total->total_price;
        $price = (int)str_replace('.','',$price);
        $totalM += $price;
        }
        $totalM =(string)$totalM;
        $len = strlen($totalM) - 6;
        $totalM=substr( $totalM, 0, $len );
        
       
        return view('admin.home',compact('data','user','listUser','listProducts','listProductsNew',
        'listOrderWait','listOrderSuccess','listOrderDelivery','listOrder','totalS','totalD','totalM'));
    }

}
