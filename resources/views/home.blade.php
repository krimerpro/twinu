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
                <li><a href="/">BoxBit Wallet</a></li>
                <li><a href="https://swap.boxbitblockchain.com/swap" target="_blank">BoxBit Swap</a></li>
                <li><a href="/">BoxBit Stake</a></li>
                <li><a href="/">BoxBit Farms</a></li>
                <li><a href="/">BoxBit Locker</a></li>
              </ul>
            </li>

            <li><a href="/#tokenomic">Tokenomics</a></li>

            <li><a href="/">Roadmap</a></li>
          </ul>
          <div class="signin d-inline-block">
            <a href="/" class="btn">Explorer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="home-banner" id="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 position-u flex-align wow fadeInLeft">
        <div class="banner-contain">
          <h1 class="banner-heading">Invest In <span>BoxBit</span> Way To Trade</h1>
          <p class="banner-des">Decentralized blockchain application with advanced integrations to be the smartest and scalable system</p>
          <a href="https://t.me/BoxBitBlockchain" class="btn" target="_blank"><span class="fa fa-paper-plane"></span> Join BoxBit</a>
          <a href="https://twitter.com/BoxBitChain" class="btn" style="margin-left:10px" target="_blank"><span class="fa fa-twitter"></span> Follow Us</a>
          <a href="/files/whitepaper.pdf" class="btn" style="margin-left:10px" target="_blank"><span class="fa fa-newspaper-o"></span> Whitepaper</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 position-u wow fadeInRight">
        <div class="banner-img">
          <img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/about-2.png" alt="banner">
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
          <img src="{{ asset('images/swap-app.png') }}" alt="mobile apps">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight pb-100 order-r-1">
        <div class="section-heading pb-20">
          <label class="sub-heading">utilities</label>
          <h2 class="heading-title">BOXBIT SWAP</h2>
          <p class="heading-des pb-20">BoxBit Swap is the first utility in the BoxBit Ecosystem.</p>

          <ul class="check-list mb-30">
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Swap Your Favourite Tokens in the best rates</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Easy for Investors Experience UI</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Real Time / Live Chart</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lowest Possible Slippage</p></li>
          </ul>
          <a href="https://swap.boxbitblockchain.com/swap" class="btn" target="_blank">SWAP NOW</a>
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
          <label class="sub-heading">what is BoxBit</label>
          <h2 class="heading-title">How it Works</h2>
          <p class="heading-des">BoxBit is the leading provider of blockchain-enabled data network solutions for the Exchange industry.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center flex-align justify-center wow fadeInLeft">
        <div class="work-box">
          <div class="work-box-bg"></div>
          <img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/work-process.png" class="rotation-img" alt="Work Process">
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
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>BoxBit Explorer</p></li>
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
          <label class="sub-heading">BoxBit Feature</label>
          <h2 class="heading-title">Tokenomics</h2>
          <p class="heading-des">Token distribution and great features</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-1.png" alt="Safe & Secure">
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Safe & Secure</a>
            <p class="feature-des">A public blockchain uses internet-connected computers over the world to validate transactions and achieve consensus. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-2.png" alt="Early Bonus"></a>
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Great Utilities</a>
            <p class="feature-des">4% fees on each transaction goes to Research and Development Wallet to release great utilites</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-3.png" alt="Univarsal Access"></a>
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Great Marketing</a>
            <p class="feature-des">4% fees on each transaction goes to Marketing Wallet to achieve great marketing strategic</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-4.png" alt="Secure Storage"></a>
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Secure Storage</a>
            <p class="feature-des">High Performance Cloud Servers with Secure and Reliable System</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-5.png" alt="Low Cost"></a>
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Best Investment</a>
            <p class="feature-des">Long term investment in Binance Smart Chain</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp pb-80">
        <div class="feature-box">
          <div class="feature-icon">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/feature-6.png" alt="Several Profit"></a>
          </div>
          <div class="feature-contain pt-25">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/feature.html" class="feature-title">Rising Price Floor</a>
            <p class="feature-des">2% fees on every transaction goes to liquidity pool, price floor will be rising from each transaction </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="tokensale-part" class="token-sale parallax lightskyblue ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInLeft flex-align">
        <div class="w-100">
          <div class="section-heading pb-20">
            <label class="sub-heading">token</label>
            <h2 class="heading-title">Token Details</h2>
            <p class="heading-des" style="font-weight:bold">Total Supply: 100.000.000</p>
          </div>
          <div class="token-graphic-detail">
            <ul>
              <li class="color-code-1">62% PancakeSwap LP</li>
              <li class="color-code-2">20% CEX Allocation</li>
              <li class="color-code-3">10% Stacking</li>
              <li class="color-code-4">4% R&D</li>
              <li class="color-code-5">4% Marketing</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 flex-align justify-center-r">
        <div class="token-graph w-100">
          <div class='donut'>
                <div data-lcolor="#61f89f">62</div>
                <div data-lcolor="#5ad6f8">20</div>
                <div data-lcolor="#f85d77">10</div>
                <div data-lcolor="#f8c04e">4</div>
                <div data-lcolor="#ac56f7">4</div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="timeline lightskyblue ptb-100">
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
        <div class="col-md-12">
          <div class="h-border wow fadeInLeft"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="roadmap-slider owl-carousel">
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">PHASE 1</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Concept Creation</p>
                  <p>Team Buildout</p>
                  <p>Project Planning</p>
                  <p>Whitepaper Creation</p>
                  <p>Project Development</p>
                  <p>Social Media Buildout</p>
                  <p>Website Development</p>
                  <p>Utility Development</p>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">PHASE 2</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Stealth Launch on Pancakeswap</P>
                  <p>Post Launch Marketing</P>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">PHASE 3</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Add Logo on Trust Wallet</P>
                  <p>Smart Contract Audit</P>
                  <p>KYC Audit</P>
                  <p>Listing on AveDex</P>
                  <p>Project Partnership</P>
                  <p>Publish DAPP</P>
                  <p>Publish Staking</P>
                  <p>Publish Lottery System</P>
                  <p>Publish Testnet</P>
                  <p>Discord Buildout</P>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">PHASE 4</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Publish Mainnet & Viral Media Campaign</P>
                  <p>Exchanges & Price Tracker Listing</P>
                </div>
              </div>
            </div>
          </div>
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
