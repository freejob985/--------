<?php

namespace App;

use App\User;
use Validator;
use Notification;
use Illuminate\Support\Facades\Mail;
use App\Notifications\contact_notify;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class contact extends Model
{
    public $table = 'contact';
    public $timestamps = false;
    protected $fillable = ['id', 'Name', 'Last', 'Mail', 'message'];

    public static function contact_send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Last' => 'required',
            'Mail' => 'required',
            'message' => 'required',
        ], [
            'Name.required' => ' The data field is required',
            'Last.required' => ' The data field is required',
            'Mail.required' => ' The data field is required',
            'message.required' => ' The data field is required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $contact = new contact();
            $contact->Name = $request->input('Name');
            $contact->Last = $request->input('Last');
            $contact->Mail = $request->input('Mail');
            $contact->message = $request->input('message');
            $contact->save();
            if ($contact->save()) {
                $user = User::get();
                Notification::send($user, new contact_notify($contact));
                $array=array();
                $array['Name']= $request->input('Name');
                $array['Last']= $request->input('Last');
                $array['Mail']= $request->input('Mail');
                $array['txt']= $request->input('message'); 
  
                // Mail::send('mail', $array, function ($message) {
                //     $message->to("test@gulfdigitaladvertising.com", "Site user")->subject
                //         ("test@gulfdigitaladvertising.com");
                //     $message->from("test@gulfdigitaladvertising.com", "test@gulfdigitaladvertising.com");
                // });
            }
            return true;
            //
        }
    }

}
