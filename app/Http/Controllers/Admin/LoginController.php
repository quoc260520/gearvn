<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    protected $users;
    public function __construct(){
        $this->users = new User();
    }
    public function getLogin(){ 
        return view('login_admin');
    }
    public function postLogin(LoginRequest $request){ 

        $dataLogin = [
            'email'    =>  $request->email,
            'password' =>  ($request->password)
        ];
        if (Auth::guard('web')->attempt($dataLogin)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
 
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng',
        ]);
       
    }
    public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
    }
}
