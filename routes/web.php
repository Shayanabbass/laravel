<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'layouts.master');
Route::controller(Usercontroller::class)->group(function(){
    Route::get('/',Usercontroller::class);
    Route::get('/post/{id?}','showPost')->whereIn('id',['11','22']);
});

// $users=[
//     1=>['name'=>'shayan','phone'=>'03338259200','school'=>'gifs'],
//     2=>['name'=>'ali','phone'=>'03338259200','school'=>'ncr']

// ];
// Route::view('/about','about',['users'=>$users,'city'=>'karachi']);
// // Route::get('/about',function(){
// //     return view('about');

// // });
// Route::view('/post','post');
// Route::get('users/{id}',function($id){
//  if($id) 
// $users=[
//         1=>['name'=>'shayan','phone'=>'03338259200','school'=>'gifs'],
//         2=>['name'=>'ali','phone'=>'03338259200','school'=>'ncr']
//     ];
//         $user=$users[$id];
//         if($id){
//         return view('users',['id'=>$user]);
//     }
//     else{
//         return(404);
//     }
// })->name('user');
// Route::view('/about', 'post');
// Route::get('/activities',function(){
//     return "<h1>hello<h1/>";
// });
// // Route::view('/activities/firstpost','post');
// // Route::get('/activities/firstpost/{id?}/comment/{commentid?}',function( $id=null,$comment=null){
// //     if ($id){
// //         return"<h1>Your id =".$id." </h1><h2>comment: ".$comment."</h2>";

// //     }
// //     else{
// //         return "<h1>no id found</h1>";
// //     }

// // });
// Route::get('/number/{id?}/comment/{commentid?}',function($id=null,$commentid=null){
//     if ($id && $commentid){
//         return "<h1>hello your id is :".$id." and comment id is ".$commentid."</h1>";
//     }
//     else{
//         return 'no id found';
//     }

// })->where('id','[0-9]+')->whereAlpha('commentid');
// Route::get('/page/contact-us',function(){
//     return "about page";

// })->name('about');
// Route::view('/test','hello')->name('about');
// Route::get('/post/{id?}',function($id=null){
//     if($id){
//         return "<h1>HELLO! ".$id."</h1>";
//     }
//     else{
//         return'no id';
//     }


// })->whereIn('id',['movie','song','shayan']);
// Route::redirect('/about','/test');
// Route::prefix('page')->group(function(){
//     Route::view('/contact-us','post');
//     Route::get('/admission',function(){
//         return "<h1>Admission page</h1>";

//     });
    // Route::view('/admission','welcome');

// });
// Route::fallback(function(){
// return view('hello');
// });
Route::get('/users',[Usercontroller::class,'showusers'])->name('show.users');
Route::post('/add',[Usercontroller::class,'adduser'])->name('adduser');
Route::put('/update/{id}',[Usercontroller::class,'updateuser'])->name('updateuser');
Route::view('/add','adduser')->name('add');
Route::get('/users/{id?}',[Usercontroller::class,'singleuser'])->name('view');
Route::get('/deleteusers/{id}',[Usercontroller::class,'deleteuser'])->name('delete');
Route::get('/updatepage/{id}',[Usercontroller::class,'updatepage'])->name('update.page');
Route::get('/testupdate',[Usercontroller::class,'testupdate']);

