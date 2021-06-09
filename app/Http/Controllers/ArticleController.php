<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::latest()->paginate(30);
        return view('backend.article.index',[
            'data' =>  $article
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // lấy danh mục tin tức
        $categories = Category::where(['type' => 3])->get();
        $max_position = Article::max('position');

        return view('backend.article.create',[
            'max_position' => $max_position,
            'categories' => $categories
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
            'title' => 'required',
            'summary' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'description.email' => 'Bạn chưa nhập mô tả',
            'image.mines' => 'File ảnh chưa đúng định dạng',
            'image.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $summary  = $request->input('summary');
        $description  = $request->input('description');
       /* $category_id  = $request->input('category_id');*/
        /*$view  = $request->input('view');*/
        $position  = $request->input('position');
        $meta_title = $request->input('title');
        $meta_description = $request->input('title');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/article/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }
        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $article = new Article();
        $article->title = $title;
        $article->slug = $slug;
        $article->summary = $summary;
        $article->description = $description;
        $article->position = $position;
        /*$article->view = $view;*/
        /*$article->category_id = $category_id;*/
        $article->meta_title = $meta_title;
        $article->meta_description = $meta_description;
        $article->slug = $slug;
        $article->is_active = $is_active;
        $article->image = $path_image;
        $article->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.article.index');
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
        $data = Article::find($id);
        $categories = Category::where(['type' => 3])->get();

        return view('backend.article.edit',[
            'data' => $data,
            'categories' => $categories
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
            'summary' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'description.email' => 'Bạn chưa nhập mô tả',
            'image.mines' => 'File ảnh chưa đúng định dạng',
            'image.max' => 'Kích thước file quá lớn'
        ]);

        $title  = $request->input('title');
        $slug = str_slug($title,'-');
        $summary  = $request->input('summary');
        $description  = $request->input('description');
       /* $category_id  = $request->input('category_id');*/
        /*$view  = $request->input('view');*/
        $position  = $request->input('position');
        $meta_title = $request->input('title');
        $meta_description = $request->input('title');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $article = Article::find($id);
        $article->title = $title;
        $article->slug = $slug;
        $article->summary = $summary;
        $article->description = $description;
        $article->position = $position;
        /*$article->view = $view;*/
       /* $article->category_id = $category_id;*/
        $article->meta_title = $meta_title;
        $article->meta_description = $meta_description;
        $article->slug = $slug;
        $article->is_active = $is_active;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/article/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $article->image = $path_image;
        }
        $article->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Article::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}
