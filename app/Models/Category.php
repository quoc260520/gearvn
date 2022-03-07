<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public function getCategory() {
       $list = DB::table(''.$this->table.'')->get();
       return $list;
    }
    public function getCategoryOther($id) {
        $list = DB::table(''.$this->table.'')
        ->where('id','<>',$id)
        ->get();
        return $list;
     }
    public function getOnlyCategory($id) {
        $category = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $category;
     }
    public function addCategory($data) {
        return DB::insert('insert into '.$this->table.' (category_name) values (?)', $data);
    }

    public function deleteCategory($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
    public function updateCategory($data,$id) {
        $data[] = $id;
        return DB::update('update '.$this->table.' set category_name=? where id = ?', $data);
    }
}
