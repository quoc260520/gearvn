<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
    protected $fillable = [
        'email',
        'password',
    ];
    public function add($data){
        return DB::insert('insert into '.$this->table.' (name,email,password,date_of_birth,image) values (?,?,?,?,?)',$data);
    }
    public function getAdmin(){
        $list = DB::table(''.$this->table.'')->get();
        return $list;
    }
    public function getOnlyAdmin($id){
        $admin = DB::table(''.$this->table.'')
        ->where('id',$id)
        ->get();
        return $admin;
    }
    public function updateUser($data,$id){
        $data[] = $id;
        return DB::update('update '.$this->table.' set name = ?, email = ?, password = ?, date_of_birth = ?, image = ? 
        where id = ? ', $data);
    }
    public function checkEmail($email,$id){
        return DB::table(''.$this->table.'')
        ->where('email','like',$email)
        ->where('id','<>',$id)
        ->count();
    }
    public function deleteUser($id){
        return DB::delete('delete from '.$this->table.' where id = ?', [$id]);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
