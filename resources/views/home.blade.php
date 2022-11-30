@extends('layouts.default')
@section('content')

<!-- Start preloader -->
<!-- <div id="preloader"></div> -->
<!-- End preloader -->

<!-- Top scroll -->
<div class="top-scroll transition">
  <a href="#banner" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
<!-- Top scroll End -->
<header class="transition">
  <div class="container">
    <div class="row flex-align">
      <div class="col-lg-4 col-md-3 col-8">
        <div class="logo">
          <a href="/"><img src="{{ asset('images/logo-text.png') }}" class="transition" alt="Cryptcon" style="height:auto"></a>
        </div>
      </div>
      <div class="col-lg-8 col-md-9 col-4 text-right">
        <div class="menu-toggle">
          <span></span>
        </div>
        <div class="menu">
          <ul class="d-inline-block">
            <li><a href="/#banner">Ecosystem</a></li>

            <li class="mega-menu">
              <span class="opener plus"></span>
              <a href="/">Utilities</a>
              <ul class="transition">
                <li><a href="/">TWINU Wallet</a></li>
                <li><a href="/" target="_blank">TWINU Swap</a></li>
                <li><a href="/">TWINU Stake</a></li>
                <li><a href="/">TWINU Farms</a></li>
                <li><a href="/">TWINU Locker</a></li>
              </ul>
            </li>

            <li><a href="/#tokenomic">Tokenomics</a></li>

            <li><a href="#roadmap">Roadmap</a></li>
          </ul>
          <div class="signin d-inline-block">
            <a href="/" class="btn" style="background: #1B9DF0">Explorer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="home-banner" id="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 position-u wow fadeInRight">
        <div class="banner-img">
          <img src="{{ asset('images/big-banner.png') }}" alt="banner">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 position-u flex-align wow fadeInLeft">
        <div class="banner-contain">
          <h1 class="banner-heading"><span>Trust Wallet Inu</span> Innovate Blockchain Technology</h1>
          <p class="banner-des">A Powerful Decentralized Blockchain Application with Smart Contract Platform</p>
          <a href="https://t.me/TwinuChannel" style="background: #1B9DF0" class="btn" target="_blank"><span class="fa fa-paper-plane"></span> Join Us</a>
          <a href="/files/whitepaper.pdf" class="btn" style="margin-left:10px; background: #1B9DF0" target="_blank"><span class="fa fa-newspaper-o"></span> Whitepaper</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ico-apps parallax-2 lightskyblue pt-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInLeft flex-bottom order-r-2">
        <div class="ico-apps-img w-100 text-center">
          <img src="{{ asset('images/swap-app.png') }}" alt="mobile apps" style="width:50%">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight pb-100 order-r-1">
        <div class="section-heading pb-20">
          <label class="sub-heading">utilities</label>
          <h2 class="heading-title">TWINU SWAP</h2>
          <p class="heading-des pb-20">TWINU Swap is the first utility in the $TWINU Ecosystem.</p>

          <ul class="check-list mb-30">
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Swap Your Favourite Tokens in the best rates</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Easy for Investors Experience UI</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Real Time / Live Chart</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lowest Possible Slippage</p></li>
          </ul>
          <a href="#" class="btn" target="_blank" style="background: #1B9DF0">SWAP NOW</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="work-part lightskyblue ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">what is $TWINU</label>
          <h2 class="heading-title">How it Works</h2>
          <p class="heading-des">$TWINU is the leading provider of blockchain-enabled data network solutions for the Exchange industry.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center flex-align justify-center wow fadeInLeft">
        <div class="work-box">
          <div class="work-box-bg"></div>
          <img src="{{ asset('images/blockchain-banner.png') }}" class="rotation-img" alt="Work Process">
        </div>
      </div>
      <div class="col-md-6 flex-align wow fadeInRight">
        <div class="work-box">
          <h3 class="work-process-title pb-25">We’ve built an innovative blockchain ecosystem.</h3>
          <p class="work-des pb-20">The unique platform uses blockchain, Big Data, machine intelligence, and granular data ownership and consent to build longitudinal profiles of people, places, and things and empower the interactions between them.</p>

          <ul class="check-list">
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Public Blockchain</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Advanced integrations and Scalable Blockchain</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Secure Infrastructure</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Smart Contract Platform</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Smart Locker to Lock Tokens and Liquidity Pools</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Smart Wallet</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Fastest Swap System</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Staking and Farming Platform</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>TWINU Explorer</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="tokenomic" class="feature-part pt-100 pb-10">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">$TWINU Feature</label>
          <h2 class="heading-title">Tokenomics</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInUp pb-80">
          <img src="{{ asset('images/tokenomic.png') }}" class="transition" alt="Cryptcon" style="width:100%">
      </div>
    </div>
  </div>
</section>

<section id="roadmap" class="timeline lightskyblue ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">roadmap</label>
          <h2 class="heading-title">The Timeline</h2>
        </div>
      </div>
    </div>
    <div class="main-roadmap">
      <div class="row">
        <div class="col-md-12 wow fadeInUp pb-80">
            <img src="{{ asset('images/roadmap.png') }}" class="transition" alt="Cryptcon" style="width:100%">
        </div>
      </div>
    </div>

    <div class="row" style="margin:auto;margin-top:50px">
        <div class="col-md-12 col-lg-12 text-center">
            <span class="fa fa-download" style="color:blue;font-size:16px;margin-top:15px;cursor:pointer"> <a href="{{ asset('/files/roadmap.pdf') }}" target="_blank" style="color:blue">Download Roadmap</a></span>
        </div>
    </div>
  </div>
</section>

<script type="text/javascript">



</script>

@stop
