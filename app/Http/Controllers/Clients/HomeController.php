<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderBanner;
use App\Models\SliderTop;
use App\Models\SliderFlashSale;
use App\Models\Product;
use App\Models\SliderTopPC;

class HomeController extends Controller
{ 
    private $sliderBanner,$sliderTop,$flashSale,$product;
    public function __construct(){
        $this->sliderBanner = new SliderBanner();
        $this->sliderTop = new SliderTop();
        $this->flashSale = new SliderFlashSale();
        $this->product = new Product();
        $this->topPc = new SliderTopPc();
    }
    public function getIndex(){
        $listSliderTop = $this->sliderTop->getSlider();
        $listSliderBanner = $this->sliderBanner->getSlider();
        $listProductFlS = $this->flashSale->getAllProductFlS();
        $listPc = $this->topPc->getPc();
        $data = 'style="display:flex;"';
        return view('clients.index',compact('listSliderBanner','listSliderTop','listProductFlS','listPc','data'));

    }
    public function getProductDetails($id){
        $this->data['title'] = "Chi tiết sản phẩm" ;
        $data = $this->data;
        $product = $this->product->getOnlyProduct($id);
        $product=$product[0];
        $listImg = $this->product->getImages($id);
        $listSliderBanner = $this->sliderBanner->getSlider();
        return view('clients.product.product_details',compact('product','data','listImg','listSliderBanner'));
    }
    public function getCart(){
        $this->data['title'] = "Gio hang" ;
        $data = $this->data;
        $listSliderBanner = $this->sliderBanner->getSlider();
        return view('clients.cart.cart',compact('data','listSliderBanner'));
    }
    
    public function getPayment(){
        $this->data['title'] = "Thanh toan" ;
        $this->data['price_ship'] = '<i class="fas fa-minus"></i>';
        return view('clients.payment.payment',$this->data);
    }
    public function getPaymentMethod(){
        $this->data['title'] = 'Phuong thuc thanh toan' ;
        $this->data['price_ship'] = "Mien phi" ;
        return view('clients.payment.payment_method',$this->data);
    }
}