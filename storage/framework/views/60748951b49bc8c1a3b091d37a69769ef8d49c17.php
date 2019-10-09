<style>
  .dropdown:hover>.dropdown-menu {
    display: block;
  }

  .dropdown>.dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: none;
  }
</style>
<div class="header-area">
  <div class="container">
    <div class="row">

    </div>
  </div>
</div> <!-- End header area -->

<div class="site-branding-area" style="background: #F1F97F">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="logo">
          <h1><a href="./"><img style="height: 120px;width: 205px;" src="<?php echo e(asset('frontend_asset/logo/trace_sale.png')); ?>"></a></h1>
        </div>
      </div>

      <div class="col-sm-9">
        <div style="margin-top: 0px;padding: 60px 0px 6px 0px; line-height: 1.3px">
          <h1 style="font-family: 'Bitstream Vera Sans';text-shadow: yellowgreen  1px 0 10px"><i>Amrita Consumer Food Products Ltd.</i></h1>
          <small style="text-align: center;text-decoration: underline;">we serve consumer food products with natural flavour and authentic tastes</small>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
          <li><a href="shop.html">Shop page</a></li>
          <li><a href="" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">Single product</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Others</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div> <!-- End mainmenu area -->