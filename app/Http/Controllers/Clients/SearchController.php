<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\SliderBanner;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    private $sliderBanner,$product;
    public function __construct(){
        $this->sliderBanner = new SliderBanner();
        $this->product = new Product();
    }
    public function getSearch(Request $request){
        $this->data['title'] = "Tim kiem" ;
        $listSliderBanner = $this->sliderBanner->getSlider();
        $dataS = session('dataS');
        if(!empty($dataS)){
            if(!empty($request->sort_desc) ){
                $sort = $request->sort_desc ;
                $listProduct = $this->product->getProductSort($sort,$dataS);
                $this->data['sort-desc'] = 'active';
                $this->data['sort-asc'] = '';
                $this->data['no-sort'] = '';
            }
            else if(!empty($request->sort_asc)){
                $sort = $request->sort_asc;
                $listProduct = $this->product->getProductSort($sort,$dataS);
                $this->data['sort-desc'] = '';
                $this->data['sort-asc'] = 'active';
                $this->data['no-sort'] = '';
            }
            else {
                $listProduct = $this->product->searchProduct($dataS);
                
                $this->data['sort-desc'] = '';
                $this->data['sort-asc'] = '';
                $this->data['no-sort'] = 'active';
            }
        }
        else{
            $listProduct = $this->product->getProduct();
            $this->data['sort-desc'] = '';
            $this->data['sort-asc'] = '';
            $this->data['no-sort'] = 'active';
        }
        $data = $this->data;
        return view('clients.search.search',compact('data','listSliderBanner','listProduct'));

    }
    public function postSearch(Request $request){
        $dataS = $request->data_search;
        $listProduct = $this->product->searchProduct($dataS);
        session()->put('dataS',$dataS);
        $this->data['title'] = "Tim kiem" ;
        $this->data['sort-desc'] = '';
        $this->data['sort-asc'] = '';
        $this->data['no-sort'] = 'active';
        $data = $this->data;
        $listSliderBanner = $this->sliderBanner->getSlider();
        return view('clients.search.search',compact('data','listSliderBanner','listProduct'));
    }
}
