@extends('layouts.master')

@section('title', '關於我們')

@section('content')

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/20150919006.jpg')}}')">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white mb-5" style="font-family: 微軟正黑體"> 關於我們 </h3>
                <font color="white">
                    <p>歡迎光臨Honey Cofe~ 我們位於花蓮市中山路一段101號</p>
                    拋開一切繁華塵囂~ 靜靜走入浪漫生活~ 沈浸在濃郁咖啡香~欣賞一草一木成長…期待美麗的相遇…
                </font>
            </div>
        </div>
    </header>
    <section id="news" class="about-section text-left carousel slide" data-ride="carousel" style="background: #290e05">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h3 class="text-white mb-2 ">環境簡介</h3>
                    <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{asset("img/18489839_787230168120769_3718545396462562363_o.jpg")}}" alt="">
                    <form style="color: #b3d9f4 ; font-size: large ">
                        <h5 class="mb-2">
                            位於花蓮市的咖啡館，
                            館內素材的使用，以符合老建築的氛圍為主要考量，
                            同時採用三面落地窗，與外在自然環境結合。
                        </h5>
                        <h5 class="mb-2">
                            因為想要呈現好的，
                            所以持續努力跟上時代的腳步，
                            各分店似孩子般的慢慢誕生與培育。

                            細細回味這股回憶， 想起這段歷程。
                            為了尋求回食物的根本，一直以來從不鬆懈。
                            每個人的答案或許不同，
                            有些人找原料尋訪不同的食材產地；
                            而有些人則是追尋美食評論家的報導與讚許。
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h3 class="text-white mb-2 ">成長背景</h3>
                    <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{asset("img/160628_01.jpg")}}" alt="">
                    <form style="color: #f1f4b6 ; font-size: large ">
                        <h5 class="mb-2">
                            因為想要呈現好的，
                            所以持續努力跟上時代的腳步，
                            似孩子般的慢慢誕生與培育。
                        </h5>
                        <h5 class="mb-2">
                            細細回味這股回憶， 想起這段歷程。
                            為了尋求回食物的根本，一直以來從不鬆懈。
                            每個人的答案或許不同，
                            有些人找原料尋訪不同的食材產地；
                            而有些人則是追尋美食評論家的報導與讚許。
                        </h5>
                        <h5 class="mb-2">
                            一貫的細心展現在挑選咖啡豆的矜持上，從世界各地嚴選的豆子，
                            烘培的方式，到包裝的用心，咖啡館就是你專屬的咖啡豆獵人。
                            我們不但與你分享美味的豆子，更傳授你在家品嘗各國風味的好手藝，
                            沖泡出一杯細緻的咖啡不再是件難事。
                        </h5>
                        <h5 class="mb-2">
                            最引以為傲的是，促使來往忙碌的你緩下步調，獨享一杯香醇濃郁的，好咖啡。
                            嚐一口時間的淬煉，那最傳統的冰滴咖啡，一點一滴訴說了純純的咖啡事。
                            飲著嚴選的莊園咖啡，在舌尖探索著異國風情的經典。
                            任性的花式咖啡，純粹的茶葉香，特調的冰熱飲，爽口的各色啤酒…在米朗琪咖啡館
                            ，不需要與紛擾的城市人云亦云，總是能找到當天的最佳伴飲。
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h3 class="text-white mb-2 ">社會責任</h3>
                    <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{asset("img/kv_environ.jpg")}}" alt="">
                    <form style="color: #bdf491 ; font-size: large ">
                        <h5 class="mb-2">
                            一直以來，我們努力於減少環境污染，以及減緩對於地球暖化的傷害。
                        </h5>
                        <h5 class="mb-2">
                            我們不僅希望自己能做得更好，
                            同時也希望可以因此影響更多人的投入。
                        </h5>
                        <h5 class="mb-2">
                            鼓勵大家使用隨行杯：我們是市場中第一個以折抵的方式來鼓勵使用隨行杯以降低紙杯用量的企業，
                            只要您自行攜帶可重複使用材質的容器至門市購買咖啡飲料，即可享有 10 元的環保回饋。
                            持續使用環保大豆油墨：我們 100% 使用環保紙張，
                            在產品包裝上也盡力符合減少包裝層數的原則，同時不使用對環境有傷害的材料。
                            選購「低污染、省能資源、可回收」的環保產品：
                            不僅咖啡的香氣引人入勝，推廣咖啡渣創意運用也獲得許多人的支持，
                            讓咖啡渣不僅可以成為天然的肥料也可以自製出多項天然的商品。
                        </h5>
                        <h5 class="mb-2">
                            不僅咖啡的香氣引人入勝，推廣咖啡渣創意運用也獲得許多人的支持，
                            讓咖啡渣不僅可以成為天然的肥料也可以自製出多項天然的商品。
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
        </div>
    </section>
@endsection
