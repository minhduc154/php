<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class TopicController extends Controller
{
    //
    public function getList()
    {
    	$topic = Topic::all();
    	return view('topic/topic_list',['topic' => $topic]);
    }

    public function getEdit($id)
    {
    	$topic = Topic::find($id);
		return view('topic/topic_edit',['topic'=>$topic]);
    }

    public function postEdit(Request $request,$id)
    {
    	$topic = Topic::find($id);
 		$topic ->status = $request ->status;
 		$topic -> save();
        if($request ->status == 1)
        {
            $user = User::find($topic -> id_student);
            $mail = $user -> email;
            Mail::to($mail)->send(new SendMailable());
        }

 		return redirect('admin/topic/list') -> with('thongbao','Cập nhật thông tin thành công!');
    
  
 
}

    public function getListForCompany()
    {   
        $id_company = Auth::user() -> id;
        $topic = Topic::where('id_company','=',"$id_company")->get();
        return view('topic/topic_list',['topic' => $topic]);
    }
    public function getListForStudent()
    {   
        $id_student = Auth::user() -> id;
        $topic = Topic::where('id_student','=',"$id_student")->get();
        return view('topic/topic_list',['topic' => $topic]);
    }
}
