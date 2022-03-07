<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $data = [];
    public function getHome(){
        $this->data['title'] = 'Home';
        $this->data['header'] ='Home';
        $this->data['bg_home'] ='side-bar__bg';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = '';
        $user =Auth::user();


        $data = $this->data;
        return view('admin.home',compact('data','user'));
    }

}
