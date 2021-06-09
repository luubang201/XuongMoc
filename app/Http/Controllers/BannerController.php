<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::latest()->paginate(20);
        return view('backend.banner.index',[
            'data' =>  $banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           /* 'title' => 'required',*/
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            /*'title.required' => 'Bạn chưa nhập tiêu đề',*/
            'description.email' => 'Bạn chưa nhập mô tả',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $description  = $request->input('description');
        $target  = $request->input('target');
        $type = $request->input('type');
        $position  = $request->input('position');
        $url  = $request->input('url');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/banner/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }
        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $banner = new Banner();
        $banner->title = $title;
        $banner->slug = $slug;
        $banner->description = $description;
        $banner->position = $position;
        $banner->target = $target;
        $banner->type = $type;
        $banner->url = $url;
        $banner->is_active = $is_active;
        $banner->image = $path_image;
        $banner->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Banner::find($id);

        return view('backend.banner.edit',[
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'description.email' => 'Bạn chưa nhập mô tả',
            'avatar.mines' => 'File ảnh chưa đúng định dạng',
            'avatar.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $description  = $request->input('description');
        $target  = $request->input('target');
        $type = $request->input('type');
        $position  = $request->input('position');
        $url  = $request->input('url');


        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $banner = Banner::find($id);
        $banner->title = $title;
        $banner->slug = $slug;
        $banner->description = $description;
        $banner->position = $position;
        $banner->target = $target;
        $banner->type = $type;
        $banner->url = $url;
        $banner->is_active = $is_active;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/banner/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $banner->image = $path_image;
        }
        $banner->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Banner::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}
