<?php

namespace App\Http\Controllers;
use App\Article;
use App\Banner;
use App\Category;
use App\Tour;
use App\Setting;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categories;

    public function __construct()
    {
        // lấy dữ danh mục
        $categories = Category::where([
            'is_active' => 1
        ])->orderBy('position', 'ASC')->get();

        $this->categories = $categories;

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active', 1)->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();
        // 3. lấy dữ liệu 4 tin tức mới nhất
        $articles = Article::where('is_active', 1)
            ->orderBy('id', 'desc')
            ->take(100)
            ->get();
        // 4. cấu hình website

        $setting = Setting::first();

        // Chia sẻ dữ qua tất các layout
        view()->share([
            'setting' => $setting,
            'categories' => $categories,
            'banners' => $banners,
            'articles' => $articles
        ]);

    }
    public function index()
    {
        //
    }
    public function notfound()
    {
        return view('frontend.notfound');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
