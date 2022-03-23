{{--1-4 新規に作成したファイル　ユーザ登録・ログインへのリンクを作る --}}
<nav class="navbar navbar-expand navbar-dark blue-gradient">

    <a class="navbar-brand" href="/"></i>戻る</a>

    <ul class="navbar-nav ml-auto">




{{--         @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
        </li>
        @endguest
 --}}


{{-- 編集3-3 ログイン画面に遷移--}}
{{--         @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">ログイン</a>
        </li>
        @endguest
 --}}




        @auth
        <li class="nav-item">
        {{--<a class="nav-link" href=""><i class="fas fa-pen mr-1"></i>投稿する</a>--}}
        <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a> {{--4-3 この行のhref属性を変更--}}

        </li>
        @endauth

        @auth
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <button class="dropdown-item" type="button"
                    onclick="location.href=''">
              マイページ
            </button>
            <div class="dropdown-divider"></div>
            <button form="logout-button" class="dropdown-item" type="submit">
              ログアウト
            </button>
          </div>
        </li>
        <form id="logout-button" method="POST" action="{{ route('logout') }}">
          @csrf
        </form>
        <!-- Dropdown -->
        @endauth






   {{--    <li class="nav-item">
        <a class="nav-link" href="">会員登録</a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="">ログアウト</a>
      </li>

{{--一番右    <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-pen mr-1"></i>会員TOPページ</a>
      </li>
 --}}

      <!-- Dropdown -->
      <li class="nav-item dropdown">
     {{--    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>  マイページのボタン--}}
        </a>


        <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <button class="dropdown-item" type="button"
                  onclick="location.href=''">
            マイページ
          </button>
          <div class="dropdown-divider"></div>
          <button form="logout-button" class="dropdown-item" type="submit">
            ログアウト
          </button>
        </div>
      </li>
      <form id="logout-button" method="POST" action="">
      </form>
      <!-- Dropdown -->

    </ul>

  </nav>
