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

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:green;margin-top:20px">The simplest way to trade crypto across the Middle East</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:green">We are here to guide you on your journey to buy and sell cryptocurrencies online less trading fee. With you, every step of the way!</h5>
                        <div class="mt-5 text-center">
                          <a href="https://linktr.ee/arabianprotocol" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:green">LINKTREE</a>
                          <a href="https://poocoin.app/tokens/" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:green">CHART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Utility -->
<section id="product" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:green">Product Sneakpeek</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="{{ asset('images/product.png') }}" style="width:100%;" >
            </div>
        </div>
    </div>

</div>
</section>
<!--/ Utility -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:green">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:green">
        <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <div style="margin-bottom:15px;border-bottom-style: solid;">
                <h3 style="font-size:16px;background:#ACD1AF">Initial LP</h3>
                <h4 style="font-size:24px;color:green">1 BNB + 92% Total Supply Tokens</h4>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top:30px">
            <div class="col-md-6 col-lg-6 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#ACD1AF">Token Symbol</h3>
                    <h4 style="font-size:24px;color:green">XPT</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#ACD1AF">Max Supply</h3>
                    <h4 style="font-size:24px;color:green">1.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px;background:#ACD1AF">Decimals</h3>
                    <h4 style="font-size:24px;color:green">9</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#ACD1AF">Tax</h3>
                    <h4 style="font-size:24px;color:green">12% Buy | 12% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px;background:#ACD1AF">Max Wallet</h3>
                    <h4 style="font-size:24px;color:green">4%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px;background:#ACD1AF">Max Tx</h3>
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
            <h2 class="title" style="color:green">Roadmap</h2>
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
            <h2 class="title" style="color:green">Whitepaper</h2>
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
