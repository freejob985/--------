<?php

namespace App\Http\Controllers\back;

use Validator;
use App\notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class notificationsController extends Controller
{
    private $Path_pictures = "/";
    public $db = "notifications";
    public $route = "notifications";
    public $route_up = "notifications";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Auth::user()->unreadNotifications;
        $Settings = array();
        $Settings[] = $this->db;
        $Settings[] = "Contact and advice notices";
        $Settings[] = 'https://image.flaticon.com/icons/svg/1827/1827295.svg';
        $Settings[] = $this->Path_pictures;
        $Settings[] = "400";
        $Settings[] = "/admin/addpag/customers";
        $Columns = array();
        $Columns[] = "الصورة";
        $Columns[] = "الموضوع";
        $Columns[] = "الرسالة";
        Auth::user()->unreadNotifications()->update(['read_at' => now()]);
        DB::table('notifications')->whereNull('read_at')->update(['read_at' => now()]);
        return view('Back.Tables.notifications.Presentation', compact('notifications', 'Settings', 'Columns'));
    }

}
