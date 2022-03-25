<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\WeightController;

Auth::routes(); // 2-2認証関連のルーティングのひな形を用意してくれる
Route::resource('/articles', 'WeightController');//->middleware('auth');【ログイン画面】4-3  middlewareは未ログインユーザーに他の画面を表示させないようにする。後々設定が必要になる4-3 リソースコントローラーの設定になっている


Route::get('/graph', [WeightController::class, 'graph'])->name('graph'); //グラフ画面
Route::get('/edit', [WeightController::class, 'edit'])->name('edit');  //編集画面
Route::get('/index', [WeightController::class, 'index'])->name('index'); //一覧TOP画面認画面
Route::get('/confirm', [WeightController::class, 'confirm'])->name('confirm'); //削除確認画面
Route::get('/create', [WeightController::class, 'create'])->name('create'); //ジム会員新登録画面
Route::get('/record', [WeightController::class, 'record'])->name('record'); //体重記録画面


/* 6の記述方法
Route::get('/WeightRegistrations/graph', 'WeightController@graph')->name('graph');  //グラフ画面
Route::get('/WeightRegistrations/edit', 'WeightController@edit')->name('edit'); //編集画面
Route::get('WeightRegistrations/index', 'WeightController@index')->name('index'); //一覧TOP画面認画面
Route::get('WeightRegistrations/confirm', 'WeightController@confirm')->name('confirm'); //削除確認画面
Route::get('WeightRegistrations/create', 'WeightController@create')->name('create'); //ジム会員新登録画面】
Route::get('WeightRegistrations/record', 'WeightController@record')->name('record'); //体重記録画面
 */
