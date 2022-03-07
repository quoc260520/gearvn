<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryProductRequest;
use App\Models\Category;
use App\Models\CategoryLocal;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryProductController extends Controller
{
    private $category, $categoryProduct ,$categoryLocal;
    public function __construct(){
        $this->category = new Category();
        $this->categoryLocal = new CategoryLocal();
        $this->categoryProduct = new CategoryProduct();
    }
    public function getCategoryProduct(){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Thêm danh mục sản phẩm';
        $this->data['bg_category'] = '';
        $this->data['bg_category_product'] = 'slider-nav__bg';
        $this->data['bg_category_local'] = '';
        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $data = $this->data;

        $listCategoryProduct = $this->categoryProduct->getCategoryProduct();
        $listCategoryLocal = $this->categoryLocal->getCategoryLocal();
        $listCategory = $this->category->getCategory();
        $user =Auth::user();


        return view('admin.category.category_product',
        compact('data','listCategoryProduct','listCategory','listCategoryLocal','user'));
    }

    public function postCategoryProduct(CategoryProductRequest $request ) {
        $dataInsert =[
            $request->category_product_name = $request -> category_product_name,
            $request->category_id = $request -> category_id,
            $request->category_local_id = $request -> category_local_id,   
        ];
        $this->categoryProduct->addCategoryProduct($dataInsert);
        return back()->with('msg',"Thêm thành công");
    }
    public function getUpdateCategoryProduct(Request $request,$id){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Cập nhật danh mục sản phẩm';
        $this->data['bg_category'] = '';
        $this->data['bg_category_product'] = 'slider-nav__bg';
        $this->data['bg_category_local'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $listCategoryProduct = $this->categoryProduct->getCategoryProduct();
        
        if(!empty($id)){
            $categoryProduct = $this->categoryProduct->getOnlyCategoryProduct($id);
            if(!empty($categoryProduct[0])){
                $request->session()->put('id',$id);
                $categoryProduct = $categoryProduct[0];
                $category = $this->category->getOnlyCategory($categoryProduct->category_id);
                $category = $category[0];
                $listCategory = $this->category->getCategoryOther($categoryProduct->category_id);
                
                $categoryLocal = $this->categoryLocal->getOnlyCategoryLocal($categoryProduct->category_local_id);
                $categoryLocal = $categoryLocal[0];
                $listCategoryLocal = $this->categoryLocal->getCategoryLocalOther($categoryProduct->category_local_id);
            }else{
                return redirect()->route('category.product')->with('msg','Danh mục không tồn tại!');
            }
        }
        else{
            return redirect()->route('category.product')->with('msg','Liên kết không tồn tại!');
        }
        return view('admin.category.category_product_update',compact('data','listCategoryProduct',
        'listCategory','listCategoryLocal','categoryProduct','category','categoryLocal'));
    }
    public function postUpdateCategoryProduct(CategoryProductRequest $request) {
        $id = session('id');
        $dataInsert =[
            $request->category_product_name = $request -> category_product_name,
            $request->category_id = $request -> category_id,
            $request->category_local_id = $request -> category_local_id,       
        ];
        $this->categoryProduct->updateCategoryProduct($dataInsert,$id);
        return back()->with('msg',"Cập nhật thành công");
    }


    public function deleteCategoryProduct($id){
        if(!empty($id)) {
            $categoryProduct = $this->categoryProduct->getOnlyCategoryProduct($id);
            $categoryProduct = $categoryProduct[0];
            if(!empty($categoryProduct)){
                $this->categoryProduct->deleteCategoryProduct($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('category')
                ->with('msg',"Xóa không thành công");
            }
            
        }
    }
}
