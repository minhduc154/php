<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Job;
use App\Company;
use App\Topic;
use App\Student;
use App\News;


class FrontController extends Controller
{
    public function home()
    {
    	$job = Job::all();    	
        
    	return view('utt/index',['job'=> $job]);
    }

    public function blog()
    {
        $news = News::ALL();
        return view('utt/blog/blog',['news'=> $news]);
    }
   

    public function apply($id)
    {

        
        $job = Job::find($id);
    
        $topic = new Topic;
        $topic -> id_student = Auth::user() -> id;
        $topic -> id_company = $job -> id_company;
        $topic -> id_job = $id;
        $topic -> status = '0';
        $topic -> save();

        return redirect('front') -> with('thongbao','ứng tuyển thành công');
        
    }

}
