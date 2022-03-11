<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Address extends Model
{
    use HasFactory;
    protected $table_thanh_pho = 'devvn_tinhthanhpho';
    protected $table_quan_huyen = 'devvn_quanhuyen';
    public function getCity() {
       $list = DB::table(''.$this->table_thanh_pho.'')->get();
       return $list;
    }
    public function getDistrict($id) {
        $list = DB::table(''.$this->table_quan_huyen.'')
        ->where('matp',$id)
        ->get();
        return $list;
     }
    
    
}
