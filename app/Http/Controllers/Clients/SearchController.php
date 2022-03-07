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
    public function postSearch(Request $request){
        $dataS = $request->data_search;
        $listProduct = $this->product->searchProduct($dataS);
        $this->data['title'] = "Tim kiem" ;
        $data = $this->data;
        $listSliderBanner = $this->sliderBanner->getSlider();
        return view('clients.search.search',compact('data','listSliderBanner','listProduct'));
    }
}
