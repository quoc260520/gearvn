<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserAdminController extends Controller
{
    private $users;
    
    public function __construct(){
       $this->users = new User();
      
    }
    public function getUsers(){
        $this->data['title'] = 'Người dùng';
        $this->data['header'] = 'Người dùng';
        $this->data['heading'] = 'Danh sách người dùng';
        $this->data['bg_user'] = 'slider-nav__bg';
        $this->data['bg_add_user'] = '';
        $this->data['bg_update_user'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = 'side-bar__bg';

        $listUser = $this->users->getAdmin();
        $user =Auth::user();
        $data = $this->data;
        return view('admin.user.list_user',compact('data','listUser','user'));
    }
    public function getAddUser(){
        $this->data['title'] = 'Người dùng';
        $this->data['header'] = 'Người dùng';
        $this->data['heading'] = 'Thêm người dùng';
        $this->data['bg_user'] = '';
        $this->data['bg_add_user'] = 'slider-nav__bg';
        $this->data['bg_update_user'] = '';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = 'side-bar__bg';

        $data = $this->data;
        $user =Auth::user();
        return view('admin.user.add_user',compact('data','user'));
    }
    public function postAddUser(AdminRequest $request){
        if($request->hasFile('image')){
            $file_img = $request->image;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'Admin-'.uniqid().'.'.$ext;
            $request -> image = $new_name;
            $file_img->move(public_path('image/admin'),$new_name);
        }
        $password = $request->password;
        $request->password = bcrypt($password);
        $dataInsert =[
            $request->name             = $request->name,
            $request->email            = $request->email,
            $request->password         = $request->password,     
            $request->date_of_birth	   = $request->date_of_birth,
            $request->image            = $request->image,
           
        ];
        $this->users->add($dataInsert);
        return back()->with('msg',"Thêm admin thành công");
    }
        
    public function getUpdateUser(Request $request,$id){
        $this->data['title'] = 'Người dùng';
        $this->data['header'] = 'Người dùng';
        $this->data['heading'] = 'Cập nhật người dùng';
        $this->data['bg_user'] = '';
        $this->data['bg_add_user'] = '';
        $this->data['bg_update_user'] = 'slider-nav__bg';

        $this->data['bg_home'] = '';
        $this->data['bg_slider_sidebar'] = '';
        $this->data['bg_category_sidebar'] = '';
        $this->data['bg_product_sidebar'] = '';
        $this->data['bg_order_sidebar'] = '';
        $this->data['bg_user_sidebar'] = 'side-bar__bg';
       
        $user =Auth::user();

        $data = $this->data;
        if(!empty($id)||$id > 0){
            $request->session()->put('id',$id);
            $admin = $this->users->getOnlyAdmin($id);
            $admin = $admin[0];
        }
        else {
            return back()->with('msg','Liên kết không tồn tại');
        }
        
        
        return view('admin.user.update_user',compact('data','admin','user'));
    }
    public function postUpdateUser(Request $request){
        $id = session('id');
        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required|min:10|',
            'password' => 'required|min:8',
            'date_of_birth' => 'required|date',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ],[
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'image' => 'File phải là ảnh',
            'mimes:jpg,png,jpeg,gif,svg' => 'File phải là ảnh',
        ],[
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'date_of_birth' => 'Ngày sinh',
            'image' => 'Ảnh'
        ]);
        $email = $request->email;
        $flag = $this->users->checkEmail($email,$id);
        if($flag > 0){
            return back()->with('mes','Email đã tồn tại');
        }
        $password = $request->password;
        if (Hash::needsRehash($password))
        {
            $request->password = Hash::make($password);
        }
        else{
            $request->password = $password;
        }
       
        if($request->hasFile('image')){
            $file_img = $request->image;
            $file_name = $file_img->getClientoriginalName();
            $file_name = explode(".",$file_name);
            $ext = end($file_name);
            $new_name = 'Admin-'.uniqid().'.'.$ext;
            $request -> image = $new_name;
            $file_img->move(public_path('image/admin'),$new_name);

            if(!empty($id)) {
                $admin = $this->users->getOnlyAdmin($id);
                $admin = $admin[0];
                $destinationPath = 'image/admin/'.$admin->image;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
        }
        else{
            if(!empty($id)) {
                $admin = $this->users->getOnlyAdmin($id);
                $admin = $admin[0];
                $request -> image = $admin->image;
            }
        }

        $dataInsert =[
            $request->name             = $request->name,
            $request->email            = $request->email,
            $request->password         = $request->password,     
            $request->date_of_birth	   = $request->date_of_birth,
            $request->image            = $request->image,
        ];
        $this->users->updateUser($dataInsert,$id);
        return redirect()->route('user')->with('msg',"Cập nhật thành công");

    }
    public function deleteUser($id){
        if(!empty($id)) {
            $user = $this->users->getOnlyAdmin($id);
            $user = $user[0];
            $destinationPath = 'image/admin/'.$user->image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
            if(!empty($user)){
                $this->users->deleteUser($id);
                return back()->with('msg',"Xóa thành công");
            }
            else{
                return redirect()->route('user')
                ->with('msg',"Xóa không thành công");
            }
            
        }
        else {
            return redirect()->route('user')
            ->with('msg',"Người dùng không tồn tại");
        }
    }
}
