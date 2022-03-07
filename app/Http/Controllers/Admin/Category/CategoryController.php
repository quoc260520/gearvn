<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private $category;
    public function __construct(){
        $this->category = new Category();
    }
    public function getCategory(){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Thêm danh mục';
        $this->data['bg_category'] = 'slider-nav__bg';
        $this->data['bg_category_product'] = '';
        $this->data['bg_category_local'] = '';


        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $user =Auth::user();
        $listCategory = $this->category->getCategory();

        return view('admin.category.category',compact('data','listCategory','user'));
    }
    public function getUpdateCategory(Request $request,$id){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Cập nhật danh mục';
        $this->data['bg_category'] = 'slider-nav__bg';
        $this->data['bg_category_product'] = '';
        $this->data['bg_category_local'] = '';


        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $listCategory = $this->category->getCategory();
        if(!empty($id)){
            $category = $this->category->getOnlyCategory($id);
            if(!empty($category[0])){
                $request->session()->put('id',$id);
                $category = $category[0];
            }else{
                return redirect()->route('category')->with('msg','Danh mục không tồn tại!');
            }
        }
        else{
            return redirect()->route('category')->with('msg','Liên kết không tồn tại!');
        }
        return view('admin.category.category_update',compact('data','listCategory','category'));
    }
    public function postUpdateCategory(CategoryRequest $request) {
        $id = session('id');
        $dataInsert =[
            $request->category_name = $request -> category_name,       
        ];
        $this->category->updateCategory($dataInsert,$id);
        return back()->with('msg',"Cập nhật thành công");
    }

    
    public function postCategory(CategoryRequest $request){
        $dataInsert =[
            $request->category_name = $request -> category_name,       
        ];
        $this->category->addCategory($dataInsert);
        return back()->with('msg',"Thêm thành công");
    }

    public function deleteCategory($id){
        if(!empty($id)) {
            $category = $this->category->getOnlyCategory($id);
            $category = $category[0];
            if(!empty($category)){
                $this->category->deleteCategory($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('category')
                ->with('msg',"Xóa không thành công");
            }
            
        }
    }
}
