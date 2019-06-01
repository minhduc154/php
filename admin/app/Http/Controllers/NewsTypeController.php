<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsType;

class NewsTypeController extends Controller
{
    public function getList()
    {
        $newstype = NewsType::all();
        return view('newstype.newstype_list',['newstype'=>$newstype]);
    }
    public function getAdd()
    {
        return view('newstype.newstype_add');
    }


    public function postAdd(Request $request)
    {
       $this->validate($request,
            [
            'name_newstype'=>'required|min:2|max:100',
            ],
            [
              
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_newstype' => 'Tên loại tin',
            ]
        );
        $newstype= new NewsType;
        $newstype->name_newstype = $request->name_newstype;
        $newstype->save();

        return redirect('admin/newstype/add')->with('thongbao','Thêm thành công');
    }

    public function getEdit($id)
    {
        $newstype = NewsType::find($id);
        return view('newstype.newstype_edit',['newstype'=>$newstype]);
    }

    public function postEdit(Request $request, $id){

        $newstype = NewsType::find($id);
        $this->validate($request,
            [
                // 'name'=>'bail|required|unique:,name|min:5|max:100',
                'name_newstype'=>'bail|required|min:3|max:100', // name_ la gia tri cua name cua HTML
            ],
            [
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_newstype' => 'Tên loại tin',
            ]
        );

        $newstype->name_newstype = $request->name_newstype;
        $newstype->save();

        return redirect('admin/newstype/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
        $newstype = NewsType::find($id);
        $newstype->delete();

        return redirect('admin/newstype/list')->with('thongbao','Bạn đã xóa thành công');
    }
}
