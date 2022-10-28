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
            <li><a href="/">Ecosystem</a></li>

            <li class="mega-menu">
              <span class="opener plus"></span>
              <a href="/">Utilities</a>
              <ul class="transition">
                <li><a href="/">BoxBit Wallet</a></li>
                <li><a href="/">BoxBit Swap</a></li>
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
          <a href="#" class="btn">Learn more</a>
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
            <p class="feature-des">3% fees on each transaction goes to Research and Development Wallet to release great utilites</p>
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
            <p class="feature-des">3% fees on each transaction goes to Marketing Wallet to achieve great marketing strategic</p>
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
            <p class="feature-des">3% fees on every transaction goes to liquidity pool, price floor will be rising from each transaction </p>
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
          <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
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
                <div class="date-title">March 2021</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">April 2021</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">May 2021</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
              </div>
            </div>
            <div class="roadmap wow fadeInLeft">
              <div class="roadmap-box text-center">
                <div class="date-title">August 2021</div>
                <div class="map-graphic">
                  <div class="small-round"><span></span></div>
                  <div class="v-row"></div>
                </div>
                <div class="roadmap-detail-box">
                  <p>Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team-part pt-100 pb-55">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">meet the team</label>
          <h2 class="heading-title">Our Team</h2>
          <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 wow fadeInLeft pb-45">
        <div class="team-box flex-align">
          <div class="team-img">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/team-1.jpg" alt="team member"></a>
          </div>
          <div class="team-des">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html" class="member-name">John Doe</a>
            <p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
            <ul class="pt-15">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 pb-45 wow fadeInRight">
        <div class="team-box flex-align">
          <div class="team-img">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/team-2.jpg" alt="team member"></a>
          </div>
          <div class="team-des">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html" class="member-name">John Doe</a>
            <p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
            <ul class="pt-15">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 wow fadeInLeft pb-45">
        <div class="team-box flex-align">
          <div class="team-img">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/team-3.jpg" alt="team member"></a>
          </div>
          <div class="team-des">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html" class="member-name">John Doe</a>
            <p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
            <ul class="pt-15">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 pb-45 wow fadeInRight">
        <div class="team-box flex-align">
          <div class="team-img">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/team-4.jpg" alt="team member"></a>
          </div>
          <div class="team-des">
            <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/team.html" class="member-name">John Doe</a>
            <p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
            <ul class="pt-15">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog-part ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">news</label>
          <h2 class="heading-title">Our Blog</h2>
          <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
      </div>
    </div>
    <div class="blog-slider owl-carousel">
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-1.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-2.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-3.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-1.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-2.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-3.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-1.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-2.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
        </div>
      </div>
      <div class="blog-box wow fadeInUp">
        <div class="blog-img mb-15">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html"><img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/blog-3.jpg" alt="blog"></a>
        </div>
        <div class="blog-des-box">
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
          <ul class="blog-date">
            <li>March 20,2021</li>
            <li>by John Doe</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
          <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/blog-detail.html" class="read-more">Read More</a>
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
          <img src="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/images/ico-img.png" alt="mobile apps">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight pb-100 order-r-1">
        <div class="section-heading pb-20">
          <label class="sub-heading">ico apps</label>
          <h2 class="heading-title">ICO Mobile App</h2>
          <p class="heading-des pb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  also the leap into electronic typesetting, remaining essentially unchanged. </p>

          <ul class="check-list mb-30">
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Crypto-news curation</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Natural Language Understanding</p></li>
            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Et harum quidem rerum facilis est et expedita distinctio.</p></li>
          </ul>
          <a href="#" class="btn">get the app now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="faq-part pt-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="section-heading text-center pb-65">
          <label class="sub-heading">Faqs</label>
          <h2 class="heading-title">Frequently Asked questions</h2>
          <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <ul class="nav nav-tab Frequently-tabs pb-55">
          <li>
              <a class="tab-link active" href="javascript:void(0)" data-tab="tab-1">general</a>
          </li>
          <li>
              <a class="tab-link" href="javascript:void(0)" data-tab="tab-2">pre-ico & ico</a>
          </li>
          <li>
              <a class="tab-link" href="javascript:void(0)" data-tab="tab-3">Tokens</a>
          </li>
          <li>
              <a class="tab-link" href="javascript:void(0)" data-tab="tab-4">client</a>
          </li>
          <li>
              <a class="tab-link" href="javascript:void(0)" data-tab="tab-5">legal</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="tab-content">
            <div class="tab-panel active" id="tab-1">
              <div class="row">
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What is Ico Crypto?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-panel" id="tab-2">
              <div class="row">
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What is Ico Crypto?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-panel" id="tab-3">
              <div class="row">
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What is Ico Crypto?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-panel" id="tab-4">
              <div class="row">
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What is Ico Crypto?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-panel" id="tab-5">
              <div class="row">
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
                <div class="col-md-6 pb-65">
                  <div class="faq-tab">
                    <a href="https://themes.templatescoder.com/crypton/html/demo/1-2/02-Light-Theme/faq.html" class="qus-title">What is Ico Crypto?</a>
                    <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">



</script>

@stop
