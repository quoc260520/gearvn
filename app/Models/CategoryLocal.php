<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryLocal extends Model
{
    use HasFactory;
    protected $table = 'category_local';
    public function getCategoryLocal() {
       $list = DB::table(''.$this->table.'')->get();
       return $list;
    }
    public function getCategoryLocalOther($id) {
        $list = DB::table(''.$this->table.'')
        ->where('id','<>',$id)
        ->get();
        return $list;
     }
    public function getOnlyCategoryLocal($id) {
        $categoryLocal = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $categoryLocal;
     }
    public function addCategoryLocal($data) {
        return DB::insert('insert into '.$this->table.' (category_local_name) values (?)', $data);
    }

    public function deleteCategoryLocal($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
    public function updateCategoryLocal($data,$id) {
        $data[] = $id;
        return DB::update('update '.$this->table.' set category_local_name=? where id = ?', $data);
    }
}
