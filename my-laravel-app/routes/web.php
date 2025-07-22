<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get("/home",function(){
    return "Home,Home";
});*/
/*Route::get('/user/profile',function(){
    return 'user profile';
});*/
/*Route::get('/user/profile/{id}',function(){
    return 'user profile';
});*/
/*Route::get('/user/profile/{id}',function($id){
    echo 'rana '.'rana';
});*/
/*Route::get('/user/profile/{id}',function($id){
    echo $id;
});*/
/*Route::get('/user/profile/{id}',function($id){
    echo 'user id : ' . $id;
});*/
/*
=======================
*/
/*Route::get('/new',function(){
    $news = [1,2,3,6,8];
    foreach($news as $new){
        echo $new . " ";
    }
});*/
//لو بدي اعمل كل واحد من المصفوفة الي فوق ب سطر
/*Route::get('/new',function(){
    $news = [1,2,3,6,8];
    foreach($news as $new){
        echo $new . "<br>";
    }
});*/
// لو بدي ابحث عن خبر يجيبلي ياه ولو مبحثتش يجيب كل الاخبار
Route::get('/new/{id}',function($id){
    $news = [1,2,3,6,8];
    if($id){
        echo'new is : ' .$id;
    }else{
        foreach($news as $new)
            echo $new . '<br>';
    }
});
// =================================
// site1/home, about, contact
/*
// home
Route::get('/home',function(){
    echo '<h1>home </h1>';
});
//about
Route::get('/about',function(){
    echo '<h1>about </h1>';
});
//contact
Route::get('/contact',function(){
    echo '<h1>contact </h1>';
});
*/
/*
// لكن الارتب اكتب اسم الموقع بعدين اسم الصفحة
Route::get('/site1/home',function(){
    echo '<h1>home </h1>';
});
//about
// لما بدي اعمل تعديل ع اسم الموقع يعدل عالكل
Route::get('/site1/about',function(){
    echo '<h1>about </h1>';
});
//contact
Route::get('/site1/contact',function(){
    echo '<h1>contact </h1>';
});

Route::prefix('site2')->group (function(){
    Route::get('/site1/home',function(){
    echo '<h1>home </h1>';
});
//about
Route::get('/site1/about',function(){
    echo '<h1>about </h1>';
});
//contact
Route::get('/site1/contact',function(){
    echo '<h1>contact </h1>';
});
});*/

// لما بدي اوجه رابط عالكنترول الي بدي ياه
Route::prefix('site1')->group (function(){
    Route::get('home',[SiteOneController::class,'home']);
    Route::get('about',[SiteOneController::class,'about']);
    Route::get('contact',[SiteOneController::class,'contact']);
    Route::get('msg/{id}',[SiteOneController::class,'msg']);
});