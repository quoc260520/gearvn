<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryLocalRequest;
use App\Models\CategoryLocal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryLocalController extends Controller
{
    private $categoryLocal;
    public function __construct(){
        $this->categoryLocal = new CategoryLocal();
    }

    public function getCategoryLocal(){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Thêm danh mục hãng';
        $this->data['bg_category'] = '';
        $this->data['bg_category_product'] = '';
        $this->data['bg_category_local'] = 'slider-nav__bg';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $user =Auth::user();
        $listCategoryLocal = $this->categoryLocal->getCategoryLocal();

        return view('admin.category.category_local',compact('data','listCategoryLocal','user'));
    }

    public function postCategoryLocal(CategoryLocalRequest $request){
      
        $dataInsert =[
            $request->category_local_name = $request -> category_local_name,       
        ];
        $this->categoryLocal->addCategoryLocal($dataInsert);
        return back()->with('msg',"Thêm thành công");
    }

    public function getUpdateCategoryLocal(Request $request,$id){
        $this->data['title'] = 'Danh mục';
        $this->data['header'] = 'Danh mục';
        $this->data['heading'] = 'Cập nhật danh mục hãng';
        $this->data['bg_category'] = '';
        $this->data['bg_category_product'] = '';
        $this->data['bg_category_local'] = 'slider-nav__bg';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = 'side-bar__bg';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';

        $data = $this->data;
        $listCategoryLocal = $this->categoryLocal->getCategoryLocal();
        if(!empty($id)){
            $categoryLocal = $this->categoryLocal->getOnlyCategoryLocal($id);
            if(!empty($categoryLocal[0])){
                $request->session()->put('id',$id);
                $categoryLocal = $categoryLocal[0];
            }else{
                return redirect()->route('category.local')->with('msg','Danh mục không tồn tại!');
            }
        }
        else{
            return redirect()->route('category.local')->with('msg','Liên kết không tồn tại!');
        }
        return view('admin.category.category_local_update',compact('data','listCategoryLocal','categoryLocal'));
    }
    public function postUpdateCategoryLocal(CategoryLocalRequest $request) {
        $id = session('id');
        $dataInsert =[
            $request->category_local_name = $request -> category_local_name,       
        ];
        $this->categoryLocal->updateCategoryLocal($dataInsert,$id);
        return back()->with('msg',"Cập nhật thành công");
    }


    public function deleteCategoryLocal($id){
        if(!empty($id)) {
            $categoryLocal = $this->categoryLocal->getOnlyCategoryLocal($id);
            $categoryLocal = $categoryLocal[0];
            if(!empty($categoryLocal)){
                $this->categoryLocal->deleteCategoryLocal($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('category')
                ->with('msg',"Xóa không thành công");
            }
            
        }
    }
}
