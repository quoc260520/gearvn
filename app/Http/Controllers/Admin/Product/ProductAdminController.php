<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Requests\ImageProductRequest;
use  App\Models\Product;
use  App\Models\CategoryProduct;
use  App\Models\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductAdminController extends Controller
{
    private $product ;
    private $categoryProduct;
    private $imageProduct;

    public function __construct(){
        $this->product = new Product();
        $this->categoryProduct = new CategoryProduct();
        $this->imageProduct = new ImageProduct();
    }
    public function getProduct(){
        $this->data['title'] = 'Sản phẩm';
        $this->data['header'] = 'Sản phẩm';
        $this->data['heading'] = 'Danh sách sản phẩm';
        $this->data['bg_product'] = 'slider-nav__bg';
        $this->data['bg_add_product'] = '';
        $this->data['bg_update_product'] = '';
        
        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = 'side-bar__bg';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $listProducts = $this->product->getProduct();
        $user =Auth::user();

        return view('admin.product.product',compact('data','listProducts','user'));
    }
    public function getAddProduct(){
        $this->data['title'] = 'Sản phẩm';
        $this->data['header'] = 'Sản phẩm';
        $this->data['heading'] = 'Thêm sản phẩm';
        $this->data['bg_product'] = '';
        $this->data['bg_add_product'] = 'slider-nav__bg';
        $this->data['bg_update_product'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = 'side-bar__bg';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $user =Auth::user();
        $listCategoryProduct = $this->categoryProduct->getCategoryProduct();
        return view('admin.product.add_product',compact('data','listCategoryProduct','user'));
    }

    public function postAddProduct(ProductRequest $request){
        if($request->hasFile('product_image')){
            $file_img = $request->product_image;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'Gearvn-'.uniqid().'.'.$ext;
            $request -> product_image = $new_name;
            $file_img->move(public_path('image/product'),$new_name);
        }
        $dataInsert =[
            $request->product_name             = $request->product_name,
            $request->product_image            = $request->product_image,
            $request->product_price            = $request->product_price,
            $request->category_product_id	   = $request->category_product,
            $request->description              = $request ->description,
            $request->insurance                = $request->insurance,
            $request->series_laptop            = $request->series_laptop,
            $request->status                   = $request->status,
            $request->cpu                      =    $request->cpu,
            $request->ram                      =    $request->ram,
            $request->rom                      =    $request->rom,
            $request->card                     =    $request->card,
            $request->screen                   =    $request->screen,
            $request->keyboard                 =    $request->keyboard,
            $request->audio                    =    $request->audio,
            $request->read_memory_card         =    $request->read_memory_card,
            $request->lan                      = $request->lan,
            $request->wireless_connectivity    =    $request->wireless_connectivity,
            $request->webcam                   =    $request->webcam,
            $request->the_web_of_communication =    $request->the_web_of_communication,
            $request->operating_system         =    $request->operating_system,
            $request->battery                  =    $request->battery,
            $request->weight                   =    $request->weight,
            $request->size                     =    $request->size,
            $request->color                    = $request->color,
            $request->security                 =    $request->security,
        ];
        $this->product->addProduct($dataInsert);
        return back()->with('msg',"Thêm sản phẩm thành công");
    }
    public function getUpdateProduct(Request $request,$id){
        $this->data['title'] = 'Sản phẩm';
        $this->data['header'] = 'Sản phẩm';
        $this->data['heading'] = 'Cập nhật sản phẩm';
        $this->data['bg_product'] = '';
        $this->data['bg_add_product'] = '';
        $this->data['bg_update_product'] ='slider-nav__bg';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = 'side-bar__bg';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $user =Auth::user();

        if(!empty($id)){
            $product = $this->product->getOnlyProduct($id);
            if(!empty($product)){
                $request->session()->put('id',$id);
                $product = $product[0];
                $categoryProduct = $this->categoryProduct->getOnlyCategoryProduct($product->category_product_id);
                $categoryProduct = $categoryProduct[0];
                $listCategoryProduct = $this->categoryProduct->getCategoryProductOther($product->category_product_id);
            }else{
                return redirect()->route('product.add')->with('msg','Sản phẩm không tồn tại!');
            }
        }
        else{
            return redirect()->route('product.add')->with('msg','Liên kết không tồn tại!');
        }
        
        return view('admin.product.update_product',compact('data','listCategoryProduct','product','categoryProduct','user'));
    }
    public function postUpdateProduct(ProductUpdateRequest $request) {
        $id = session('id');
        if($request->hasFile('product_image_update')){
            $file_img = $request->product_image_update;
            if($file_img)
            $file_img = $request->product_image_update;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'Gearvn-'.uniqid().'.'.$ext;
            $request -> product_image_update = $new_name;
            $file_img->move(public_path('image/product'),$new_name);

            if(!empty($id)) {
                $product = $this->product->getOnlyProduct($id);
                $product = $product[0];
                $destinationPath = 'image/product/'.$product->product_image;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
        }
        else{
            if(!empty($id)) {
                $product = $this->product->getOnlyProduct($id);
                $product = $product[0];
                $request -> product_image_update=$product->product_image;
            }
        }

        $dataInsert =[
            $request->product_name             = $request->product_name,
            $request->product_image            = $request->product_image_update,
            $request->product_price            = $request->product_price,
            $request->category_product_id	   = $request->category_product,
            $request->description              = $request ->description,
            $request->insurance                = $request->insurance,
            $request->series_laptop            = $request->series_laptop,
            $request->status                   = $request->status,
            $request->cpu                      =    $request->cpu ?? "",
            $request->ram                      =    $request->ram ?? "",
            $request->rom                      =    $request->rom ?? "",
            $request->card                     =    $request->card ?? "",
            $request->screen                   =    $request->screen ?? "",
            $request->keyboard                 =    $request->keyboard ?? "",
            $request->audio                    =    $request->audio ?? "",
            $request->read_memory_card         =    $request->read_memory_card ?? "",
            $request->lan                      =    $request->lan ?? "",
            $request->wireless_connectivity    =    $request->wireless_connectivity ?? "",
            $request->webcam                   =    $request->webcam ?? "",
            $request->the_web_of_communication =    $request->the_web_of_communication ?? "",
            $request->operating_system         =    $request->operating_system ?? "",
            $request->battery                  =    $request->battery ?? "",
            $request->weight                   =    $request->weight ?? "",
            $request->size                     =    $request->size ?? "",
            $request->color                    =    $request->color ?? "",
            $request->security                 =    $request->security ?? "",
        ];
        $this->product->updateProduct($dataInsert,$id);
        return back()->with('msg',"Cập nhật sản phẩm thành công");

    }
    public function deleteProduct($id) {
        if(!empty($id)) {
            $product = $this->product->getOnlyProduct($id);
            $product = $product[0];
            $destinationPath = 'image/product/'.$product->product_image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
            if(!empty($product)){
                $this->product->deleteProduct($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('product')
                ->with('msg',"Xóa không thành công");
            }
            
        }
        else {
            return redirect()->route('product')
            ->with('msg',"Sản phẩm không tồn tại");
        }
    }
    public function ckeditorImage(Request $request) {
        if($request->hasFile('upload')){
            $file_img = $request->upload;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'ImageProduct-'.uniqid().'.'.$ext;
            $request -> upload = $new_name;
            $file_img->move(public_path('image/image_product'),$new_name);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('image/image_product/'.$new_name);
            $msg = "Upload image success";
            $response = "<script>window.parent.CKEDITOR.tools.callFunction
            ($CKEditorFuncNum,' $url','$msg')</script>";
            @header("Content-Type: text/html;charset=UTF-8");
            echo $response;
        }
    }
    public function fileBrowse(){
        $paths = glob(public_path('image/image_product/*'));
        $file_names = array();
        foreach($paths as $path){
            array_push($file_names,basename($path));
         }
         $data = array(
            'file_names' =>  $file_names 
         );
         return view('admin.image.file_browse', $data);
    }

    public function getImageProduct(Request $request){
        $id_product = $request->id;

        $this->data['title'] = 'Sản phẩm';
        $this->data['header'] = 'Sản phẩm';
        $this->data['heading'] = 'Thêm ảnh sản phẩm';
        $this->data['bg_product'] = '';
        $this->data['bg_add_product'] = '';
        $this->data['bg_update_product'] = '';
        
        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = 'side-bar__bg';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $user =Auth::user();
        $listImageProducts = $this->imageProduct->getImageProduct($id_product);

        return view('admin.product.add_image_product',compact('data','listImageProducts','user'));
    }
    public function postImageProduct(ImageProductRequest $request){
        $id_product = $request->id;
        $request->id_product = $id_product;
        if($request->hasFile('image_product')){
            $file_img = $request->image_product;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'Gearvn-img-'.uniqid().'.'.$ext;
            $request -> image_product = $new_name;
            $file_img->move(public_path('image/image_product'),$new_name);
        }
        $dataInsert =[
            $request->product_id = $request->id_product,
            $request->image = $request->image_product,
        ];
        $this->imageProduct->addImageProduct($dataInsert);
        return back()->with('msg',"Thêm anh thành công");

    }
    public function deleteImageProduct($id){
        if(!empty($id)) {
            $image = $this->imageProduct->getOnlyImageProduct($id);
            $image = $image[0];
            $destinationPath = 'image/image_product/'.$image->image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
            if(!empty($image)){
                $this->imageProduct->deleteImageProduct($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('product')
                ->with('msg',"Xóa không thành công");
            }
            
        }
        else {
            return redirect()->route('product')
            ->with('msg',"Sản phẩm không tồn tại");
        }

    }
}
