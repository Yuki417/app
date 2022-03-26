{{--
https://note.com/laravelstudy/n/ne41d086745bc
# ChartJSの組み込み　参照
 localhostsだけで見れるのはこっち--}}

 @extends('app') {{-- 上のバー ログインなど --}}
@section('content')
 @include('nav')   {{-- @includeを使うことで、別のビューを取り込めます --}}


 @extends('app')

 @section('title', '体重グラフ2')

 @section('content')
   <div class="container">
     @foreach($weight as $weight)
       <div class="card mt-3">
         <div class="card-body d-flex flex-row">
           <i class="fas fa-user-circle fa-3x mr-1"></i>
           <div>
             <div class="font-weight-bold">
               {{ $weight->user->name }}
             </div>
             <div class="font-weight-lighter">
               {{ $weight->created_at->format('Y/m/d H:i') }}
             </div>
           </div>
         </div>
         <div class="card-body pt-0 pb-2">
           <h3 class="h4 card-title">
             {{ $weight->title }}
           </h3>
           <div class="card-text">
             {!! nl2br(e( $weight->body )) !!}
           </div>
         </div>
       </div>
     @endforeach
   </div>
 @endsection


 <!DOCTYPE html>
 <html lang="ja">
 <head>
  <meta charset="utf-8">
  <title>体重グラフ</title>
 </head>
  <body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">体重グラフ</div>
						<div class="card-body">
{{--  							<button id="" class="btn btn-warning" onclick="history./back()">戻る</button>
 --}}
                             <input id="" class="btn btn-warning" type="button" value="戻る" onclick="history.back()">
							<canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


         <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
     <!-- グラフを描画 -->
    <script>
     //ラベル
     var labels = [
         "2022年1月",
         "2022年2月",
         "2022年3月",
         "2022年4月",
         "2022年5月",
         "2022年6月",
         "2022年7月",
         "2022年8月",
         "2022年9月",
         "2022年10月",
         "2022年11月",
         "2022年12月",




     ];
     //平均体重ログ
     var average_weight_log = [
         51.8,	//1月のデータ
         51.9,	//2月のデータ
         51.7,	//3月のデータ
         51.6,	//4月のデータ
         51.5,	//5月のデータ
         51.3,	//6月のデータ
         51.4,
         51.3,
         51.2,
         51.3,
         51.5,
         51.3,
     ];
 //グラフを描画
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
         type: 'line',
         data : {
             labels: labels,
             datasets: [
                 {
                     label: 'kg',
                     data: average_weight_log,
                     borderColor: "rgba(0,0,255,1)",
                      backgroundColor: "rgba(0,0,0,0)"
                 },
               ]
         },
         options: {
             title: {
                 display: true,
                 text: '氏名'
             }
         }
    });
    </script>
    <!-- グラフを描画ここまで -->

  </body>
 </html>
