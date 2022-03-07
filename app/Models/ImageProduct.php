<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImageProduct extends Model
{
    use HasFactory;
    protected $table = 'image_product';
    public function getImageProduct($id) {
       $list = DB::table(''.$this->table.'')
       ->where('product_id',$id)
       ->get();
       return $list;
    }
    public function getOnlyImageProduct($id) {
        $category = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $category;
     }
    public function addImageProduct($data) {
        return DB::insert('insert into '.$this->table.'
        (product_id, image) 
        values (?,?)', $data);
    }


    public function deleteImageProduct($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
}
