<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
