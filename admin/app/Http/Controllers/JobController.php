<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{


    public function getList(){
        // $job= Job::orderby('id','DESC')->get();
        $job = Job::all();
     return view('job.job_list',['job'=>$job]);
    }

    public function getListForCompany()
    {
        $id = Auth::user()->id;
        $job = Job::where('id_company','=',"$id")->get();
        return view('job.job_list',['job'=>$job]);
    }

    public function getAdd(){
        // $company = Company::all();
        // return view('job/job_add',['company'=>$company]);
        return view('job.job_add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
            'name_job'=>'required|min:2|max:100',
            // 'type_job'=>'required',
            //'id_company'=>'required',
            'description_job'=>'required',
            'quantity_job'=>'required',
            'salary_job'=>'required',
            'address_job'=>'required',
            'workingtime_job'=>'required',
            'applicationtime_job'=>'required',
            'url_job'=>'required',
            ],
            [
              
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_job' => 'Tên công việc',
                'id_company' => 'Công ty',
                'description_job' => 'Email',
                'quantity_job' => 'Số điện thoại',
                'salary_job' => 'Ngày sinh',
                'address_job' => 'Địa chỉ',
                'workingtime_job' => 'thoi gian lam viec',
                'applicationtime_job' => 'thời gian ứng cử',
                'url_job' => 'website',
            ]
        );
        $job= new Job;
        $job->name_job = $request->name_job;
        $job->type_job = $request->type_job;
        $job->id_company = Auth::user()-> id;
        $job->description_job = $request->description_job;
        $job->address_job = $request->address_job;     
        $job->salary_job = $request->salary_job;     
        $job->quantity_job = $request->quantity_job;     
        $job->workingtime_job = $request->workingtime_job;     
        $job->applicationtime_job = $request->applicationtime_job;
        $job->url_job = $request->url_job;
        $job->save();

        return redirect('admin/job/add')->with('thongbao','Thêm thành công');
    }



    // public function getEdit($id){

    //     $job= Job::find($id);
    //     return view('job.job_edit',['job'=>$job]);
    // }

    // public function postEdit(Request $request, $id){

    //     $job = Job::find($id);
    //     $this->validate($request,
    //         [
    //         'name_job'=>'required|min:1|max:100',
    //         'id_company'=>'required|min:1|max:100',
    //         'description_job'=>'required',
    //         'quantity_job'=>'required',
    //         'salary_job'=>'required',
    //         'address_job'=>'required',
    //         'workingtime_job'=>'required',
    //         'applicationtime_job'=>'required',
    //         'url_job'=>'required'
    //         ],
    //         [
              
    //             'required' => ':attribute Không được để trống',
    //             'min' => ':attribute không được nhỏ hơn :min',
    //             'max' => ':attribute không được lớn hơn :max'
    //         ],
    //         [
    //             'name_job' => 'Tên khách hàng',
    //             'id_company' => 'Tên khách hàng',
    //             'description_job' => 'Email',
    //             'quantity_job' => 'Số điện thoại',
    //             'salary_job' => 'Ngày sinh',
    //             'address_job' => 'Địa chỉ',
    //             'workingtime_job' => 'thoi gian lam viec',
    //             'applicationtime_job' => 'thời gian ứng cử',
    //             'url_job' => 'website',
    //         ]
    //     );
    //     $job->name_job = $request->name_job;
    //     $job->type_job = $request->type_job;
    //     $job->id_company = $request->id_company;
    //     $job->description_job = $request->description_job;
    //     $job->address_job = $request->address_job;     
    //     $job->salary_job = $request->salary_job;     
    //     $job->quantity_job = $request->quantity_job;     
    //     $job->workingtime_job = $request->workingtime_job;     
    //     $job->applicationtime_job = $request->applicationtime_job;
    //     $job->url_job = $request->url_job;
    //     $job->save();

    //     return redirect('admin/job/edit/'.$id)->with('thongbao','Sửa thành công');

    // }


     public function getEdit($id)
    {
        $job = Job::find($id);
        return view('job.job_edit',['job'=>$job]);
    }

    public function postEdit(Request $request, $id){

        $job = Job::find($id);
        $this->validate($request,
            [
                'name_job'=>'bail|required|min:3|max:100',
                'id_company'=>'required|min:1|max:100',
                'description_job'=>'required',
                'quantity_job'=>'required',
                'salary_job'=>'required',
                'address_job'=>'required',
                'workingtime_job'=>'required',
                'applicationtime_job'=>'required',
                'url_job'=>'required'
            ],
            [
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_job' => 'Tên loại tin',
                'id_company' => 'Công ty',
                'description_job' => 'Mô tả',
                'quantity_job' => 'Số lượng',
                'salary_job' => 'Lương',
                'address_job' => 'Địa chỉ',
                'workingtime_job' => 'thoi gian lam viec',
                'applicationtime_job' => 'thời gian ứng cử',
                'url_job' => 'website',
            ]
        );

        $job->name_job = $request->name_job;
        $job->type_job = $request->type_job;
        $job->id_company = $request->id_company;
        $job->description_job = $request->description_job;
        $job->address_job = $request->address_job;     
        $job->salary_job = $request->salary_job;     
        $job->quantity_job = $request->quantity_job;     
        $job->workingtime_job = $request->workingtime_job;     
        $job->applicationtime_job = $request->applicationtime_job;
        $job->url_job = $request->url_job;
        $job->save();

        return redirect('admin/job/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('admin/job/list')->with('thongbao','Bạn đã xóa thành công');
    }

    public function getSearch(Request $request)
    {   
        $name = $request-> name_job;
        $type = $request -> type_job;
        $address = $request -> address_job;
        if($name != '' && $type != '' && $address != '')
        {
        $job = Job::where('name_job','like',"%$name%")->orwhere('type_job','like',"%$type%")->orwhere('address_job','like',"%$address%")->get();
        return view('utt/searchJob',['job'=>$job]);
        }
        else if($name == '' && $type != '' && $address == '') {
            $job = Job::where('type_job','like',"%$type%")->get();
        return view('utt/searchJob',['job'=>$job]);
        }
        else if($name == '' && $type == '' && $address != '') {
            $job = Job::where('address_job','like',"%$address%")->get();
        return view('utt/searchJob',['job'=>$job]);
        }
        else if($name != '' && $type == '' && $address == '') {
            $job = Job::where('name_job','like',"%$name%")->get();
        return view('utt/searchJob',['job'=>$job]);
        }
        else if($name != '' && $type != '' && $address == '') {
            $job = Job::where('name_job','like',"%$name%")->orwhere('type_job','like',"%$type%")->get();
        return view('utt/searchJob',['job'=>$job]);
        }
    }


    public function infoJob($id)
    {
        $job = Job::find($id);      
        return view('utt/infoJob',['job'=> $job]);
    }

    
}
