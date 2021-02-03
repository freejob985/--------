<?php

namespace App\Http\Controllers\back;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;

class usersController extends Controller
{
    private $Path_pictures = "https://image.flaticon.com/icons/svg/219/219970.svg";
    public $db = "الصلاحيات";
    public $route = "users";
    public $route_up = "users";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'DESC')->get();
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "يختص هذا السيكشن باراءا العملاء القسم موجود في الصفحة الرئسية";
        $Settings[] = 'https://image.flaticon.com/icons/svg/219/219970.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "الاسم";
        $Columns[] = "البريد الالكتروني";
        return view('Back.Tables.users.Presentation', compact('users', 'Settings', 'Columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.Tables.users.addition');

    }
    public function logout(Request $request){
      $request->session()->flush();
      Auth::logout();
     return redirect()->route('login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ], [
                'name.required' => 'من فضلك ادخل اسم المستخدم',
                'email.required' => 'من فضلك ادخل كلمة المرور',
                'password.required' => 'من فضلك ادخل كلمة السر',
                'email.unique' => 'البريد الالكتروني موجود مسبقا',
                'email.email' => 'البريد الالكتروني غير صحيح',
            ]);

            if ($validator->fails()) {
                return redirect()->route($this->route . ".index")
                    ->withErrors($validator)
                    ->withInput();
            }
            $users = new User();
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->avatar = "https://image.flaticon.com/icons/svg/167/167750.svg";
            $users->password = Hash::make($request->input('password'));
            $users->save();
            $users->attachRole("user");
            latest_additions("مستخدم جديد");
            return redirect()->back()->with('alert-success', 'تمت اضافة موضوع جديد');
        }
        // Store the blog post...
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $path = $this->Path_pictures;
        $services = users::findOrFail($id);
        return view('Back.Tables.users.Modification')->with(compact('users', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $path = $this->Path_pictures;
        $users = User::findOrFail($id);
        return view('Back.Tables.users.Modification')->with(compact('users', 'path'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ], [
            'name.required' => 'من فضلك ادخل اسم المستخدم',
            'email.required' => 'من فضلك ادخل البريد الالكتروني',
            'password.required' => 'من فضلك ادخل كلمة السر',
            'email.unique' => 'البريد الالكتروني موجود مسبقا',
            'email.email' => 'البريد الالكتروني غير صحيح',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $users = User::findOrfail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->avatar = "https://image.flaticon.com/icons/svg/167/167750.svg";
        $users->password = $request->input('password');
        $users->save();
        // parameter can be a Role object, array, id or the role string name
        return redirect()->back()->with('alert-success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $img)
    {
        $users = User::findOrfail($id);
        $users->destroy($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
