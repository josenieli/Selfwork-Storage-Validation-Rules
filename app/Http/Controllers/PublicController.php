<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $users = [
        ['name'=> 'Pippo', 'surname'=> 'Russo', 'role'=> 'Direttore'],
        ['name'=> 'Papperino', 'surname'=> 'Rossi', 'role'=> 'redattore'],
        ['name'=> 'Mikey', 'surname'=> 'Topolino', 'role'=> 'Controllo'],
        
    ];

    public function homepage() {
    return view('welcome');
}

    public function chisiamo(){
    
    return view('chisiamo',['users'=>$this->users]);
}

        public function chisiamodetail($name){

    foreach($this->users as $user) {
        if($name == $user['name']){
            return view('chisiamodetail',['user'=>$user]);
        }
    }
}
    public function contatta(){
        return view('contattaci');
    }

    public function thankYou(){
        return view('/thank-you');
    }

    public function submit(Request $request) 
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');
        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));
        return redirect()->route('thankYou');
        }


}
