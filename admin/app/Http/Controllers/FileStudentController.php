<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileStudent;
use App\Student;

class FileStudentController extends Controller
{
    public function getList(){
    	$filestudent = FileStudent::all();
    	return view('filestudent.filestudent_list',['filestudent'=>$filestudent]);
    }

    public function getAdd(){
    	return view('filestudent.filestudent_add');
    }
     public function postAdd(Request $request){

     	$filestudent = FileStudent::all();
     	$this->validate($request,[
			'technique_student'=>'bail|required',
			'address_student' =>'bail|required',
			'Ngày sinh'=>'bail|required|date|date_format:M-d-y',
			'taget_student'=>'bail|required',
			'education_student'=>'bail|required',
			'experience_student'=>'bail|required',
			'skill_student'=>'bail|required',
			'email_student'=>'bail|required|email',
			'phone_student'=>'bail|required|numeric',
     	],[
     		'required'=>':attribute không được để trống',
     		'email'=>':attribute chưa đúng',
     		'numeric'=>':attribute phải là số',

     	],[
			'technique_student'=>'Chuyên ngành',
			'address_student'=>'Địa chỉ',
			'birthday'=>'Ngày sinh',
			'taget_student'=>'Mục tiêu',
			'education_student'=>'Trình độ',
			'experience_student'=>'Kinh nghiệm',
			'skill_student'=>'Kĩ năng',
			'email_student'=>'Email',
			'phone_student'=>'Số điện thoại',
     	]);

     	$filestudent = new FileStudent;
        $FileStudent -> id_student = Auth::user() -> student -> id;
     	$filestudent->technique_student =$request->technique_student;
        $filestudent->id_student =$request->id_student;
		$filestudent->address_student =$request->address_student;
		$filestudent->birthday =$request->birthday;
		$filestudent->taget_student =$request->taget_student;
		$filestudent->education_student =$request->education_student;
		$filestudent->experience_student =$request->experience_student;
		$filestudent->skill_student =$request->skill_student;
		$filestudent->email_student =$request->email_student;
		$filestudent->phone_student =$request->phone_student;

		if ($request->hasFile('pdf_student'))
        {
            $file = $request->file('pdf_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'pdf' && $duoihinhanh != 'docx' && $duoihinhanh != 'xlsx') {
                return redirect('admin/filestudent/add')->with('loi','ban chi duoc nhap duoi pdf, docx, xlsx');
            }

            $skill = $file->getClientOriginalskill(); //lấy tên file gốc của hình

            $pdf_student = str_random(4)."_".$skill;
            while (file_exists("upload/filestudent/".$pdf_student)) {
                $pdf_student = str_random(4)."_".$skill;
            }
            $file->move("upload/filestudent",$pdf_student);
            $filestudent->pdf_student=$pdf_student;
        }
        else 
        {
            $filestudent->pdf_student="";
        }    

		$filestudent->save();
		return redirect('admin/filestudent/add')->with('thongbao','Thêm thành công');
     }



     public function getEdit($id){
     	$filestudent = FileStudent::find($id);
        return view('filestudent.filestudent_edit',['filestudent'=>$filestudent]);
     }

     public function postEdit(Request $request, $id){

     	$filestudent = FileStudent::find($id);
        $this->validate($request,[
			'technique_student'=>'bail|required',
			'address_student' =>'bail|required',
			'birthday'=>'bail|required',
			'taget_student'=>'bail|required',
			'education_student'=>'bail|required',
			'experience_student'=>'bail|required',
			'skill_student'=>'bail|required',
			'email_student'=>'bail|required|email',
			'phone_student'=>'bail|required|numeric',
     	],[
     		'required'=>':attribute không được để trống',
     		'email'=>':attribute chưa đúng',
     		'numeric'=>':attribute phải là số',
     	],[
			'technique_student'=>'Chuyên ngành',
			'address_student'=>'Địa chỉ',
			'birthday'=>'Thời gian làm việc',
			'taget_student'=>'Mục tiêu',
			'education_student'=>'Trình độ',
			'experience_student'=>'Kinh nghiệm',
			'skill_student'=>'Kĩ năng',
			'email_student'=>'Email',
			'phone_student'=>'Số điện thoại',
     	]);
     	$filestudent->technique_student =$request->technique_student;
		$filestudent->address_student =$request->address_student;
		$filestudent->birthday =$request->birthday;
		$filestudent->taget_student =$request->taget_student;
		$filestudent->education_student =$request->education_student;
		$filestudent->experience_student =$request->experience_student;
		$filestudent->skill_student =$request->skill_student;
		$filestudent->email_student =$request->email_student;
		$filestudent->phone_student =$request->phone_student;
        if ($request->hasFile('pdf_student'))
        {
            $file = $request->file('pdf_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'pdf' && $duoihinhanh != 'docx' && $duoihinhanh != 'xlsx') {
                return redirect('admin/filestudent/add')->with('loi','ban chi duoc nhap duoi pdf, docx, xlsx');
            }

            $skill = $file->getClientOriginalskill(); //lấy tên file gốc của hình

            $pdf_student = str_random(4)."_".$skill;
            while (file_exists("upload/filestudent/".$pdf_student)) {
                $pdf_student = str_random(4)."_".$skill;
            }
            $file->move("upload/filestudent",$pdf_student);
            unlink("upload/filestudent/".$filestudent->pdf_student);
            $filestudent->pdf_student=$pdf_student;
        }
        $filestudent->save();

        return redirect('admin/filestudent/edit/'.$id)->with('thongbao','Sửa thành công');
     }

     public function getDelete($id){
     	$filestudent = FileStudent::find($id);
     	$filestudent->delete();
     	return redirect('admin/filestudent/list')->with('thongbao','Bạn đã xóa thành công');
     }


      public function getSearch(Request $request)
    {   
        $skill = $request-> skill_student;
        $exp = $request -> experience_student;
        $address = $request -> address_student;
        
        if($skill != '' && $exp != '' && $address != '')
        {
        $student = FileStudent::where('skill_student','like',"%$skill%")->orwhere('experience_student','like',"%$exp%")->orwhere('address_student','like',"%$address%")->get();
        return view('utt/searchStudent',['student'=>$student]);
        }
        else if($skill == '' && $exp != '' && $address == '') {
            $student = FileStudent::where('experience_student','like',"%$exp%")->get();
        return view('utt/searchStudent',['student'=>$student]);
        }
        else if($skill == '' && $exp == '' && $address != '') {
            $student = FileStudent::where('address_student','like',"%$address%")->get();
        return view('utt/searchStudent',['student'=>$student]);
        }
        else if($skill != '' && $exp == '' && $address == '') {
            $student = FileStudent::where('skill_student','like',"%$skill%")->get();
        return view('utt/searchStudent',['student'=>$student]);
        }
        else if($skill != '' && $exp != '' && $address == '') {
            $student = FileStudent::where('skill_student','like',"%$skill%")->orwhere('experience_student','like',"%$exp%")->get();


        return view('utt/searchStudent',['student'=>$student]);
        }
    }

     public function infoStudent($id)
    {
        $student = FileStudent::find($id);      
        return view('utt/infoStudent',['student'=> $student]);
    }
}