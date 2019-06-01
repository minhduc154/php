<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use App\User;
use App\Student;
use App\FileStudent;
use App\Company;

class UsersController extends Controller
{
    public function getLogin()
	{ 
		return view('log');
	}


	public function postLogin(Request $request)
	{
		$this->validate($request,[
			'username'=>'required',
			'password'=>'required'
		],[
			'username.required'=>'Tên đăng nhập không được để trống!',
			'password.required'=>'Mật khẩu không được để trống!'
		]);

		if(Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')]))
		{
			if(Auth::check())
			{
				$user = Auth::user('');

			}
			if(Auth::user()-> role == 0)
			{
				return redirect('home');
			}
			else if(Auth::user()-> role == 1)
			{
				$c= Auth::user() -> id;
				if( "" != (Company::find($c)))
					{
						
					return redirect('front');
					}
				else {
					return redirect('admin/company/add');
				}
			}

			else {
				
				$s= Auth::user() -> id;
				if( "" != (Student::find($s)))
					{
						
					return redirect('front');
					}
				else {
					return redirect('admin/student/add');
				}
				}
			
			
		}
		else {
			
			return redirect('login')->with('thongbao','Tài khoản hoặc mật khẩu không đúng!');
		}
	}







	public function getList()
	{
		$user = User::all();
		return view('users/user_list',['user'=>$user]);
	}





	public function getAdd()
	{
		return view('users/user_add');
	}
	public function postAdd(Request $request)
	{
		$this->validate($request,[
			'username' => 'required|min:3|max:32|unique:users',
			'password' => 'required|min:3|max:32',
			'repassword' => 'required|same:password',
			'email' => 'required|unique:users|email'
		],[
			'username.required' => 'Tài khoản không được để trống!',
			'username.min' => 'Tài khoản quá ngắn!',
			'username.max' => 'Tài khoản quá dài!',
			'username.unique' => 'Tài khoản này đã tồn tại!',
			'password.required' => 'Mật khẩu không được để trống!',
			'password.min' => 'Mật khẩu quá ngắn!',
			'password.max' => 'Mật khẩu quá dài!',
			'repassword.required' => 'Mật khẩu nhập lại không khớp!',
			'repassword.same' => 'Mật khẩu nhập lại không khớp!',
			'email.required' => 'Email không được để trống!',
			'email.unique' => 'Email này đã đăng ký tài khoản!',
			'email.email' => 'Email không đúng định dạng!'
 		]);

 		$user = new User;
 		$user ->username = $request ->username;
 		$user ->password =  bcrypt($request ->password);
 		$user ->email = $request -> email;
 		$user ->role = $request ->role;
 		$user -> save();

 		return redirect('admin/user/list') -> with('thongbao','Thêm thành công');
	}


	public function postAdd2(Request $request)
	{
		$this->validate($request,[
			'username' => 'required|min:3|max:32|unique:users',
			'password' => 'required|min:3|max:32',
			'repassword' => 'required|same:password',
			'email' => 'required|unique:users|email'
		],[
			'username.required' => 'Tài khoản không được để trống!',
			'username.min' => 'Tài khoản quá ngắn!',
			'username.max' => 'Tài khoản quá dài!',
			'username.unique' => 'Tài khoản này đã tồn tại!',
			'password.required' => 'Mật khẩu không được để trống!',
			'password.min' => 'Mật khẩu quá ngắn!',
			'password.max' => 'Mật khẩu quá dài!',
			'repassword.required' => 'Mật khẩu nhập lại không khớp!',
			'repassword.same' => 'Mật khẩu nhập lại không khớp!',
			'email.required' => 'Email không được để trống!',
			'email.unique' => 'Email này đã đăng ký tài khoản!',
			'email.email' => 'Email không đúng định dạng!'
 		]);

 		$user = new User;
 		$user ->username = $request ->username;
 		$user ->password =  bcrypt($request ->password);
 		$user ->email = $request -> email;
 		$user ->role = $request ->role;
 		$user -> save();

 		return redirect('login') -> with('thongbao','Đăng ký thành công!');
	}




	public function getEdit($id)
	{
		$user = User::find($id);
		return view('users/user_edit',['user'=>$user]);
	}
	
	public function postEdit(Request $request,$id)
	{


		$this->validate($request,[
			
			'email' => 'required|email'
		],[
			
			'email.required' => 'Email không được để trống!',
			//'email.unique' => 'Email này đã đăng ký tài khoản!',
			'email.email' => 'Email không đúng định dạng!'
 		]);

 		$user =  User::find($id);
 		$user ->email = $request ->email;
 		$user ->role = $request ->role;
 		$user -> save();

 		return redirect('admin/user/list') -> with('thongbao','Sửa thông tin tài khoản thành công!');
	}




	public function getDel($id)
	{
		$user =  User::find($id);
		
		$student['data'] = Student::find($id);
		// $s = $student['data'] -> id;
		// $file_student = FileStudent::find($s);
		// $file_student -> delete();
		// $student -> delete();
		$user->delete();
		return redirect('admin/user/list') -> with('thongbao','Xóa tài khoản thành công!');
	}}
