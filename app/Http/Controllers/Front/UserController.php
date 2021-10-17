<?php

namespace App\Http\Controllers\Front;

use App\Http\http\requests;
use Illuminate\Routing\Controller;


class UserController extends Controller
{

    public function showUsersName(){
        return 'Walaa Mokhtar';
    }
    /*public function getIndex(){
        $data=[];
        $data['id']=5;
        $data['name']='walaa';
        $data['age']=41;
        return view('welcome',$data);
    }*/
    public function getIndex(){
       /* $obj= new \stdClass;
        $obj->id=5;
        $obj->name='walaa';
        $obj->age=41;*/
       /* $data=['Ahmed', 'Mohamed'];*/
        $data=[];
        return view('welcome',compact('data'));
    }

}
