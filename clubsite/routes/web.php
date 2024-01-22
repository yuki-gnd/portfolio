<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

// 会員情報 一覧表示
Route::get('member/memberslist', [MemberController::class, 'index'])->name('memberslist');

// 会員情報 追加
Route::get('member/addmember', [MemberController::class, 'add'])->name('member.addmember');

Route::post('member/addmember', [MemberController::class, 'create'])->name('member.createmember');

// 会員情報 更新
Route::get('member/editmember/{id}', [MemberController::class, 'edit'])->name('member.editmember');

Route::patch('member/updatemember', [MemberController::class, 'update'])->name('member.updatemember');

// 会員情報 削除
Route::get('member/confirmdelete/{id}',[MemberController::class, 'show'])->name('member.confirmdelete');

Route::delete('member/deletemember{id}',[MemberController::class, 'destroy'])->name('member.deletemember');