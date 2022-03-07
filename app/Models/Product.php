<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function getProduct() {
       $list = DB::table(''.$this->table.'')->get();
       return $list;
    }
    public function getProductOther($id) {
        $list = DB::table(''.$this->table.'')
        ->where('id','<>',$id)
        ->get();
        return $list;
     }
    public function getOnlyProduct($id) {
        $category = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->first();
        return $category;
     }
    public function addProduct($data) {
        return DB::insert('insert into '.$this->table.'
        (product_name, product_image, product_price, category_product_id, description, insurance, series_laptop, status, cpu, ram, rom, card, screnn, 
        keyboard, audio, read_memory_card, lan, wireless_connectivity, webcam, the_web_of_communication, operating_system, battery, weight, size, color, security) 
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
    }

    public function updateProduct($data,$id) {
        $data[] = $id;
        return DB::update('update '.$this->table.' set product_name = ?, product_image = ?, product_price = ?, category_product_id = ?, description = ?, insurance = ?, series_laptop = ? , status = ? , cpu = ? , ram = ? , rom = ?, card = ? , screnn = ?, 
        keyboard = ?, audio = ?, read_memory_card = ?, lan = ?, wireless_connectivity = ?, webcam = ?, the_web_of_communication = ?, operating_system = ?, battery = ?, weight = ?, size = ?, color = ?, security = ? 
        where id = ? ', $data);
    }

    public function deleteProduct($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
    public function getImages($id) {
        $list = DB::table('image_product')
        ->where('product_id', $id)
        ->get();
       return $list;
    }
    public function searchProduct($data) {
        $data=str_replace('','%',$data);
        $list=DB::table(''.$this->table.'')
        ->where('product_name', 'like', '%'.$data.'%')
        ->paginate(24);
        return $list;
    }
} 