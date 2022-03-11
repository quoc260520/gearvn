<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderBanner;
use App\Models\Product;
use App\Session;
use App\Cart;


class CartController extends Controller
{
    public function __construct(){
        $this->sliderBanner = new SliderBanner();
        $this->product = new Product();
    }
    public function addCart(Request $request,$id){
        $id = $id;
        $product = $this->product->getOnlyProduct($id);
        $product=$product[0];
        if(!empty($product)){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);
            $request->session()->put('Cart',$newCart);
        }
        return back();
        
    }
    public function deleteCart(Request $request,$id){
        if(!empty($id)){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->DeleteItemCart($id);
            if(Count($newCart->products) > 0){
                $request->Session()->put('Cart',$newCart);
            }
            else{
                $request->Session()->forget('Cart');
            }
            return back();
        }
    }
    public function updateCart(Request $request,$id){
        if(!empty($id)){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id);
            $request->Session()->put('Cart',$newCart);
            return back();
        }
    }
    public function updateCartAdd(Request $request,$id){
        if(!empty($id)){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCardAdd($id);
            $request->Session()->put('Cart',$newCart);
            return back();
        }
    }
}
