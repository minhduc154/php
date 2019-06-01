<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;



class CompanyController extends Controller
{
    public function getList()
    {
        $company = Company::all();
    	 return view('company.company_list',['company'=>$company]);
    }
    public function getAdd()
    {
      // $user = User::all();
      // return view('company.company_add',['user'=>$user]);
      return view('company.company_add');

    }


    public function postAdd(Request $request)
    {

      $this->validate($request,
            [
              'name_company' => 'bail|required|min:3|max:100',
              'phone_company' => 'bail|required|numeric',
              'email_company' => 'bail|required|email',
              'url_company' => 'bail|required',
              'address_company' => 'bail|required',
              'image_company' => 'bail|required',
            ],
            [
              
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
                'email' => ':attribute phải đúng định dạng email',
                'nummeric' => ':attribute phải đúng định dạng email',
            ],
            [
                'name_company' => 'Tên công ty',
                'phone_company' => 'Số điện thoại',
                'email_company' => 'Email',
                'url_company' => 'Url',
                'address_company' => 'Địa chỉ',
                'image_company' => 'Ảnh',
            ]
        );
        $company= new Company;
        $company-> id = Auth::user() -> id; 
        $company->name_company = $request->name_company;
        $company->phone_company = $request->phone_company;
        $company->email_company = $request->email_company;
        $company->url_company = $request->url_company;
        $company->address_company = $request->address_company;
        if ($request->hasFile('image_company'))
        {
            $file = $request->file('image_company');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/company/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $image_company = str_random(4)."_".$name;
            while (file_exists("upload/company/".$image_company)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/company",$image_company);
            $company->image_company=$image_company;
        }
        else 
        {
            $company->image_company="";
        }    
        $company->save();

        return redirect('front')->with('thongbao','Thêm thành công');
    }

     public function getEdit($id)
    {
        $company = Company::find($id);
        return view('company.company_edit',['company'=>$company]);
    }

    public function postEdit(Request $request, $id){

        $company = Company::find($id);
        $this->validate($request,
            [
                'name_company'=>'bail|required|min:3|max:100',
                'phone_company'=>'required|numeric',
                'email_company'=>'required|email',
                'url_company'=>'required',
                'address_company'=>'required',
            ],
            [
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
                'email' => ':attribute phải đúng định dạng email',
                'nummeric' => ':attribute phải đúng định dạng email',
            ],
            [
                'name_company' => 'Tên công ty',
                'phone_company' => 'Số điện thoại',
                'email_company' => 'Email',
                'url_company' => 'Url',
                'address_company' => 'Địa chỉ',
            ]
        );

        $company->name_company = $request->name_company;
        $company->phone_company = $request->phone_company;
        $company->email_company = $request->email_company;
        $company->url_company = $request->url_company;
        $company->address_company = $request->address_company;
        if ($request->hasFile('image_company'))
        {
            $file = $request->file('image_company');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/company/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $image_company = str_random(4)."_".$name;
            while (file_exists("upload/company/".$image_company)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/company",$image_company);
            unlink("upload/company/".$company->image_company);
            $company->image_company=$image_company;
        }
        $company->save();

        return redirect('admin/company/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('admin/company/list')->with('thongbao','Bạn đã xóa thành công');
    }

}
