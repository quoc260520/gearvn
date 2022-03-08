<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderTopPC extends Model
{
    use HasFactory;
    protected $table = 'top_pc';
    public function getSlider() {
       $list = DB::table(''.$this->table.'')
       ->get();
       return $list;
    }
    public function getPc(){
        $list = DB::table(''.$this->table.'')
       ->select('top_pc.*','product.product_name','product.product_price','product.product_image')
       ->join('product', 'top_pc.product_id','=','product.id')
       ->get();
        return $list;
    }
    public function check($id) {
        $list = DB::table(''.$this->table.'')
        ->where('product_id', $id)
        ->get();
        return $list;
     }
    public function getProductFlS() {
        return DB::table(''.$this->table.'')
        ->select('top_pc.*','product.product_name')
        ->join('product', 'top_pc.product_id','=','product.id')
        ->get();
    }
    public function getOnlySlider($id) {
        $slider = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $slider;
     }
    public function addSlider($data) {
        return DB::insert('insert into '.$this->table.' (product_id) values (?)', $data);
    }
    public function deleteSlider($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
}
