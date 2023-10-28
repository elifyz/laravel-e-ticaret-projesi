<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AjaxController extends Controller
{
    public function iletisimEkle(Request $request){
            $validation_data =  $request->validate([
            'name' => 'required|string|min:3',
            'email'=> 'required|email',
            'subject' => 'required',
        ],[
            'name.required' => 'Ad soyad alanı zorunludur!',
            'email.required' => 'E-mail alanı zorunludur!',
            'subject.required' => 'Konu alanı zorunludur!',
            ]);

        $new_data = [
            'name' => Str::title($request->name),
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => request()->ip(),
        ];
        $son_eklenen = Contact::create($new_data);
        return back()->withSuccess(['Mesajınız Gönderildi!', 'errors'=>$validation_data]);



    }
}
