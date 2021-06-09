<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        return view('backend.user.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $name  = $request->input('name');
        $role_id  = $request->input('role_id');
        $email = $request->input('email');
        $pwd = $request->input('password');

        $path_avatar = '';
        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/user/';
            // upload file
            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
        }

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = $request->input('is_active');
        }

        $user = new User(); // đ/n 1 đối tượng mới cụ thể từ 1 lớp.
        $user->name = $name;
        $user->role_id = $role_id;
        $user->email = $email;
        $user->password = bcrypt($pwd);
        $user->is_active = $is_active;
        $user->avatar = $path_avatar;
        $user->save();

        // chuyen dieu huong trang
        return redirect()->route('user.index');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn cần phải nhập vào họ tên',
            'email.email' => 'Email không đúng định dạng',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
            'avatar.image' => 'File ảnh phải có dạng jpeg,png,jpg,gif,svg',
        ]);
        //luu vào csdl
        $user = new User();
        $user->name = $request->input('name'); // họ tên
        $user->email = $request->input('email'); // email
        // bcrypt mã hóa mk
        $user->password = bcrypt($request->input('password')); // mật khẩu
        $user->role_id = $request->input('role_id'); // phần quyền

        if ($request->hasFile('avatar')) {
            // get file
            $file = $request->file('avatar');
            // get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/user/';
            // upload file
            $request->file('avatar')->move($path_upload,$filename);

            $user->avatar = $path_upload.$filename;
        }

        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }

        $user->is_active = $is_active;
        $user->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.user.index');
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
        $user = User::findOrFail($id);
        $roles = Role::all();  // lấy toàn bộ quyền

        return view('backend.user.edit', [
            'user' => $user,
            'roles' => $roles
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
            'email' => 'required|email',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn cần phải nhập vào họ tên.',
            'email.email' => 'Email không đúng định dạng',
//            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
            'avatar.image' => 'File ảnh phải có dạng jpeg,png,jpg,gif,svg',
        ]);

        $user = User::findorFail($id);
//        dd($user);
        $user->name = $request->input('name'); // họ tên

        $user->email = $request->input('email'); // email
        $user->role_id = $request->input('role_id'); // phần quyền
        // kiểm tra xem có nhập mật khẩu mới không ,, nếu có thì mới cập nhật
        if ($request->input('new_password')) {
            $user->password = bcrypt($request->input('new_password')); // mật khẩu mới
        }

        if ($request->hasFile('new_avatar')) {
            // xóa file cũ
            @unlink(public_path($user->avatar)); // hàm unlink của PHP không phải laravel , chúng ta thêm @ đằng trước tránh bị lỗi
            // get file
            $file = $request->file('new_avatar');
            // get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/user/';
            // upload file
            $file->move($path_upload,$filename);
            $user->avatar = $path_upload.$filename;
        }

        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $user->is_active = $is_active;

        $user->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        // DELETE FROM ten_bang WHERE id = 33 -> execute command
        $isDelete = User::destroy($id);

        if ($isDelete) { // xóa thành công
            $statusCode = 200;
            $isSuccess = true;
        } else {
            $statusCode = 400;
            $isSuccess = false;
        }

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json(['isSuccess' => $isSuccess], $statusCode);
    }
}
