<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function getOrder() {
       $list = DB::table(''.$this->table.'')
       ->select('id','name_customer', 'email_customer', 'phone_customer', 'address_customer', 'city_id', 'district_id', 'quantity', 'total_price','status','created_at')
       ->orderBy('created_at','DESC')
       ->paginate(30);
       return $list;
    }
    public function getOrderWithName($name) {
      $list = DB::table(''.$this->table.'')
      ->select('id','name_customer', 'email_customer', 'phone_customer', 'address_customer', 'city_id', 'district_id', 'quantity', 'total_price','status','created_at')
      ->where('name_customer','like', '%'.$name.'%')
      ->orderBy('created_at','DESC')
      ->paginate(10);
      return $list;
   }
   public function getOrderWithStatus($status) {
      $list = DB::table(''.$this->table.'')
      ->select('id','name_customer', 'email_customer', 'phone_customer', 'address_customer', 'city_id', 'district_id', 'quantity', 'total_price','status','created_at')
      ->where('status','=', $status)
      ->orderBy('created_at','DESC')
      ->paginate(10);
      return $list;
   }
    public function getInfoOrder($id) {
      $list = DB::table(''.$this->table.'')
      ->select('info_order')
      ->where('id','like',$id)
      ->first();
      return $list;
   }
    public function addOrder($data) {
        return DB::insert('insert into '.$this->table.' (id, name_customer, email_customer, phone_customer, address_customer, city_id, district_id, quantity, total_price, info_order,status,created_at) 
        values (?,?,?,?,?,?,?,?,?,?,?,?)', $data);
     }
   public function updateOrder($id,$status){
      return DB::table(''.$this->table.'')
      ->where('id',$id)
      ->update(['status'=>$status+1]);
   }
}
