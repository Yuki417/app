@extends('app')
@section('title', '会員情報の編集画面')
@include('nav')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit.blade.php</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <!-- バリデーションのエラーメッセージ -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
{{--                        <form action="{{route('WeightRegistrations.edit', ['id' => $customer->id])}}" method="POST">
 --}}                        @csrf
                        氏名
                        <input name="name" type="text" value="{{$customer->name }}"><br>
                        生年月日
                        <input name="birthday" type="date" value="{{$customer->birthday }}"><br>
                        性別
                        <input name="gender" type="radio" value="0" @if('gender' == 0) checked @endif>男性
                        <input name="gender" type="radio" value="1" @if('gender' == 1) checked @endif>女性<br>
                        身長
                        <input name="height" type="text" value="{{$customer->height }}"><br>
{{--                         測定年月
                        <input name="measurement_date" type="month" value="{{$weight_day->year_month_date }}"><br>
                        体重
                        <input name="weight" type="text" value="{{$weight_day->weight }}"><br> -->
 --}}
                        <a class="btn btn-warning" name="back" type="submit" onclick="history.back()" value="">戻る</a>
                        <button class="btn btn-primary" name="" type="submit" value="">更新</button>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
