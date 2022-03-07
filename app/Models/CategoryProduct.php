<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'category_product';
    public function getCategoryProduct() {
       $list = DB::table(''.$this->table.'')->get();
       return $list;
    }
    public function getOnlyCategoryProduct($id) {
        $categoryProduct = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $categoryProduct;
     }
     public function getCategoryProductOther($id) {
        $list = DB::table(''.$this->table.'')
        ->where('id','<>',$id)
        ->get();
        return $list;
     }
    public function addCategoryProduct($data) {
        return DB::insert('insert into '.$this->table.' (category_product_name,category_id,category_local_id) values (?,?,?)', $data);
    }

    public function deleteCategoryProduct($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
    public function updateCategoryProduct($data,$id) {
        $data[] = $id;
        return DB::update('update '.$this->table.' set category_product_name=?,category_id=?,category_local_id=? where id = ?', $data);
    }
}
