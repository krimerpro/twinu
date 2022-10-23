<!-- Header Start-->
<header class="page-header">
  <!-- Horizontal Menu Start-->
  <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1" style="background:green">
    <div class="container">
      <?php
        if($agent->isMobile()){
      ?>
            <h4 style="margin:auto;color:white">ARABIAN PROTOCOL</h4>
      <?php
          }
      ?>

      <button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:20px">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div id="navigation" class="navbar-nav" style="width:100%">
            <ul class="navbar-nav mt-1">
              <?php
                if(!$agent->isMobile()){
              ?>
                  <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                      <a class="nav-link" href="/" style="color:white;font-size:large">ARABIAN PROTOCOL</a>
                  </li>
              <?php } ?>

              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#head-area" style="color:white;font-size:large">Home</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#product" style="color:white;font-size:large">Product</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#tokenomics" style="color:white;font-size:large">Tokenomics</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                  <a class="nav-link" href="#roadmap" style="color:white;font-size:large">Roadmap</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                  <a class="nav-link" href="#whitepaper" style="color:white;font-size:large">Whitepaper</a>
              </li>
          </ul>
          <span id="slide-line"></span>
          <!-- <form class="form-inline mt-2 mt-md-0 text-right" style="margin-left:auto">
              <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0 animated" data-animation="fadeInDown" data-animation-delay="1.8s" href="#connect" style="background:#F6BE00">CONNECT</a>
          </form> -->
        </div>
      </div>
    </div>
  </nav>
  <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->
