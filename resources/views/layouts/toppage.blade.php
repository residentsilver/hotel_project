<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!-- BootStrap読み込み app.cssはresourceフォルダ内（コンパイル前なので）-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- BootStrapここまで -->

    <!--自作CSS publicフォルダ内（コンパイル不要なので） ※BootStrap読み込みより下に記述することで、優先度高-->
    <link rel="stylesheet" href="{{ asset('/css/topstyle.css') }}">

    <title>Crystal Resort</title>
</head>

<body>
    <header>
        <!-- ナビ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="/top">Crystal Resort</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> --}}
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/top">Top</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/room/find/">Reserve</a>
                    </li>

                    <!-- ドロップダウンタイプ -->
                    {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Reserve
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">予約明細</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> --}}
                    <!-- ドロップダウンタイプここまで -->

                    <li class="nav-item">
                        <a class="nav-link" href="#concept">Concept</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#restaurant">Restaurant</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#room">Room</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#access">Access</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link adminbtn" href="/guest">Admin</a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>

    {{-- トップページ --}}
    {{-- <img src="{{ asset('images/1.jpg')}}"> --}}
    {{-- <div class="top"></div> --}}

    <!--スライダー-->
    <div id="carousel-2" class="carousel slide carousel-fade" data-interval="10000" data-ride="carousel"
        data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active data-interval='10000'">
                <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item data-interval='10000'">
                <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item data-interval='10000'">
                <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
            </div>
        </div>

        <div class="slider-text">
            <h2>極上のリゾート体験、究極のくつろぎ。</h2>
            <h2>最高峰のおもてなしを</h2>
            <p>Crystal Resort</p>
        </div>

        <div class="scrolldown">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
            <span class="text"><a>Scroll down</a></span>
        </div>
    </div>



    <div class="contents">
        {{-- @yield('body') <!-- 子bladeを挿入する部分 --> --}}

        <section class="blurBg" id="reserve">
            <h3>ご予約はこちら</h3>
            <a class="btn" href="/room/find/" role="button">ご予約 &raquo;</a>
        </section>

        <section id="concept">
            <div class="container">
                <h3>Concept</h3>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 section_padding">
                        <h4>極上のリゾート体験</h4>
                        <p>Crystal
                            Resortは、極上のリゾート体験と究極のくつろぎが交差する魔法の場所です。<br>輝くクリスタルのような美しさと、最上級のおもてなしに包まれた、まさに極上のステイをお約束します。
                        </p>
                    </div>

                    <div class="col-md-6">
                        <img src="/images/hotel1.jpg" alt="">
                    </div>
                </div>
            </div> <!-- /container -->
        </section>


        <section id="restaurant" class="restaurant">
            <div class="container">
                <h3>Restaurant</h3>

                <div class="row">
                    <div class="col-md-6 section_padding">
                        <h4>極上の味わい</h4>
                        <p>私たちのレストランでは、世界中から厳選された新鮮で贅沢な食材を使用し、シェフたちが織りなす美食のアートが広がります。<br>極上の味わいと上質なサービスが調和し、ひと口ごとに幸福感に満ちた食の旅へ誘います。
                        </p>
                    </div>

                    <div class="col-md-6">
                        <img src="/images/food2.jpg" alt="">
                    </div>
                </div>
            </div> <!-- /container -->
        </section>


        <section id="room">
            <div class="container">
                <h3>Room</h3>
                {{-- <img class="d-block w-100" src="/images/1.jpg"> --}}
                <p class="intro">Crystal Resortは、贅沢な時間を過ごすための究極の選択肢です。<br>当リゾートの部屋は、優雅さと快適さが調和した誇り高いデザインが特徴です。
                </p>
                {{-- <a class="btn" href="/" role="button">詳しくはこちら &raquo;</a> --}}
            </div>

            <br>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>部屋1</h3>
                        <img class="d-block w-100" src="/images/room1.jpg">
                        <br>
                        <p>洗練されたインテリアデザインが、落ち着いた雰囲気を醸し出し、快適な滞在をサポートします。<br>各アメニティはお客様のリラックスを最優先に考え、贅沢なバスローブやハイエンドなバスアメニティが備え付けられています。
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>部屋2</h3>
                        <img class="d-block w-100" src="/images/room2.jpg">
                        <br>
                        <p>穏やかな緑の色調が落ち着きと豊かさをもたらし、自然の息吹を感じながら上質なくつろぎに浸れます。<br>
                            カスタムデザインのベッドは、繊細な緑色のリネンで彩られ、最高級のマットレスが心地よい眠りを提供します。
                        </p>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>


        <section class="top1" id="access">
            <div class="container">
                <h3>Access</h3>
                <p>【住所】〒000-0000 大阪府大阪市北区クリスタル通り123番地

                <p>【アクセス】<br>
                    最寄り駅: 大阪駅 徒歩3分<br>
                </p>

                <p>【徒歩でのアクセス方法】<br>
                    ・大阪駅から出発：大阪駅中央改札を出て、北口方向に進みます。<br>
                    ・クリスタル通りを進む：大阪駅北口を出て直進し、クリスタル通りに差し掛かります。<br>
                    ・3分で到着：クリスタル通りを進むと、Crystal Resortが見えてきます。美しい外観と緑溢れるエントランスが、お客様を温かく迎えます。</p>
                <p>大阪の賑やかな街の中で、Crystal Resortは静かなくつろぎの場。お客様が快適な滞在をお楽しみいただけるよう、心をこめてお待ちしております。</p>
            </div>

            <br>

            <div class="google-maps container-fluid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104994.77058365803!2d135.4160245997024!3d34.677764242137584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6553406e2e1%3A0xc55bc16ee46a2fe7!2z5aSn6Ziq5bqc5aSn6Ziq5biC!5e0!3m2!1sja!2sjp!4v1582540954527!5m2!1sja!2sjp"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
    </div>


    <footer>
        <div class="container footer">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/top">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/room/find/">Reserve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#concept">Concept</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#restaurant">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#room">Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#access">Access</a>
                </li>
            </ul>
            <p>〒000-0000 大阪府大阪市000-00<br>
                TEL：0000-00-0000 / FAX：0000-00-0000</p>
        </div>

        <div class="container">
            <address>&copy; Crystal Resort 2023 All Rights Reserved.</address>
        </div>
    </footer>

    <!-- Bootstrap、jQuery読み込み-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>

    <script>
        jQuery(function($) {
            $('section').addClass('fadeIn');
            $(window).on('load scroll', function() {

                var box = $('.fadeIn');
                var animated = 'animated';

                box.each(function() {

                    var boxOffset = $(this).offset().top;
                    var scrollPos = $(window).scrollTop();
                    var wh = $(window).height();

                    if (scrollPos > boxOffset - wh + 100) {
                        $(this).addClass(animated);
                    }
                });
            });
        })
    </script>

</body>

</html>
