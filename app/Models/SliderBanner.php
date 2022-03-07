<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderBanner extends Model
{
    protected $table = 'slider_banner';
    public function getSlider() {
       $list = DB::table(''.$this->table.'')->get();
       return $list;
    }
    public function getOnlySlider($id) {
        $slider = DB::table(''.$this->table.'')
        ->where('id', '=', $id)
        ->get();
        return $slider;
     }
    public function addSlider($data) {
        return DB::insert('insert into '.$this->table.' (image, link) values (?, ?)', $data);
    }
    public function deleteSlider($id) {
       return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }
}
