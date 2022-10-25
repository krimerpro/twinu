@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
      <div class="banner-wrapper">

            <div class="row align-items-right">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-content">
                      <div id="svg-animation">
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:#FDCC3D;margin-top:20px">The simplest way to trade crypto across the Middle East</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:#FDCC3D">We are here to guide you on your journey to buy and sell cryptocurrencies online less trading fee. With you, every step of the way!</h5>
                        <div class="mt-5 text-center">
                          <a href="https://poocoin.app/tokens/0x0Cee5782631B482EA40dE1908F7285d54298F9E1" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#FDCC3D">CHART</a>
                          <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0x0Cee5782631B482EA40dE1908F7285d54298F9E1" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#FDCC3D">BUY TOKENS</a>
                          <a href="https://t.me/BitcoinBitPortal" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#FDCC3D">TELEGRAM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:#FDCC3D">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#FDCC3D">
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <div style="margin-bottom:15px;border-bottom-style: solid;">
                <h3 style="font-size:16px;background:#FDCC3D">Initial LP</h3>
                <h4 style="font-size:24px;color:green">1 BNB + 92% Total Supply Tokens</h4>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top:30px">
            <div class="col-md-6 col-lg-6 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#FDCC3D">Token Symbol</h3>
                    <h4 style="font-size:24px;color:green">BITCOIN BIT</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#FDCC3D">Max Supply</h3>
                    <h4 style="font-size:24px;color:green">1.000.000.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px;background:#FDCC3D">Decimals</h3>
                    <h4 style="font-size:24px;color:green">9</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#FDCC3D">Tax</h3>
                    <h4 style="font-size:24px;color:green">12% Buy | 12% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#FDCC3D">Max Wallet</h3>
                    <h4 style="font-size:24px;color:green">4%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px;background:#FDCC3D">Max Tx</h3>
                    <h4 style="font-size:24px;color:green">4%</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:#FDCC3D">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->

<!-- Whitepaper -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:#FDCC3D">Whitepaper</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/whitepaper.jpeg') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>

    <div class="row" style="margin:auto;margin-top:15px">
        <div class="col-md-12 col-lg-12 text-center">
            <a href="{{ asset('/documents/whitepaper.pdf') }}" target="_blank" style="color:green;font-size:16px;margin-top:15px;cursor:pointer">View Whitepaper as PDF</a>
        </div>
    </div>
</div>
</section>
<!--/ Whitepaper -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop
