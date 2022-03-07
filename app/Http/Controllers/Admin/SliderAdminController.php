<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\SliderTop;
use App\Models\Product;
use App\Models\SliderFlashSale;
use App\Models\SliderTopPc;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class SliderAdminController extends Controller
{
    private $sliderTop;
    private $product;
    private $sliderFlashSale;
    private $sliderTopPc;
    public function __construct(){
        $this->sliderTop = new SliderTop();
        $this->product = new Product();
        $this->sliderFlashSale = new SliderFlashSale();
        $this->sliderTopPc = new SliderTopPc();
    }
    public function getSliderTop(){
        $this->data['title'] = 'Slider Top';
        $this->data['header'] = 'Slider';
        $this->data['heading'] = 'Thêm slide top';
        $this->data['bg_banner'] = '';
        $this->data['bg_top'] = 'slider-nav__bg';
        $this->data['bg_top_pc'] = '';
        $this->data['bg_flash_sale'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = 'side-bar__bg';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $data = $this->data;
        $user =Auth::user();

        $listSliderTop = $this->sliderTop->getSlider();

        return view('admin.slider.slider_top',compact('data','listSliderTop','user') );
    }
    public function postSliderTop(SliderRequest $request){
        if($request->hasFile('image_slider_top')){

            $file_img = $request->image_slider_top;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'SliderTop-'.uniqid().'.'.$ext;
            $request -> image_slider_top = $new_name;
            $file_img->move(public_path('image/slider_top'),$new_name);
        }
        $dataInsert =[
            $request->image = $request -> image_slider_top,
            $request->link = $request -> link_slider_top,
           
        ];
        $this->sliderTop->addSlider($dataInsert);
        
        return back()->with('msg',"Thêm thành công");
    }
    public function deleteSliderTop($id) {
        if(!empty($id)) {
            $slider = $this->sliderTop->getOnlySlider($id);
            $slider = $slider[0];
            $destinationPath = '../image/slider_top/'.$slider->image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
            if(!empty($slider)){
                $this->sliderTop->deleteSlider($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('slider.slider-top')
                ->with('msg',"Xóa không thành công");
            }
            
        }
        
    }

    public function getSliderFlashSale(){
        $this->data['title'] = 'Slider Flash Sale';
        $this->data['header'] = 'Slider';
        $this->data['heading'] = 'Slider flash sale';
        $this->data['bg_banner'] = '';
        $this->data['bg_top'] = '';
        $this->data['bg_top_pc'] = 'slider-nav__bg';
        $this->data['bg_flash_sale'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = 'side-bar__bg';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $data = $this->data;
        $listProduct = $this->product->getProduct();
        $listSlider = $this->sliderFlashSale->getProductFlS();
        $user =Auth::user();


        return view('admin.slider.slider_flash_sale',compact('data','listProduct','listSlider','user'));
    }

    public function postSliderFlashSale(Request $request){
           $data = [
               $request->product_id =  $request->product,
           ];
           $flash = $this->sliderFlashSale->check($request->product);
           if(!empty($flash[0])){
               return back()->with('msg','Sản phẩm đã tồn tại');
           }
           else{
            $this->sliderFlashSale->addSlider($data);
            return back()->with('msg','Thêm sản phẩm flash sale thành công');
           }
          
    }
    public function deleteSliderFlashSale(Request $request,$id){
        if(!empty($id)) {
            $slider = $this->sliderFlashSale->getOnlySlider($id);
            $slider = $slider[0];
            if(!empty($slider)){
                $this->sliderFlashSale->deleteSlider($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('slider.slider-flash-sale')
                ->with('msg',"Xóa không thành công");
            }
            
        }
        else {
            return redirect()->route('slider.slider-flash-sale')
            ->with('msg',"Sản phẩm không tồn tại");
        }
 }

    public function getSliderTopPc(){
        $this->data['title'] = 'Slider Top PC';
        $this->data['header'] = 'Slider';
        $this->data['heading'] = 'Thêm slide top pc';
        $this->data['bg_banner'] = '';
        $this->data['bg_top'] = '';
        $this->data['bg_top_pc'] = '';
        $this->data['bg_flash_sale'] = 'slider-nav__bg';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = 'side-bar__bg';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $data = $this->data;
        $listProduct = $this->product->getProduct();
        $listSliderTopPc =$this->sliderTopPc->getProductFlS();
      //  dd($listSliderTopPc);
      $user =Auth::user();

        
        return view('admin.slider.slider_top_pc',compact('data','listProduct','listSliderTopPc','user'));
    }
    

    public function postSliderTopPc(Request $request){
        $data = [
            $request->product_id =  $request->product,
        ];
        $flash = $this->sliderTopPc->check($request->product);
        if(!empty($flash[0])){
            return back()->with('msg','Sản phẩm đã tồn tại');
        }
        else{
            $this->sliderTopPc->addSlider($data);
            return back()->with('msg','Thêm sản phẩm top thành công');
        }
       
 }
 public function deleteSliderTopPc(Request $request,$id){
     if(!empty($id)) {
         $slider = $this->sliderTopPc->getOnlySlider($id);
         $slider = $slider[0];
         if(!empty($slider)){
             $this->sliderTopPc->deleteSlider($id);
             return back()->with('msg',"Xóa thành công");
         }
         else{
             return redirect()->route('slider.slider-top-pc')
             ->with('msg',"Xóa không thành công");
         }
         
     }
     else {
         return redirect()->route('slider.slider-top-pc')
         ->with('msg',"Sản phẩm không tồn tại");
     }
}

}
