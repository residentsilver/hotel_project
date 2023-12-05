<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!-- BootStrap読み込み -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- BootStrap -->

    <title>Crystal Resort</title>
    <style>
        /* bootstrapのデフォルトCSS変更---------------------------------- */
        .navbar {
            /* ナビ背景色 */
            background-color: #0d0b24 !important;
            opacity: 0.95;
            padding: 1.5rem 2rem 1.5rem 2.5rem;
            /*余白調整*/
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            /* ナビ間の余白 */
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        .navbar-collapse {
            text-align: center;
            /* スマホメニュー文字中央揃え */
        }

        /* ナビホバー時*/
        .navbar-expand-lg .navbar-nav .nav-link:hover {
            color: #fffcf2;
            transition: all 0.5s;
        }

        /* 中央から下線 */
        .navbar-expand-lg .navbar-nav .nav-link {
            position: relative;
            text-align: center;
            display: inline-block;
        }

        .navbar-expand-lg .navbar-nav .nav-link::before {
            content: "";
            position: absolute;
            left: 100%;
            right: 100%;
            bottom: 0;
            height: 1px;
            /* background-color: #30a9de; */
            background-color: #fff;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            -moz-transition: left 0.3s ease, right 0.3s ease;
            -o-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
        }

        .navbar-expand-lg .navbar-nav .nav-link:hover::before {
            left: 0;
            right: 0;
        }

        /* 全体共通 ------------------------------------------ */
        body {
            color: #333333;
            background-color: #FFFFFF;
            font-size: 100%;
            line-height: 1.7;
            margin: 0 auto;
            /*中央揃え*/
            width: 100%;
            position: relative;
            min-height: 100vh;
        }

        header {
            margin-bottom: 170px;
            /*ナビ下の余白*/
        }

        .contents {
            margin: 0 auto;
            /*中央揃え*/
            width: 80%;
            padding-bottom: 70px;
            /*footer上の余白調整*/
        }

        footer {
            position: absolute;
            bottom: -40px;
            width: 100%;
            background: #fff;
            margin: 0 auto;
            text-align: center;
            color: #888;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            height: 40px;
            padding: 5px 0 0;
            border-top: 1px solid #999;
        }

        footer address {
            margin: 0;
        }
    </style>
</head>

<body>

    <header>
        <!-- ナビ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Crystal Resort</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- justify-content-endに変更すると、ナビ右寄せ --}}
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Top</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/guest">利用者管理</a>
                    </li>

                    <!-- ドロップダウンタイプ -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            予約管理
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">予約明細</a>
                        </div>
                    </li>
                    <!-- ドロップダウンタイプここまで -->

                    <li class="nav-item">
                        <a class="nav-link" href="/masters">部屋管理</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/rooms">部屋種別</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- ナビここまで -->
    </header>

    <div class="contents">
        <!-- 子bladeを挿入する部分 -->
        @yield('contents')
    </div>


    <footer>
        <div class="inner">
            <address>&copy; 2023 All Rights Reserved.</address>
        </div>
    </footer>

    <!-- BootStrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>
</body>

</html>
