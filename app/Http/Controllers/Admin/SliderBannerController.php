<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderBannerRequest;
use App\Models\SliderBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderBannerController extends Controller
{
    private $sliderBanner;
    public function __construct(){
        $this->sliderBanner = new SliderBanner();
    }
    public function getSlider(){
        $this->data['title'] = 'Slider';
        $this->data['header'] = 'Slider';
        $this->data['heading'] = 'Thêm slide banner';
        $this->data['bg_banner'] = 'slider-nav__bg';
        $this->data['bg_top'] = '';
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

        $listSliderBanner = $this->sliderBanner->getSlider();
        return view('admin.slider.slider_banner',compact('data','listSliderBanner','user'));
    }
    public function postSlider(SliderBannerRequest $request){
        if($request->hasFile('image_banner')){
            $file_img = $request->image_banner;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'SliderBanner-'.uniqid().'.'.$ext;
            $request -> image_banner = $new_name;
            $file_img->move(public_path('image/slider_banner'),$new_name);
        }
        $dataInsert =[
            $request->image = $request -> image_banner,
            $request->link = $request -> link_banner,
           
        ];
        $this->sliderBanner->addSlider($dataInsert);
        return back()->with('msg',"Thêm thành công");
    }
    public function deleteSlider($id) {
        if(!empty($id)) {
            $slider = $this->sliderBanner->getOnlySlider($id);
            $slider = $slider[0];
            $destinationPath = '../image/slider_banner/'.$slider->image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
            if(!empty($slider)){
                $this->sliderBanner->deleteSlider($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('slider.slider-top')
                ->with('msg',"Xóa không thành công");
            }
            
        }
    }
}
