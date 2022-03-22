<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer as AppCustomer;
use App\Models\Customer;
use App\Models\Weight;


class WeightController extends Controller
{

    // グラフ画面
     public function graph()
    {
        $weights = Weight::all();
        return view('WeightRegistrations.graph', ['weight' => $weights]);

    }
    // ここまで


        // TOP画面
    public function index()
    {

        $customers = Customer::all();
        return view('WeightRegistrations.index', ['customers' => $customers]);
    }
    //ここまで


    // 4-3 新規登録画面
    public function create()
    {
        return view('WeightRegistrations.create');
    }
    // ここまで4-3


    // 編集画面
    public function edit()
    {
        return view('WeightRegistrations.edit');
    }
    //ここまで


    // 【ジム会員新登録画面】
    public function registration()
    {
        return view('WeightRegistrations.registration');
    }
    // ここまで


    // 【体重記録画面】
    public function record()
    {
        return view('WeightRegistrations.record');
    }
    // ここまで


    // 削除確認画面 ダイアログなので必要ない？
    public function confirm()
    {
        return view('WeightRegistrations.confirm');
    }
    // ここまで


    public function destroy($id)
    {
        $input = Customer::find($id);

        $input->delete();

        return redirect()->action('WeightRegistrationController@index');
    }

}
