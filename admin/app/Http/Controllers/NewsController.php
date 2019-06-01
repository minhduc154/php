<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsType;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function getList()
    {
        $news = News::all();
        return view('news.news_list',['news'=>$news]);
    }
    public function getAdd()
    {
    	$newstype = NewsType::all();
        return view('news.news_add',['newstype'=>$newstype]);
    }

    public function postAdd(Request $request)
    {
       $this->validate($request,
            [
	            'name_news'=>'required|min:2|max:100',
	            'title_news'=>'required|min:3|max:100',	
				'description_news'=>'required|min:3|max:100',	
				'content_news'=>'required|min:3',	
            ],
            [
              
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_news' => 'Tên loại tin',
                'title_news' =>' Tiêu đề',	
				'description_news' =>'Mô tả',	
				'content_news' =>'Nội dung',	
            ]
        );
        $news = new News;
        $news -> id_user = Auth::user()->id;
        $news->name_news = $request->name_news;
        $news->id_newstype =$request->newstype;
        $news->title_news = $request->title_news;	
		$news->description_news = $request->description_news;	
		$news->content_news = $request->content_news;

        if ($request->hasFile('image_news'))
        {
            $file = $request->file('image_news');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/news/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình

            $image_news = str_random(4)."_".$name;
            // echo $image_news;
            while (file_exists("upload/news/".$image_news)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/news",$image_news);
            $news->image_news=$image_news;
        }
        else 
        {
            $news->image_news="";
        }

        // $destinationPath = 'uploads/news';
        // $image_news = '';
        // if($request['image_news']) {
        //     $image_news = $request['image_news']->getClientOriginalName();
        //     $image = $request['image_news']->move($destinationPath, $image_news);
        //     $img = 'uploads/news/'.$image_news;


        //     $news['image_news'] = $img;
        // }

        $news->save();
        return redirect('admin/news/add')->with('thongbao','Thêm thành công');
    }

    public function getEdit($id)
    {
        $newstype= NewsType::all();
        $news = News::find($id);
        return view('news.news_edit',['news'=>$news,'newstype'=>$newstype]);
    }

    public function postEdit(Request $request, $id){

        $news = News::find($id);
        $this->validate($request,
            [
                'name_news'=>'required|min:2|max:100',
                'title_news'=>'required|min:3|max:100',    
                'description_news'=>'required|min:3|max:100',   
                'content_news'=>'required|min:3',   
            ],
            [             
                'required' => ':attribute Không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
            ],
            [
                'name_news' => 'Tên loại tin',
                'title_news' =>' Tiêu đề', 
                'description_news' =>'Mô tả',   
                'content_news' =>'Nội dung',    
            ]
        );
        $news->name_news = $request->name_news;
        $news->id_newstype =$request->newstype;
        $news->title_news = $request->title_news;   
        $news->description_news = $request->description_news;   
        $news->content_news = $request->content_news;   
        // csdl=name->html

        if ($request->hasFile('image_news'))
        {
            $file = $request->file('image_news');
            $duoihinhanh =$file->getClientOriginalExtension();
            if ($duoihinhanh != 'jpg' && $duoihinhanh != 'png' && $duoihinhanh != 'jpeg') {
                return redirect('admin/news/add')->with('loi','ban chi duoc nhap duoi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName(); //lấy tên file gốc của hình
            $image_news = str_random(4)."_".$name;
            while (file_exists("upload/news/".$image_news)) {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/news",$image_news);
            unlink("upload/news/".$news->image_news);
            $news->image_news=$image_news;
        }
        $news->save();

        return redirect('admin/news/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('admin/news/list')->with('thongbao','Bạn đã xóa thành công');
    }

    public function infoNews($id)
    {
        $news = News::find($id);      
        return view('utt/infoNews',['news'=> $news]);
    }
}
