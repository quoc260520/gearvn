<?php
namespace App;

   class Cart{
       public $products = null;
       public $totalPrice = 0;
       public $totalQuantity = 0;

       public function __construct($cart){
           if($cart){
               $this->products = $cart->products;
               $this->totalPrice = $cart->totalPrice;
               $this->totalQuantity = $cart->totalQuantity;
           }
       }
       public function AddCart($product,$id){
           $newProduct = [
               'quantity' => 0,
               'price' =>str_replace('.','',$product->product_price) ,
               'productInfo' => $product
           ];
            if($this->products){
                if(array_key_exists($id, $this->products)){
                     $newProduct = $this->products[$id];
                }
            }
            $newProduct['quantity']++;
            $newProduct['price'] = $newProduct['quantity'] * (int)str_replace('.','',$product->product_price);
            $this->totalQuantity ++;
            $this->totalPrice = (int)str_replace('.','',$this->totalPrice);
            $this->totalPrice +=  (int)str_replace('.','',$product->product_price);
            
            //Total Price Product
            $priceP = $newProduct['price'];
            $length1 = (int)(strlen($priceP)/3);
            $arr=array();
            $prN=array();
            for($i = 1 ;$i<=$length1;$i++){
                  $arr[$i] =substr($priceP, -3*$i,3);
            }
            if((strlen($priceP)-$length1*3) !=0 ){
            $arr[$length1+1]=substr($priceP,0,strlen($priceP)-$length1*3);
            }
             
            $index1 = 1;
            for($j=count($arr);$j>0;$j--){
                $prN[$index1]=$arr[$j];
                $index1++;
            }
            $newProduct['price'] =implode(".", $prN);
            $this->products[$id] = $newProduct;

            //Total Price Cart
            $price = $this->totalPrice;
            $length = (int)(strlen($price)/3);
            $a=array();
            $pr=array();
            for($i = 1 ;$i<=$length;$i++){
                  $a[$i] =substr($price, -3*$i,3);
            }
            if((strlen($price)-$length*3) !=0 ){
            $a[$length+1]=substr($price,0,strlen($price)-$length*3);}
             
            $index = 1;
            for($j=count($a);$j>0;$j--){
                $pr[$index]=$a[$j];
                $index++;
            }
            $this->totalPrice =implode(".", $pr);

            
            
       }
       public function DeleteItemCart($id){
           $this->totalQuantity -= $this->products[$id]['quantity'];
           $this->totalPrice = (int)str_replace('.','',$this->totalPrice);
           $this->totalPrice -= (int)str_replace('.','',$this->products[$id]['price']);
           unset($this->products[$id]);
       }
       public function DeleteAllCart(){
            $this->totalQuantity = 0;
            $this->totalPrice =0;
            unset($this->products);
       }
       public function UpdateItemCart($id){
        if($this->products[$id]['quantity'] > 1){
        $this->totalQuantity --;
        $this->products[$id]['quantity']--;
        $this->products[$id]['price'] = $this->products[$id]['quantity'] * 
        (int)str_replace('.','',$this->products[$id]['productInfo']->product_price);
        $this->totalPrice = (int)str_replace('.','',$this->totalPrice);
        $this->totalPrice -= (int)str_replace('.','',$this->products[$id]['productInfo']->product_price);

         //Total Price Product
         $priceP = $this->products[$id]['price'];
         $length1 = (int)(strlen($priceP)/3);
         $arr=array();
         $prN=array();
         for($i = 1 ;$i<=$length1;$i++){
               $arr[$i] =substr($priceP, -3*$i,3);
         }
         if((strlen($priceP)-$length1*3) !=0 ){
         $arr[$length1+1]=substr($priceP,0,strlen($priceP)-$length1*3);
         }
          
         $index1 = 1;
         for($j=count($arr);$j>0;$j--){
             $prN[$index1]=$arr[$j];
             $index1++;
         }
         $this->products[$id]['price']=implode(".", $prN);
 
         //Total Price Cart
         $price = $this->totalPrice;
         $length = (int)(strlen($price)/3);
         $a=array();
         $pr=array();
         for($i = 1 ;$i<=$length;$i++){
               $a[$i] =substr($price, -3*$i,3);
         }
         if((strlen($price)-$length*3) !=0 ){
         $a[$length+1]=substr($price,0,strlen($price)-$length*3);}
          
         $index = 1;
         for($j=count($a);$j>0;$j--){
             $pr[$index]=$a[$j];
             $index++;
         }
         $this->totalPrice =implode(".", $pr);
        }
    }
    public function UpdateItemCardAdd($id){
        $this->totalQuantity++;
        $this->products[$id]['quantity']++;
        $this->products[$id]['price'] = $this->products[$id]['quantity'] * 
        (int)str_replace('.','',$this->products[$id]['productInfo']->product_price);
        $this->totalPrice = (int)str_replace('.','',$this->totalPrice);
        $this->totalPrice += (int)str_replace('.','',$this->products[$id]['productInfo']->product_price);

        //Total Price Product
        $priceP = $this->products[$id]['price'];
        $length1 = (int)(strlen($priceP)/3);
        $arr=array();
        $prN=array();
        for($i = 1 ;$i<=$length1;$i++){
              $arr[$i] =substr($priceP, -3*$i,3);
        }
        if((strlen($priceP)-$length1*3) !=0 ){
        $arr[$length1+1]=substr($priceP,0,strlen($priceP)-$length1*3);
        }
         
        $index1 = 1;
        for($j=count($arr);$j>0;$j--){
            $prN[$index1]=$arr[$j];
            $index1++;
        }
        $this->products[$id]['price']=implode(".", $prN);

        //Total Price Cart
        $price = $this->totalPrice;
        $length = (int)(strlen($price)/3);
        $a=array();
        $pr=array();
        for($i = 1 ;$i<=$length;$i++){
              $a[$i] =substr($price, -3*$i,3);
        }
        if((strlen($price)-$length*3) !=0 ){
        $a[$length+1]=substr($price,0,strlen($price)-$length*3);}
         
        $index = 1;
        for($j=count($a);$j>0;$j--){
            $pr[$index]=$a[$j];
            $index++;
        }
        $this->totalPrice =implode(".", $pr);
        
    }
   }
?>