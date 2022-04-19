<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

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
      ->paginate(30);
      return $list;
   }
   public function getOrderWithStatus($status) {
      $list = DB::table(''.$this->table.'')
      ->select('id','name_customer', 'email_customer', 'phone_customer', 'address_customer', 'city_id', 'district_id', 'quantity', 'total_price','status','created_at','update_at')
      ->where('status','=', $status)
      ->orderBy('created_at','DESC');
      $list = $list->paginate(30)->withQueryString();
      return $list;
   }
   public function getTotalPrice($status){
      $totalPrice = DB::table(''.$this->table.'')
      ->select('total_price')
      ->where('status',$status)
      ->get();
      return $totalPrice;
   }
   public function getTotalPriceMonth($status,$year,$month){
      $totalPrice = DB::table(''.$this->table.'')
      ->whereYear('update_at', '=', $year)
      ->whereMonth('update_at', '=', $month)
      ->where('status',$status)
      ->get();
      return $totalPrice;
   }
   public function getTotalPriceYear($status,$year){
      $totalPrice = DB::table(''.$this->table.'')
      ->whereYear('update_at', '=', $year)
      ->where('status',$status)
      ->get();
      return $totalPrice;
   }
   public function getTotalPriceWithTime($status,$date,$month,$year){
      $totalPrice = DB::table(''.$this->table.'')
      ->whereYear('update_at', '=', $year)
      ->whereMonth('update_at', '=', $month)
      ->whereDay('update_at', '=', $date)
      ->where('status',$status)
      ->get();
      return $totalPrice;
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
   public function updateOrder($id,$status,$date){
      return DB::table(''.$this->table.'')
      ->where('id',$id)
      ->update([
               'status'=>$status+1,
               'update_at'=> $date],
            );
   }
}
