@extends('app')
@section('title', 'ジム会員新規登録画面')
@include('nav')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規登録画面</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

{{-- ここは何？後々設定が必要                    <form action="{{route('WeightController.post')}}" method="post">
 --}}


                     @csrf
                        <ul class="original_ul">
                            <li>
                                <label for="name">氏名</label>
                                <input id="name" name="name" type="text" value="{{old('name')}}"><br>
                            </li>
                            <li>
                                <label for="birthday">生年月日</label>
                                <input id="birthday"name="birthday" type="date" value="{{old('birthday')}}"><br>
                            </li>
                            <li>
                                <label for="gender">性別</label>
                                <input id="gender" name="gender" type="radio" value="0" @if(old('gender') == 0) checked @endif>男性
                                <input name="gender" type="radio" value="1" @if(old('gender') == 1) checked @endif>女性<br>
                            </li>
                            <li>
                                <label for="height">身長</label>
                                <input id="height" name="height" type="text" value="{{old('height')}}"><br>
                            </li>
{{--                             <li>
                                <label for="weight_date">測定月</label>
                                <input id="weight_date" name="weight_date" type="month" value="{{old('weight_date')}}"><br>
                            </li>
 --}}                            <li>
                                <label for="weight">体重</label>
                                <input id="weight" name="weight" type="text" value="{{old('weight')}}"><br>
                            </li>
                        </ul>
                        <ul class="original_ul2">
                            <li id="original_btn"">
                                <input id="" class="btn btn-warning" type="button" value="戻る" onclick="history.back()">
                                <input id="" class="btn btn btn-primary" type="submit" value="確認画面へ" >
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
