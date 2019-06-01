<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;
use App\FileStudent;

class StudentController extends Controller
{

    public function getList(){
    	$student = Student::all();
        return view('student.student_list',['student'=>$student]);
    }

    public function getAdd(){
    	return view('student.student_add');
    }
     public function postAdd(Request $request){

     	$student = Student::all();
     	$this->validate($request,[
			'name_student'=>'bail|required',
			'career_student' =>'bail|required',
			'jobtype_student'=>'bail|required',
     	],[
     		'required'=>':attribute không được để trống',
     	],[
			'name_student'=>'Tên',
			'career_student'=>'Nghề nghiệp',
			'jobtype_student'=>'Loại công việc',
     	]);

     	$student = new Student;
        $student -> id =  Auth::user()-> id;
     	$student->name_student =$request->name_student;
		$student->career_student =$request->career_student;
		$student->jobtype_student =$request->jobtype_student;
		if ($request->hasFile('image_student'))
        {
            $file = $request->file('image_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/student/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $image_student = str_random(4)."_".$name;
            while (file_exists("upload/student/".$image_student)) {
                $image_student = str_random(4)."_".$name;
            }
            $file->move("upload/student",$image_student);
            $student->image_student=$image_student;
        }
        else 
        {
            $student->image_student="";
        }    

		$student->save();

        $filestudent = FileStudent::all();
        $this->validate($request,[
            'technique_student'=>'bail|required',
            'address_student' =>'bail|required',
            'birthday'=>'bail|required|date|date_format:Y-m-d',
            'taget_student'=>'bail|required',
            'education_student'=>'bail|required',
            'experience_student'=>'bail|required',
            'skill_student'=>'bail|required',
            // 'email_student'=>'bail|required|email',
            'phone_student'=>'bail|required|numeric',
        ],[
            'required'=>':attribute không được để trống',
            // 'email'=>':attribute chưa đúng',
            'numeric'=>':attribute phải là số',

        ],[
            'technique_student'=>'Chuyên ngành',
            'address_student'=>'Địa chỉ',
            'birthday'=>'Ngày sinh',
            'taget_student'=>'Mục tiêu',
            'education_student'=>'Trình độ',
            'experience_student'=>'Kinh nghiệm',
            'skill_student'=>'Kĩ năng',
            // 'email_student'=>'Email',
            'phone_student'=>'Số điện thoại',
        ]);
        $filestudent = new FileStudent;
        //dd( Auth::user()->id);
        $filestudent -> id = Auth::user() -> id;
        $filestudent->technique_student =$request->technique_student;
       // $filestudent->id_student =$request->id_student;
        $filestudent->address_student =$request->address_student;
        $filestudent->birthday =$request->birthday;
        $filestudent->taget_student =$request->taget_student;
        $filestudent->education_student =$request->education_student;
        $filestudent->skill_student =$request->skill_student;
        $filestudent->experience_student =$request->experience_student;
        $filestudent->email_student =Auth::user()->email;
        $filestudent->phone_student =$request->phone_student;

        if ($request->hasFile('pdf_student'))
        {
            $file = $request->file('pdf_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'pdf' && $duoihinhanh != 'docx' && $duoihinhanh != 'xlsx') {
                return redirect('admin/filestudent/add')->with('loi','ban chi duoc nhap duoi pdf, docx, xlsx');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $pdf_student = str_random(4)."_".$name;
            while (file_exists("upload/filestudent/".$pdf_student)) {
                $pdf_student = str_random(4)."_".$name;
            }
            $file->move("upload/filestudent",$pdf_student);
            $filestudent->pdf_student=$pdf_student;
        }
        else 
        {
            $filestudent->pdf_student="";
        }    


        $filestudent->save();

        
		return redirect('front')->with('thongbao','Thêm thông tin thành công');
     }
// ----------------------------------------------------------------------------------

    public function getEdit($id)
    {
        $student = Student::find($id);
        $filestudent = FileStudent::find($id);
        return view('student.student_edit',['student'=>$student],['filestudent'=>$filestudent]);
    }

    public function postEdit(Request $request, $id){

        $student = Student::find($id);
        $this->validate($request,[
            'name_student'=>'bail|required',
            'career_student' =>'bail|required',
            'jobtype_student'=>'bail|required',
        ],[
            'required'=>':attribute không được để trống',
        ],[
            'name_student'=>'Tên',
            'career_student'=>'Nghề nghiệp',
            'jobtype_student'=>'Loại công việc',
        ]);

        $student->name_student = $request->name_student;
        $student->career_student =$request->career_student;
        $student->jobtype_student =$request->jobtype_student;
        if ($request->hasFile('image_student'))
        {
            $file = $request->file('image_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/student/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $image_student = str_random(4)."_".$name;
            while (file_exists("upload/student/".$image_student)) {
                $image_student = str_random(4)."_".$name;
            }
            $file->move("upload/student",$image_student);
            unlink("upload/student/".$student->image_student);
            $student->image_student=$image_student;
        }
        $student->save();

        $filestudent = FileStudent::find($id);
        $this->validate($request,[
            'technique_student'=>'bail|required',
            'address_student' =>'bail|required',
            'birthday'=>'bail|required|date',
            'taget_student'=>'bail|required',
            'education_student'=>'bail|required',
            'experience_student'=>'bail|required',
            'skill_student'=>'bail|required',
            // 'email_student'=>'bail|required|email',
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
        //dd( Auth::user()->id);
        $filestudent -> id = Auth::user() -> id;
        $filestudent->technique_student =$request->technique_student;
       // $filestudent->id_student =$request->id_student;
        $filestudent->address_student =$request->address_student;
        $filestudent->birthday =$request->birthday;
        $filestudent->taget_student =$request->taget_student;
        $filestudent->education_student =$request->education_student;
        $filestudent->skill_student =$request->skill_student;
        $filestudent->experience_student =$request->experience_student;
        // $filestudent->email_student =$request->email_student;
        $filestudent->phone_student =$request->phone_student;

        if ($request->hasFile('pdf_student'))
        {
            $file = $request->file('pdf_student');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'pdf' && $duoihinhanh != 'docx' && $duoihinhanh != 'xlsx') {
                return redirect('admin/filestudent/add')->with('loi','ban chi duoc nhap duoi pdf, docx, xlsx');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $pdf_student = str_random(4)."_".$name;
            while (file_exists("upload/filestudent/".$pdf_student)) {
                $pdf_student = str_random(4)."_".$name;
            }
            $file->move("upload/filestudent",$pdf_student);
            $filestudent->pdf_student=$pdf_student;
        }
        else 
        {
            $filestudent->pdf_student="";
        }    
        $filestudent->save();

        $user = User::find($id);
        $user->email =$request->email_student;
        $user -> save();

        return redirect('admin/student/edit/'.$id)->with('thongbao','Sửa thành công');
    }
//----------------------------------------------------------------------------------------

     public function getDelete($id){
     	$student = Student::find($id);
        $student->delete();

        return redirect('admin/student/list')->with('thongbao','Bạn đã xóa thành công');
     }



    

}
