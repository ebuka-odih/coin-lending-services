@extends('pages.layout.app')
@section('content')

    <div class="body-overlay"></div>
    <!-- slide bar end -->

    <main>
        <!-- hero start -->
        <section class="hero hero__ico pos-rel" >
            <div class="hero__bg" data-background="assets/img/bg/hero_bg.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero__content">
                            <h1 class="title mb-45">Participate in the <span>Ongoing ICO Token</span> Sale </h1>
                            <div class="btns">
                                <a class="thm-btn" href="{{ route('seedphase') }}">GET STARTED</a>
                                <a class="thm-btn thm-btn--dark" href="{{ route('seedphase') }}">WHITEPAPPER</a>
                            </div>
                            <div class="hero__progress mt-50">
                                <div class="progress-title ul_li_between"><span><span>Raised -</span> 1,450 Tokens</span> <span><span>Target -</span> 150,000 Tokens</span></div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="ul_li_between">
                                    <li>Pre Sell</li>
                                    <li>Soft Cap</li>
                                    <li>Bonus</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero__explore-wrap text-center">
                            <div class="hero__explore text-center">
                                <div class="scroll-down"></div>
                                <span>Explore Causes</span>
                            </div>
                            <div class="hero__countdown">
                                <h6 class="text-center">ICO Will Start in..</h6>
                                <div class="countdown ul_li_center" data-countdown="2024/08/28"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__shape">
                <div class="shape shape--1">
                    <img src="assets/img/shape/h_shape.png" alt="">
                </div>
                <div class="shape shape--2">
                    <img src="assets/img/shape/h_shape2.png" alt="">
                </div>
                <div class="shape shape--3">
                    <img src="assets/img/shape/h_shape3.png" alt="">
                </div>
            </div>
            <div class="hero__coin">
                <div class="coin coin--1">
                    <img src="assets/img/icon/coin1.png" alt="">
                </div>
                <div class="coin coin--2">
                    <img src="assets/img/icon/coin2.png" alt="">
                </div>
                <div class="coin coin--3">
                    <img src="assets/img/icon/coin3.png" alt="">
                </div>
                <div class="coin coin--4">
                    <img src="assets/img/icon/coin4.png" alt="">
                </div>
                <div class="coin coin--5">
                    <img src="assets/img/icon/coin5.png" alt="">
                </div>
                <div class="coin coin--6">
                    <img src="assets/img/icon/coin6.png" alt="">
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- about start -->
        <section id="about" class="about pos-rel pb-140">
            <div class="container">
                <div class="row align-items-center mt-none-30">
                    <div class="col-lg-6 mt-30">
                        <div class="about__img pos-rel wow fadeInLeft">
                            <img src="assets/img/about/about_img.png" alt="">
                            <div class="about__shape">
                                <img src="assets/img/shape/about_shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-30">
                        <div class="about__content wow fadeInRight" data-wow-delay="100ms">
                            <div class="sec-title mb-35">
                                <h5 class="sec-title__subtitle">WHAT IS ICO CRYPTO</h5>
                                <h2 class="sec-title__title mb-25">Invest in our popular ICO and become part of the future of digital finance.</h2>
                                <p>In an ICO, a project or startup issues a new digital token, typically based on a blockchain platform such as Ethereum. These tokens serve a specific purpose within the project's ecosystem, such as accessing services</p>
                            </div>
                            <ul class="about__list ul_li">
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Decentralized Platform</li>
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Rewards Meachanism</li>
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Crowd Wisdom</li>
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Investor Protection</li>
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Token Sale Phases</li>
                                <li><img src="assets/img/icon/a_arrow.svg" alt="">Exchange Listing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__sec-shape">
                <img src="assets/img/shape/s_shape2.png" alt="">
            </div>
        </section>
        <!-- about end -->

        <!-- features start -->
        <section class="features pos-rel pb-150 mb-0-pb">
            <div class="container">
                <div class="sec-title text-center mb-95">
                    <h5 class="sec-title__subtitle">WHAY CHOOSE US</h5>
                    <h2 class="sec-title__title mb-25">Why choose our token?</h2>
                </div>
                <div class="feature__wrap pos-rel ul_li_between">
                    <div class="feature__item text-center">
                        <div class="icon">
                            <img src="assets/img/icon/f_01.svg" alt="">
                        </div>
                        <h4>Mobile payment <br> make easy</h4>
                    </div>
                    <div class="feature__item text-center">
                        <div class="icon">
                            <img src="assets/img/icon/f_02.svg" alt="">
                        </div>
                        <h4>Investment <br> Projects</h4>
                    </div>
                    <div class="feature__item text-center">
                        <div class="icon">
                            <img src="assets/img/icon/f_03.svg" alt="">
                        </div>
                        <h4>Lifetime free <br> transaction</h4>
                    </div>
                    <div class="feature__item text-center">
                        <div class="icon">
                            <img src="assets/img/icon/f_04.svg" alt="">
                        </div>
                        <h4>Protect the <br> identity</h4>
                    </div>
                    <div class="feature__item text-center">
                        <div class="icon">
                            <img src="assets/img/icon/f_05.svg" alt="">
                        </div>
                        <h4>Security your <br> money</h4>
                    </div>
                    <div class="feature__line-shape">
                        <img src="assets/img/shape/f_shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="feature__sec-shape">
                <img src="assets/img/shape/s_shape1.png" alt="">
            </div>
        </section>
        <!-- features end -->

        <!-- token start -->
        <section class="token pt-125">
            <div class="container">
                <div class="row align-items-center mt-none-30">
                    <div class="col-lg-5 mt-30">
                        <div class="token__content wow fadeInLeft">
                            <div class="sec-title mb-20">
                                <h5 class="sec-title__subtitle">Tokenomics</h5>
                                <h2 class="sec-title__title">Token allocation & funds distribution</h2>
                            </div>
                            <ul class="nav nav-tabs token__tab" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Funding Allocation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Token Allocation</button>
                                </li>
                            </ul>
                            <div class="token__info mt-40">
                                <h2>1 CNL = 0.0013 BTC</h2>
                                <p>A portion of the total token supply is often allocated as reserved <br> tokens. These tokens are  set aside for the development </p>
                                <div class="token-btn mt-40">
                                    <a class="thm-btn" href="#!">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-30">
                        <div class="tab-content wow fadeInRight" data-wow-delay="100ms" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="token__img">
                                    <img src="assets/img/token/token_chart.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="token__img">
                                    <img src="assets/img/token/token_chart2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- token end -->

        <!-- roadmap start -->
        <section id="roadmap" class="roadmap pt-lg-80 pb-md-100 pt-145 pos-rel pb-200">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <h5 class="sec-title__subtitle">Road map</h5>
                    <h2 class="sec-title__title">Our project plan</h2>
                </div>
                <div class="roadmap__wrap ul_li_between">
                    <div class="roadmap__item">
                        <div class="roadmap__head ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/rm_01.svg" alt="">
                            </div>
                            <h3>Project Plan</h3>
                        </div>
                        <ul class="roadmap__info list-unstyled">
                            <li>Website Design</li>
                            <li>Website Live</li>
                            <li>Smart Contract</li>
                            <li>Deployment</li>
                        </ul>
                        <span class="number">Q1 <br> 2022</span>
                    </div>
                    <div class="roadmap__item">
                        <div class="roadmap__head ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/rm_02.svg" alt="">
                            </div>
                            <h3>Presale</h3>
                        </div>
                        <ul class="roadmap__info list-unstyled">
                            <li>Contract Testing</li>
                            <li>Project Prototype</li>
                            <li>Metaverse Demo</li>
                            <li>(Alpha)</li>
                        </ul>
                        <span class="number">Q2 <br> 2023</span>
                    </div>
                    <div class="roadmap__item">
                        <div class="roadmap__head ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/rm_03.svg" alt="">
                            </div>
                            <h3>Pre-Listing</h3>
                        </div>
                        <ul class="roadmap__info list-unstyled">
                            <li>Partnerships</li>
                            <li>Marketing to reach <br> wider Audiences</li>
                            <li>Metaverse <br> Development</li>
                        </ul>
                        <span class="number">Q3 <br> 2024</span>
                    </div>
                    <div class="roadmap__item">
                        <div class="roadmap__head ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/rm_04.svg" alt="">
                            </div>
                            <h3>Token Launch</h3>
                        </div>
                        <ul class="roadmap__info list-unstyled">
                            <li>NFT MarketPlace</li>
                            <li>NFT Launch</li>
                            <li>Exchanges Listing</li>
                            <li>Dex Listing</li>
                        </ul>
                        <span class="number">Q4 <br> 2025</span>
                    </div>
                    <div class="roadmap__item">
                        <div class="roadmap__head ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/rm_01.svg" alt="">
                            </div>
                            <h3>Alpha Test</h3>
                        </div>
                        <ul class="roadmap__info list-unstyled">
                            <li>In-house testing <br> of functional</li>
                            <li>App development</li>
                            <li>Further <br> Development</li>
                        </ul>
                        <span class="number">Q5 <br> 2026</span>
                    </div>
                    <div class="roadmap__shape">
                        <img src="assets/img/shape/rm_shape.png" alt="">
                    </div>
                    <div class="roadmap__year">
                        <h3 class="year year--start">2022</h3>
                        <h3 class="year year--end">2026</h3>
                    </div>
                </div>
            </div>
            <div class="roadmap__sec-shape">
                <div class="shape shape--1">
                    <img src="assets/img/shape/s_shape1.png" alt="">
                </div>
                <div class="shape shape--2">
                    <img src="assets/img/shape/s_shape2.png" alt="">
                </div>
            </div>
        </section>
        <!-- roadmap end -->

        <!-- token info start -->
        <section class="token-info pos-rel pt-200 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-4">
                        <div class="token-info__title sec-title mb-95 text-center text-xl-start">
                            <h5 class="sec-title__subtitle">ICO coindox Token</h5>
                            <h2 class="sec-title__title">ICO Tokens <br> Details and Sale</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="token-info__img">
                            <img src="assets/img/token/t_info_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="token-info--info-wrap ul_li">
                            <ul class="token-info__list token-info--start">
                                <li>
                                    <h4>Start</h4>
                                    <span>June 8, 2023 (9:00AM GMT)</span>
                                </li>
                                <li>
                                    <h4>Number of Tokens for Sale</h4>
                                    <span>1.000.000 Tokens</span>
                                </li>
                                <li>
                                    <h4>Minimal Transaction</h4>
                                    <span>10 Tokens / Transaction</span>
                                </li>
                            </ul>
                            <ul class="token-info__list token-info--end">
                                <li>
                                    <h4>End</h4>
                                    <span>June 8, 2024 (9:00AM GMT)</span>
                                </li>
                                <li>
                                    <h4>Tokens exchange rate</h4>
                                    <span>1 ETH = 650 ICC, 1 BTC = 1940 ICC</span>
                                </li>
                                <li>
                                    <h4>Acceptable currencies</h4>
                                    <span>ETH, BTC, LTC</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="token-info__shape">
                <div class="shape shape--1">
                    <img src="assets/img/shape/ti_shape.png" alt="">
                </div>
                <div class="shape shape--2">
                    <img src="assets/img/shape/ti_shape2.png" alt="">
                </div>
            </div>
        </section>
        <!-- token info end -->

        <!-- brand start -->
        <section class="brand pb-150">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <h5 class="sec-title__subtitle">trusted by 10,0000+ teams</h5>
                </div>
            </div>
            <div class="brand__marquee">
                <div class="brand__item">
                    <img src="assets/img/brand/img_01.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_02.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_03.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_04.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_05.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_06.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_07.png" alt="">
                </div>
                <div class="brand__item">
                    <img src="assets/img/brand/img_08.png" alt="">
                </div>
            </div>
        </section>
        <!-- brand end -->

    </main>

@endsection

