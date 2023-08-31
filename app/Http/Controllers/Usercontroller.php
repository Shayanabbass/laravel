<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Psy\debug;

class Usercontroller extends Controller
{
    public function __invoke(){
        return view('layouts.master');
    }
    public function showPost(string $id=null){
        return view('post',compact('id'));
    }
    public function showusers(){
    //  $users=DB::table('students')->select('name','age')->where('age','>','17')->get();
    $users=DB::table('libraries')->get();
        return view('allusers',['data'=>$users]);
        
    }
    public function singleuser(string $id){
        
        $user=DB::table('libraries')->where('id',$id)->get();
        // echo($user);die;
        if($user){
        return  view('user',['data'=>$user]);
        }
        else{
            return view('about');
        }
       
    

    }
    public function  deleteuser(string $id){
        $deleteuser=DB::table('libraries')->where('id',$id)->delete();
        // return view ('user');
        // return view('delete');
        if($deleteuser){
            return redirect()->route('show.users');
        }

    }

    public function adduser(Request $req){
        $sql=DB::table('libraries')->insert([
            
            'stu_id'=>$req->stu_id,
            'book'=>$req->book,
            'date_issue'=>$req->date_issue,
            'status'=>$req->status


         
        ]);
        if($sql){
            return redirect()->route('show.users');
        }
        else{
            return "<h1>NOT INSERTED</h1>";

        }
    }
    public function updatepage(string $id){
        $sql=DB::table('libraries')->find($id);
        return view('updatedata',['data'=>$sql]);

    }
    public function updateuser(Request $req,$id){
        // return $req;
        $sql=DB::table('libraries')->where('id',$id)
        ->update([
            'stu_id'=>$req->stu_id,
            'book'=>$req->book,
            'date_issue'=>$req->date_issue,
            'status'=>$req->status
        ]);
        if($sql){
           return redirect()->route('show.users');
        }
    }

}