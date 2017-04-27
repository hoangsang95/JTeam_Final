<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Request;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\MessageBag;
class ContactController extends Controller {

    // Liên hê
    public function get_lienhe() {
        return view('layouts.contact');
    }

    public function post_lienhe(Request $request) {
        $rules = Contact::rules();
        $input = Request::except('_token');
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {

            $contact = new Contact;
            $contact->Contact_Datetime = Carbon::now('Asia/Ho_Chi_Minh');

            foreach ($input as $k => $v) {
                $contact->$k = $v . "";
            }
            $contact->save();

            $data = ['Contact_Name' => \Request::input('Contact_Name'), 'Contact_Email' => \Request::input('Contact_Email'), 'Contact_Mobile' => \Request::input('Contact_Mobile'), 'Contact_Message' => \Request::input('Contact_Message')];

            Mail::send('layouts.sendMail', $data, function($msg) {
                $msg->from('buheo1231995@gmail.com', 'Khách hàng');
                $msg->to('buheo1231995@gmail.com', 'JTeam')->subject("Liên hệ");
            });

            
        } 
        else {
            if($validator->fails())
            {
                return  response()->json([
                    'success' => false,
                    'errors'  => $validator->errors()->toArray(),
                ]);
            }
        }
    }

    public function danhsach() {
        $contact = Contact::all();
        return view('layouts.admin.contact.contact_list', ['contact' => $contact]);
    }

    public function xoa($id) {
        $contact = Contact::where('Contact_ID', $id);
        $contact->delete();
        return redirect('admin/contact/contact_list')->with('thongbao', 'Xóa thành công');
    }

}
