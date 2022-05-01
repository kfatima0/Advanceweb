<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function register(Request $req){
        $user= new User;
       
        $user->name= $req->input('name');
        $user->email= $req->input('email');
        $user->password= Hash::make($req->input('password'));
        $user->save();

        return $user;
    
    }
   function postnews(Request $req){
        $user= new User;
       
        $user->newscategory= $req->input('newscategory');
        $user->newsid= $req->input('newsid');
        $user->save();

        return $user;}

    
    

// function deletenews(Request $req){
//     $user= new User;
   
    
//     $user->newsid= $req->input('newsid');
//     $user->save();

//     return $user;}
}