<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('ád');
        $category = Category::latest()->paginate(10);
        return view('backend.category.index',[
            'data' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('backend.category.create',[
            'data' => $data
        ]);
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
            'name' => 'required|max:255',
            'type' => 'required|integer',
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn chưa nhập tên danh mục',
            'type.integer' => 'Bạn chưa chọn kiểu danh mục',
//            'image.mines' => 'File ảnh chưa đúng định dạng',
//            'image.max' => 'Kích thước file quá lớn'
        ]);

        $name  = $request->input('name');
        $slug = str_slug($name,'-');
//        $category->slug = Str::slug($request->input('name'));
        $parent_id  = (int)$request->input('parent_id');
        $type = $request->input('type');
        /*$description = $request->input('description');*/
        $position = $request->input('position');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/category/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }
        $category = new Category();
        $category->name = $name;
        $category->slug = $slug;
        $category->parent_id = $parent_id;
        $category->type = $type;
        $category->is_active = $is_active;
        /*$category->description = $description;*/
        $category->position = $position;
        $category->image = $path_image;
        $category->save();
        // chuyen dieu huong trang
        return redirect()->route('admin.category.index');
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
        $category = Category::find($id);
        $categoryAll = Category::all();
        return view('backend.category.edit', [
            'data' => $category,
            'dataAll' => $categoryAll
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
            'name' => 'required|max:255',
            'type' => 'required|integer',
        ],[
            'name.required' => 'Bạn chưa nhập tên danh mục',
            'type.integer' => 'Bạn chưa chọn kiểu danh mục',
        ]);

        $name  = $request->input('name');
        $slug = str_slug($name,'-');
        $parent_id  = (int)$request->input('parent_id');
        $type = $request->input('type');
       /* $description = $request->input('description');*/
        $position = $request->input('position');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }
        $category = Category::find($id);
        $category->name = $name;
        $category->slug = $slug;
        $category->parent_id = $parent_id;
        $category->type = $type;
        $category->is_active = $is_active;
        /*$category->description = $description;*/
        $category->position = $position;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/category/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $category->image = $path_image;
        }

        $category->save();
        // chuyen dieu huong trang
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Category::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}
